<?php
class Post extends Model{
	
	function getPost($pID){

        $sql = "select * from posts where pID = ?";
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		
	public function getAllPosts($limit = 0){

        //if numposts isnt set, set it to ""
        if (!isset($numposts)) {
            $numposts = "";
        }
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT * FROM posts'.$numposts;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}
	
	public function addPost($data){
		
		$sql='INSERT INTO posts (title,content,categoryID,date,uID) VALUES (?,?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;
		
	}

	public function updatePost($data) {

        //grabbing the variables from data
        $title = $data['title'];
        $content = $data['content'];
        $categoryID = $data['categoryID'];
        $date = $data['date'];
        $pID = $data['pID'];

        $sql = "update posts set title='$title', content='$content', categoryID='$categoryID', date='$date' where pID = '$pID'";
        $this->db->execute($sql);
        $message = 'Post updated.';
        return $message;
    }

    public function deletePost($data) {

        $sql = "DELETE FROM posts WHERE pID = " . $data['pID'];
        $this->db->execute($sql);

        $message = 'Post Deleted';
        return $message;

    }

    public function getSpecificPosts($cID) {

        $sql = "SELECT * FROM posts WHERE categoryID = '$cID'";

        $posts = $this->db->execute($sql);

        return $posts;
    }
	
}
