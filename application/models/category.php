<?php

class Category extends Model {

    function getAllCategories() {

        $sql = 'SELECT categoryID, name FROM categories';

        // perform query
        $results = $this->db->execute($sql);

        while ($row = $results->fetchrow()) {
            $categories[] = $row;
        }

        return $categories;
    }

}

?>
