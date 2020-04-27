<?php
//penser à mettre les closes cursor dans le manager
require('postManager.php'); //require once ?
$postManager = new PostManager;
$post = $postManager->readPost(1);
$data = $post->fetch();
echo $data['title'], nl2br($data['content']);


