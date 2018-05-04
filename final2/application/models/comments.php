<?php
class Comments extends Model{

    //function to add the comment to the database
    public function insertComment($data) {
        $sql='INSERT INTO comments (uID,commentText,date,postID) VALUES (?,?,?,?)';
        $this->db->execute($sql,$data);

        $message = 'Comment Added.';
        return $message;

    }

    //function to delete the comments
    public function deleteComment($commentID) {
        $sql = 'DELETE FROM comments WHERE commentID = ' . $commentID;

        $this->db->execute($sql);

        header ('Location:' . BASE_URL . 'blog/index');
    }

    public function getAllComments($limit = 0) {

        //if numcoms isnt set, set it to ""
        if (!isset($numcoms)) {
            $numcoms = "";
        }

        if($limit > 0){

            $numcoms = ' LIMIT '.$limit;
        }

        $sql =  'SELECT * FROM comments'.$numcoms;

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;
    }

}
