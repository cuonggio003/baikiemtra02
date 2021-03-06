<?php
namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $model;


    public function __construct()
    {
        $this->model = new ProductModel();
        parent::__construct($this->model);
    }


    public function index()
    {
        $products = parent::index();
        include "src/Views/Product/list.php";
    }

    public function store()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/Views/Product/create.php";
        } else {
            $data = [
                "product_code" => $_POST["product_code"],
                "product_name" => $_POST["product_name"],
                "Sector" => $_POST["Sector"],
                "Price" => $_POST["Price"],
                "Quantity" => $_POST["Quantity"],
                "Date_created" => $_POST["Date_created"],
                "Item_Description" => $_POST["Item_Description"]	

            ];
            $this->model->store($data);
            header("Location:index.php?page=product-list");
        }
        
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location:index.php?page=product-list");
    }


    public function update($id) {

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $product = $this->model->getById($id);
            include "src/Views/Product/update.php";
        } else {
            $data = [
                "product_code" => $_POST["product_code"],
                "product_name" => $_POST["product_name"],
                "Sector" => $_POST["Sector"],
                "Price" => $_POST["Price"],
                "Quantity" => $_POST["Quantity"],
                "Date_created" => $_POST["Date_created"],
                "Item_Description" => $_POST["Item_Description"]	

            ];
            $this->model->update($id, $data);
            header("Location:index.php?page=product-list");
        }
    }


    public function search($keyword){
        $product = $this->model->search($keyword);
        include "src/Views/Product/list.php";
    }

}