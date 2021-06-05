<?php
class Product {
   private $db;

   public function __construct(){
     $this->db = new Database;
   }

   public function getProducts(){
     $this->db->query("SELECT * FROM products");
      return $this->db->resultSet();
   }
}