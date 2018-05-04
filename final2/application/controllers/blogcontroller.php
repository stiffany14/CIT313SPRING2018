<?php

class BlogController extends Controller{

    public $postObject;
    public $commentsObject;

    public function post($pID){

        $this->postObject = new Post();
        $post = $this->postObject->getPost($pID);
        $this->set('post',$post);

    }

    public function index(){

        $this->postObject = new Post();
        $posts = $this->postObject->getAllPosts();
        $this->set('title', 'The Default Blog View');
        $this->set('posts',$posts);

    }

    public function addComment() {
        $this->commentsObject = new Comments();

        $data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date'=>$_POST['date'], 'postID'=>$_POST['pID']);

        $result = $this->commentsObject->insertComment($data);

        $this->set('message', $result);

    }

    public function getComments() {
        $this->commentsObject = new Comments();
        $comments = $this->commentsObject->getAllComments();

        $this->set('comments', $comments);
        return $comments;
    }

    public function category($cID) {
        $this->postObject = new Post();

        $posts = $this->postObject->getSpecificPosts($cID);

        $this->set('title', $cID);
        $this->set('posts', $posts);
    }

}
