<?php
require_once(__ROOT__ . "controller/Controller.php");

class ProductsController extends Controller{
    public function insert() {
        $id=$_REQUEST["id"];
        $title=$_REQUEST["title"];
        $description=$_REQUEST["description"];
        $category=$_REQUEST["category"];
        $price=$_REQUEST["price"];
        $prod_image=$_REQUEST["prod_image"];
        $added_at=$_REQUEST["added_at"];
 
		$this->model->insertProduct($title,$description,$category,$price,$prod_image,$added_at);
	}
}