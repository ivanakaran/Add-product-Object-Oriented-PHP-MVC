<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function index()
    {
        // Get products
        $products = $this->productModel->getProducts();
        $data = ['products' => $products];

        $this->view('pages/index', $data);
    }

    public function addproduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // print_r($_POST);
            // die();
            $data = [
                'sku' => trim($_POST['sku']),
                'name' => trim($_POST['name']),
                'price' => $_POST['price'],
                'type' => $_POST['type'],
                'typevalue' => $_POST['typev'],
                'sku_err' => '',
                'name_err' => '',
                'price_err' => '',
                'type_err' => '',
                'typevalue_err' => '',
            ];

            // Validation
            if (empty($data['sku'])) {
                $data['sku_err'] = 'Please enter SKU Number';
            }

            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter product price';
            }

            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter product name';
            }

            if (empty($data['type'])) {
                $data['type_err'] = 'Please enter product type';
            }

            if (empty($data['typev'])) {
                $data['typevalue_err'] = 'Please, provide the data of indicated type';
            }

            if (empty($data['name_err']) && empty($data['name_err']) && empty($data['price_err'])) {
                // Validated
                if ($this->productModel->addProduct($data)) {
                    redirect('');
                } else {
                    die("Something went wrong");
                }
            } else {
                $this->view('pages/addproduct', $data);
            }

        } else {
            $data = [
                'sku' => '',
                'name' => '',
                'price' => '',
                'type' => '',
                'typevalue' => '',
            ];

            $this->view('pages/addproduct', $data);
        }

    }

    public function deleteProduct()
    {
        if (isset($_POST['deleteMutlipleBtn'])) {
            if (isset($_POST['products'])) {
                foreach ($_POST['products'] as $deleteid) {
                    if ($this->productModel->delete($deleteid)) {
                        redirect('');
                    } else {
                        die('Something went wrong');
                    }
                }
            }else{
                redirect('');
            }
        }
    }

}
