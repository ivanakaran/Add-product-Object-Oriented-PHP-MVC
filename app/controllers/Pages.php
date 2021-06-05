<?php

class Pages extends Controller{
  public function __construct(){
     $this->productModel = $this->model('Product');
  }

  public function index(){
    $posts = $this->productModel->getProducts();
    $data = ['title' => 'Product List', 'posts'=>$posts];

    
   $this->view('pages/index', $data);
  }


}