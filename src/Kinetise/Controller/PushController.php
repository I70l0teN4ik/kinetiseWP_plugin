<?php

namespace Kinetise\Controller;

use KinetiseApi\Controller\AbstractController;
use KinetiseApi\HTTP\KinetiseDataFeedResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class PushController extends AbstractController
{
    /**
     * @return KinetiseDataFeedResponse
     *
     * @Kinetise\MethodDesc
     */
    public function indexAction()
    {
        if ($this->getRequest()->isMethod('POST')) {
            $url = "http://push.funandmobile.com/api/direct-message";
            $apiKey = $this->getRequest()->request->get('push_api_key', "614abb191cc15ed35081ad451cafb103");
            $message = $this->getRequest()->request->get('message', null);

            $users = $this->getUsersWithDeviceToken();
            foreach ($users as $user) {
                $deviceID = \get_user_meta($user->ID, '_kinetise_device_token', true);
                $messageXML = $this->preparePushXmlBody($apiKey, $message, $deviceID );

                $response = \wp_remote_post( $url, array(
                        'method'      => 'POST',
                        'timeout'     => 45,
                        'redirection' => 5,
                        'body'        => $messageXML,
                        'cookies'     => array()
                    )
                );

                $responses = array("xml" => $messageXML);
                if ( \is_wp_error( $response ) ) {
                    $responses['errors'][] = $response->get_error_message();
                } else {
                    $responses['successes'][] = $response;
                }
            }

            return new JsonResponse($responses);
        }
        return new JsonResponse();
    }

    private function getUsersWithDeviceToken()
    {
        $users = \get_users(
            array(
                'meta_key' => '_kinetise_session_id',
                'meta_compare' => 'EXISTS',
                'count_total' => false
            )
        );

        if (sizeof($users)) {
            return $users;
        }

        return false;
    }

    private function preparePushXmlBody($apiKey, $message, $deviceId)
    {
        $dom = new \DOMDocument('1.0', 'UTF-8');

        $dataNode = $dom->createElement('data');
        $dom->appendChild($dataNode);

        $authorizationNode = $dom->createElement('authorization');
        $authorizationNode->appendChild($dom->createElement('hash', $apiKey));
        $dataNode->appendChild($authorizationNode);

        $pushNode = $dom->createElement('push');
        $dataNode->appendChild($pushNode);

        $pushNode->appendChild($dom->createElement('type', 0));

        $deviceNode = $dom->createElement('device');
        $pushNode->appendChild($deviceNode);
        $deviceNode->appendChild($dom->createElement('deviceId', $deviceId));

        $messageNode = $dom->createElement('message', $message);
        $pushNode->appendChild($messageNode);

        $pushNode->appendChild($dom->createElement('messageType', 'Kinetise'));

        return $dom->saveXML();
    }
}
