<?php
class MainController extends Controller{
    public $mainmodel;

    function __construct(){
        $this->mainmodel=$this->model("Main");
    }
    
    
    function Home(){
        $list_brand = $this->mainmodel->getbrand();
        $view = $this->view("mastermain",[
            "listbr"=>$list_brand
        ]);
    }
}
?>