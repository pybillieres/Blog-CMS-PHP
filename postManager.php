<?php
class PostManager
{
    private $_db;

    public function __construct()
    {
        $this->setDb();
    }

    public function setDb()
    {
        $db = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', '');//mettre ca ailleur en mettant le try/catch
        $this->_db = $db;
        
    }


    public function createPost($title, $content, $date) //utiliser tjr meme nom de variable genant pour lecture du code ?
    {
        $req = $this->_db->prepare('INSERT TO posts(title, content, date) VALUES(:title, :content, :date) ');
        $req->execute(array (
            ':title'=>$title,
            ':content'=>$content,
            ':date'=>$date));
        
    }

    public function readPost($id)//verifier le parametre avant de lancer la requete ?!
    {
        $req = $this->_db->prepare('SELECT * FROM posts WHERE id=?');
        $req->execute(array($id));
        return $req;
    }

    public function readPosts()
    {
        
    }

    public function updatePost(Post $post)
    {

    }

    public function deletePost(Post $post)
    {

    }

    public function count()
    {

    }

}

//a quel endroit appeller le PDO