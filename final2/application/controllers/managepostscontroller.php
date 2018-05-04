<?php

class ManagePostsController extends Controller{
	
	public $postObject;

    protected $access = 1;

    public function index() {

        $this->postObject = new Post();
        $posts = $this->postObject->getAllPosts();

        $this->set('posts',$posts);
    }

	public function add(){
		
		$this->postObject = new Post();
		$this->set('task', 'save');
	
	
	}
	
	public function save(){
		
			$this->postObject = new Post();
			
			$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'categoryID'=>$_POST['category'], 'date'=>$_POST['date'], 'uID'=>$_POST['uID']);

			$result = $this->postObject->addPost($data);
			
			$this->set('message', $result);
			
		
	}
	
	public function edit($pID){

        $this->postObject = new Post();

        $post = $this->postObject->getPost($pID);

        $this->set('pID', $post['pID']);
        $this->set('title', $post['title']);
        $this->set('content', $post['content']);
        $this->set('task', 'update');
		
	}


    public function update() {

        $this->postObject = new Post();

        $data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'categoryID'=>$_POST['category'], 'date'=>$_POST['date'], 'pID'=>$_POST['pID']);

        $result = $this->postObject->updatePost($data);

        $this->set('message', $result);

    }

    public function deletePost() {

        $this->postObject = new Post();

        $data = array('pID'=>$_POST['pID']);

        $result = $this->postObject->deletePost($data);

        $this->set('message', $result);

    }

}
