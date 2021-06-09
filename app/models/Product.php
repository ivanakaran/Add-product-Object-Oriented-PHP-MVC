<?php
class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProducts()
    {
        $this->db->query('SELECT * FROM products');
        $results = $this->db->resultSet();

        return $results;
    }

    public function addProduct($data)
    {
        $this->db->query('INSERT INTO products(sku, name, price, type, typevalue) VALUES(:sku, :name, :price, :type, :typevalue)');
        //  Bind values
        $this->db->bind(':sku', $data['sku']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':typevalue', $data['typevalue']);

        //  Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {

        foreach($_POST['products'] as $deleteid){

            $this->db->query("DELETE from products WHERE id=".$deleteid);
            if ($this->db->execute()) {
                               return true;
                           } else {
                               return false;
                           }      
                        }        
          }
        

}
