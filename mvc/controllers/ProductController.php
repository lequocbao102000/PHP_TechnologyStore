<?php
class ProductController extends Controller{
    public $productmodel;
    public $mainmodel;

    function __construct(){
        $this->mainmodel = $this->model("Main");
        $this->productmodel = $this->model("Product");
        
    }
    
    
    function Home(){
        header('Location :'.BASE_URL."/ProductController/Products");
    }
    function Products(){
        $list_brand = $this->mainmodel->getbrand();
        if (isset($_GET['brand'])){
            $list_product = $this->productmodel->getproductfrombrand($_GET['brand']);
            $this->view("masterproduct",[
                "page"=>"product",
                "listbr"=>$list_brand,
                "listproduct"=>$list_product
            ]);
        }
        else{
            header('Location:'.BASE_URL);
        }
    }

    function Detail(){
        if (isset($_GET['idproduct'])){
            $product  = $this->productmodel->getproduct($_GET['idproduct']);
            $this->view("masterproduct",[
                "page"=>"productdetail",
                "product"=>$product
                     
            ]);
        }
        else{
            header('Location:'.BASE_URL);
        }
        
    }
}
?>