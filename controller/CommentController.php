<?php
namespace Pierre\P4\controller;
use Pierre\P4\Model\CommentManager;


class CommentController
{
    function listComment($postId)
    {
        $commentManager = new CommentManager;
        $listComments = $commentManager->readCommentsById($postId);
        return $listComments;
    }
}