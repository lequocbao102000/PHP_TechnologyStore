<?php
class Account extends DB{
    public function createaccount($username,$password,$fullname,$email){
        $query = "insert into account values ('$username','$password','$fullname','$email')";
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }

    public function login($username){
        $query = 'select * from account where username="'.$username.'" ';
        $rows= mysqli_query($this->connect, $query);
         $data = [];
         while ($row = mysqli_fetch_array($rows)){
             $data[]=$row;
         }
         return $data;
        
    }

    function userhistory($username){
        $query = 'select * from receipt where username="'.$username.'" ';
        $rows= mysqli_query($this->connect, $query);
         $data = [];
         while ($row = mysqli_fetch_array($rows)){
             $data[]=$row;
         }
         return $data;
    }

    function userreceipt($username){
        $query = 'select * from receipt where username="'.$username.'" ';
        $rows= mysqli_query($this->connect, $query);
         $data = [];
         while ($row = mysqli_fetch_array($rows)){
             $data[]=$row;
         }
         return $data;
    }

    function userreceipt_details($id){
        $query = 'select receipt_details.*,product.name,product.image from receipt_details inner join product on 
        receipt_details.id_product = product.id where id_receipt ='.$id.'';
        $rows= mysqli_query($this->connect, $query);
         $data = [];
         while ($row = mysqli_fetch_array($rows)){
             $data[]=$row;
         }
         return $data;
    }
}
?>