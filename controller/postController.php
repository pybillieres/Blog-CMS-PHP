<?php

function loadClass($class)
{
    require 'model/'.$class.'.php'; //pas plus simple ? namspace ?
}

spl_autoload_register('loadClass'); //pourquoi il n'appelle pas loadclass comme une fonction ? Ou le placer


function listPosts()
{
    $postManager = new PostManager;
    $posts = $postManager->readPosts();
    //comment traiter mes données ici ? point sur fetch() et ou le mettre

    //require(listView)
}

function post($id)
{
    $postManager = new PostManager;
    $post = $postManager->readPost($id);
    $data = $post->fetch();
    echo $data['title'];
    //require(postView)
}




