<?php

namespace Kinetise\Controller;

use KinetiseApi\Controller\AbstractController;
use KinetiseApi\HTTP\KinetiseDataFeedResponse;
use KinetiseApi\HTTP\KinetiseErrorResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthController extends AbstractController
{
    /**
     * @return KinetiseDataFeedResponse
     *
     * @Kinetise\MethodDesc
     */
    public function indexAction()
    {
        if ($this->getRequest()->isMethod('POST')) {
            $username = $this->getRequest()->request->get('username', null);
            $password = $this->getRequest()->request->get('password', null);
            $deviceToken = $this->getRequest()->query->get('devicetoken', null);

            /**
             * In multi-site, wp_authenticate_spam_check filter is run on authentication. This filter calls
             * get_currentuserinfo which in turn calls the determine_current_user filter. This leads to infinite
             * recursion and a stack overflow unless the current function is removed from the determine_current_user
             * filter during authentication.
             */
            \remove_filter('determine_current_user', 20);
            $user = \wp_authenticate($username, $password);
            \add_filter('determine_current_user', 20);

            if (\is_wp_error($user)) {
                return new KinetiseErrorResponse(strip_tags($user->get_error_message()));
            }

            /**
             * Create new session id and add it ro users metadata
             */
            $sessionId =  md5($user->get('user_login').time());
            \add_user_meta($user->ID, '_kinetise_session_id', $sessionId);

            if ($deviceToken) {
                \update_user_meta($user->ID, '_kinetise_device_token', $deviceToken);
            }

            $res = array(
                'sessionId' => $sessionId,
                "applicationVariables" => array("_USER_ROLE" => reset($user->roles))
            );
            return new JsonResponse($res);
        }
        return new JsonResponse();
    }

    public function logoutAction()
    {
        $user = $this->getUserBySessionId();
        if ($user) {
            $sessionId = $this->getRequest()->query->get('sessionId', false);
            \delete_user_meta($user->ID, '_kinetise_session_id', $sessionId);
        }
        return new JsonResponse();
    }

    public function registerAction()
    {
        $username = $this->getRequest()->request->get('username', null);
        $password = $this->getRequest()->request->get('password', null);
        $email = $this->getRequest()->request->get('email', null);
        \remove_filter('determine_current_user', 20);
        $user = \wp_create_user($username, $password, $email);
        \add_filter('determine_current_user', 20);

        if (\is_wp_error($user)) {
            return new KinetiseErrorResponse(strip_tags($user->get_error_message()));
        }

        return new JsonResponse();
    }
}
