<?php

class AddPostController extends Controller{
	
	public $postObject, $categoryObject;
        
        protected $access = 1;
	
	public function defaultTask(){
		
		$this->postObject = new Post();
		$this->set('task', 'add');
	
	
	}
        
        public function categories(){
	   
		$this->postObject = new Post();
		$categories = $this->postObject->getAllCategories();	    
	  	$this->set('categories',$categories);
	   
   	}
	
	public function add(){
		
			$this->postObject = new Post();
			
			$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'categoryID'=>$_POST['post_category'], 'date'=>$_POST['post_date'], 'uID'=>$_POST['uID']);
			
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
	
	
}
