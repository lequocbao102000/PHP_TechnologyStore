<?php
class PaymentController extends Controller{
    protected $paymentmodel;
    function __construct(){
        if (!isset($_SESSION['username'])){
            header('Location:'.BASE_URL."/AccountController/Login");
        }
        else if (empty($_SESSION['cart'])||$_SESSION['cart']==null){
            header('Location:'.BASE_URL."/CartController/");
        }
        $this->paymentmodel = $this->model("Payment");
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
            $address = $_POST['address'].", ".$_POST['district'].", ".$_POST['city'];
            $i = 0;
            $total = 0;                
            foreach ($row as $product){
                $total+=$product[$i]['price']*$product['qty'];
            }
            //Random id hoa don va kiem tra
            do{
                $ran = rand(1,999999999);
                $check = $this->paymentmodel->checkID($ran);
            }while(count($check)>0);
            // Them hoa don
            if ($this->paymentmodel->InsertReceipt($ran,$_SESSION['username'],$address,$total)){
                // Them chi tiet hd
                foreach ($row as $product){
                    $detail_idpro = $product[$i]['id'];
                    $detail_price = $product[$i]['price'];
                    $detail_amount = $product['qty'];
                    $detail_money = $product[$i]['price']*$product['qty'];
                    $this->paymentmodel->InsertReceiptDetails($ran,$detail_idpro,$detail_price,$detail_amount,$detail_money);
                    //cap nhat so luong sp
                    $stockupdate =$product[$i]['stock'] - $product['qty'];
                    $this->paymentmodel->UpdateStock($detail_idpro,$stockupdate);
                    
                }
                 
                //xoa gio hang khi them thanh cong
                unset($_SESSION['cart']);               
            }
           
            header('Location:'.BASE_URL."/AccountController/User");
        }
    } 
}
?>