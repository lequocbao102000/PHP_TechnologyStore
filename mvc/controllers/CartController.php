<?php
class CartController extends Controller{
    protected $productModel;
    function __construct(){
        $this->productModel = $this->model("Product");
    }
    function Home(){
        if (empty($_SESSION['cart'])||$_SESSION['cart']==null){
            $products = [];
        }
        else{
            $products = $_SESSION['cart'];
        }
        // var_dump($products);
        $this->view("cart",[
        "products"=>$products
        ]);
       

    }
    function Cart(){
        $productID = $_GET['idcart'] ?? null;
        if (isset($_GET['idcart'])){
            $product = $this->productModel->getproduct($_GET['idcart']);
        }
       
        if (empty($_SESSION['cart'])||!array_key_exists($productID,$_SESSION['cart'])){
            $product['qty'] = 1;
            $_SESSION['cart'][$productID] = $product;
        }
        else{
            $product['qty'] = $_SESSION['cart'][$productID]['qty'] + 1;
            $_SESSION['cart'][$productID] = $product;   
        }
        header ('Location:'.BASE_URL."/CartController/");
        

    }

    function DeleteAllCart(){
        unset($_SESSION['cart']);
        header ('Location:'.BASE_URL."/CartController/");
    }
    
    function DeleteItemCart(){
        if (isset($_GET['xoacart'])){
            unset($_SESSION['cart'][$_GET['xoacart']]);
            header ('Location:'.BASE_URL."/CartController/");
        }
        else{
            header ('Location:'.BASE_URL."/CartController/");
        }
    }
}
?>