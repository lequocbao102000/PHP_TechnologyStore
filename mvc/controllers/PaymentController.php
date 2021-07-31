<?php
class PaymentController extends Controller{
    function __construct(){
        if (!isset($_SESSION['username'])){
            header('Location:'.BASE_URL."/AccountController/Login");
        }
        else if (empty($_SESSION['cart'])||$_SESSION['cart']==null){
            header('Location:'.BASE_URL."/CartController/");
        }
    }
    function Home(){
        $this->view("payment",[

        ]);
    }
    function Payment(){
        if (!isset($_POST['btnpay'])){
            header('Location:'.BASE_URL."/PaymentController/");
        }
        else{
            $row = $_SESSION['cart'];
                $i = 0;
                $total = 0;                
                foreach ($row as $product){
                // echo  $product['qty']."</br>".$product[$i]['id'];
					//   $product[$i]['price']*$product['qty']
				
                    // $total+=$product[$i]['price']*$product['qty'];
                    }
                $ran = rand(1,1000);
                echo $ran;   
            $address = $_POST['address'].", ".$_POST['district'].", ".$_POST['city'];
            echo $address;
        }
    } 
}
?>