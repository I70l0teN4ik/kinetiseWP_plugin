<html>
<head>
    <?php \wp_head(); ?>
</head>
    <body style="background:#ffffff;">
        <h1><?php echo $this->view->post->post_title ?></h1>
        <small>
                <?php $postDate = new \DateTime($this->view->post->post_date_gmt);
                       echo $postDate->format('D, d M Y H:i:s'); ?>
        </small>
        <hr>
        <?php echo $this->view->post->post_content ?>
    </body>
</html>