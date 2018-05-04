<?php

class CategoriesController extends Controller{

    public $categoriesObject;

    public function category($gID){

        $this->categoriesObject = new Categories();
        $category = $this->categoriesObject->getCategory($cID);
        $this->set('categories',$category);

    }

    public function index(){

        $this->categoriesObject = new Categories();
        $categories = $this->categoriesObject->getCategories();
        $this->set('categories',$categories);

    }

    public function addCategory() {

        $this->categoriesObject = new Categories();

        $data = array('name'=>$_POST['categoryName']);

        $result = $this->categoriesObject->addCategory($data);

        $this->set('message', $result);

    }

    public function edit($categoryID) {
        $this->categoriesObject = new Categories();

        $category = $this->categoriesObject->getCategory($categoryID);

        $this->set('categoryID', $category['categoryID']);
        $this->set('name', $category['name']);
        $this->set('task', 'update');

    }

    public function update() {
        $this->categoriesObject = new Categories();

        $cd = $_POST['categoryID'];
        $name = $_POST['name'];

        $result = $this->categoriesObject->update($cd,$name);

        $this->set('message', $result);
    }

}
