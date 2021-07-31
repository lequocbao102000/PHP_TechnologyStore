<?php
class AdminController extends Controller{
    public $adminmodel;
    function __construct(){
        $this->adminmodel=$this->model('Admin');
        
        if (isset($_SESSION['username'])){
            if ($_SESSION['username']!="admin"){
                header('Location: '.BASE_URL);
            }
        }
        else if (!isset($_SESSION['username'])){
            header('Location: '.BASE_URL);
        }
       
        
    }

    function Home(){
        header('Location: '.BASE_URL."/AdminController/Category/");
    }

    function Category(){
        if (isset($_POST['btncreatecate'])){          
            if ($this->adminmodel->createcategory($_POST['name_category'],$_POST['type_category'])){
                $list = $this->adminmodel->getcategory();
                $type = $this->adminmodel->gettype();    
                $this->view("masteradmin",[  
                "admin"=>"managecategory",
                "listcate"=>$list,
                "listtype"=>$type
                ]);
                echo "<script type='text/javascript'>alert('Add Category Complete');</script>";
            }
            else{
                $list = $this->adminmodel->getcategory();
                $type = $this->adminmodel->gettype();    
                $this->view("masteradmin",[  
                "admin"=>"managecategory",
                "listcate"=>$list,
                "listtype"=>$type
                ]);
                echo "<script type='text/javascript'>alert('Add Category Fail');</script>";
            }

        }
        else{
            $list = $this->adminmodel->getcategory();
            $type = $this->adminmodel->gettype();    
            $this->view("masteradmin",[  
                "admin"=>"managecategory",
                "listcate"=>$list,
                "listtype"=>$type
            ]);
        }
      
    }

    function EditCategory(){
        $list = $this->adminmodel->getcategory();
        $type = $this->adminmodel->gettype(); 
        if (isset($_GET['id'])){
            $this->view("masteradmin",[  
                "admin"=>"editcategory",
                "listcate"=>$list,
                "listtype"=>$type,
                "idedit"=>$this->adminmodel->getcategorywhere($_GET['id'])
            ]);
            if (isset($_POST['btneditcate'])){
                if ($this->adminmodel->editcategory($_GET['id'],$_POST['name_category_edit'],$_POST['type_category_edit'])){
                    
                    echo "<script type='text/javascript'>alert('Edit Complete');</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Edit Fail, please try again');</script>";
                }
            }
            else{
                $this->view("masteradmin",[  
                    "admin"=>"editcategory",
                    "listcate"=>$list,
                    "listtype"=>$type,
                    "idedit"=>$this->adminmodel->getcategorywhere($_GET['id'])
                ]);
            }
           
        }
        else if (isset($_GET['xoacate'])){
            $this->adminmodel->deletecategory($_GET['xoacate']);
            $this->view("masteradmin",[  
                "admin"=>"editcategory",
                "listcate"=>$list,
                "listtype"=>$type
            ]);
        }
        else{
            $this->view("masteradmin",[  
                "admin"=>"editcategory",
                "listcate"=>$list,
                "listtype"=>$type
            ]);
        }
    }

    function ReceiptManage(){
        $list_receipt = $this->adminmodel->getallreceipt();
        $this->view("masteradmin",[
            "admin"=>"receipt",
            "listreceipt"=>$list_receipt
        ]);
    }

    function Product(){
        $list_product = $this->adminmodel->getproduct();
        $list_brand = $this->adminmodel->getbrand();       
        if (isset($_POST['btncreateproduct'])){
            if ($this->adminmodel->createproduct($_POST['name_product'],$_POST['des_product'],$_POST['price_product'],
            $_POST['amount_product'],$_POST['type_brand_product'],$_FILES['img_product']['name'])){
                $file = $_FILES['img_product']['name'];
                move_uploaded_file($_FILES['img_product']['tmp_name'],"uploads/".$file."");
                $this->view("masteradmin",[
                    "admin"=>"manageproduct",
                    "listproduct"=>$list_product,
                    "listbrand"=>$list_brand
                   
                ]);
                echo "<script type='text/javascript'>alert('Add Product Complete');</script>";
            }
            else{
                $this->view("masteradmin",[
                    "admin"=>"manageproduct",
                    "listproduct"=>$list_product,
                    "listbrand"=>$list_brand
                   
                ]);
                echo "<script type='text/javascript'>alert('Add Product Fail');</script>";
            }
            
           
            
        }
        else{
            $this->view("masteradmin",[
                "admin"=>"manageproduct",
                "listproduct"=>$list_product,
                "listbrand"=>$list_brand
               
            ]);
        }
       
    }

    function EditProduct(){
        $list_product = $this->adminmodel->getproduct();
        $list_brand = $this->adminmodel->getbrand();

        if (isset($_GET['editproduct'])){
            $product = $this->adminmodel->getproductwhere($_GET['editproduct']);
            // var_dump($product);exit();
            $this->view("masteradmin",[  
                "admin"=>"editproduct",
                "listproduct"=>$list_product,
                "listbrand"=>$list_brand,
                "editproduct"=>$product
            ]);
            if (isset($_POST['btneditproduct'])){
                $name = $_POST['edit_name_product'];
                $description = $_POST['edit_des_product'];
                $image = $_POST['edit_img_product'];
                $price = $_POST['edit_price_product'];
                $stock = $product[0]['stock'] + $_POST['edit_amount_product'];
                $brand = $_POST['edit_type_brand_product'];
                if ($this->adminmodel->editproduct($_GET['editproduct'],$name,$description,$image,$price,$stock,$brand)){                    
                    // move_uploaded_file($_FILES['edit_img_product']['tmp_name'],"uploads/".$file."");
                    echo "<script type='text/javascript'>alert('Edit Complete');</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Edit Fail, please try again');</script>";
                }
            }
           
           
        }
        else if (isset($_GET['xoaproduct'])){
            $this->adminmodel->deleteproduct($_GET['xoaproduct']);
            $this->view("masteradmin",[  
                "admin"=>"editproduct",
                "listproduct"=>$list_product,
                "listbrand"=>$list_brand
                
            ]);
        }
        else{
            $this->view("masteradmin",[  
                "admin"=>"editproduct",
                "listproduct"=>$list_product,
                "listbrand"=>$list_brand
                
            ]);
        }
            
    }
    
}
?>