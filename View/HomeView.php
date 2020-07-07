
<?php $this->_title = "Accueil"; ?>
<div class="container">
<?php
if (empty($posts) != TRUE) {
    foreach ($posts as $post)
    {
        ?>
        <div class="pb-5 mb-5">
        <h2 class="text-center"><a href="post/post/<?=($post->id())?>"><?= htmlspecialchars($post->Title());?></a></h2>
        <p><?= substr($post->content(), 0, 500) ?>...</p>
        <a href="post/post/<?=($post->id())?>">Lire la suite</a>
        </div>
        <br>
        <?php
        
    }

}
else
{
    ?>
    <h2 class="text-center">Pas de posts pour le moment</h2>
    <?php
}
?>
</div>
