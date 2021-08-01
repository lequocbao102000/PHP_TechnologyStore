<?php
class Payment extends DB{
    function CheckID($id){
        $query = 'select * from receipt where id='.$id.' ';
        $rows= mysqli_query($this->connect, $query);
         $data = [];
         while ($row = mysqli_fetch_array($rows)){
             $data[]=$row;
         }
         return $data;
    }

    function InsertReceipt($id,$username,$address,$total){
        $created_at = date('Y-m-d H:s:i');
        $query = 'insert into receipt (id,username,created_at,address,total) values
        ('.$id.',"'.$username.'","'.$created_at.'","'.$address.'",'.$total.')';
        $result = false;
        if (mysqli_query($this->connect,$query)){
            $result = true;
        }
        return $result;
    }

    function InsertReceiptDetails($id,$idpro,$price,$amount,$money){
        $query = 'insert into receipt_details (id_receipt,id_product,price,amount,money) values
        ('.$id.','.$idpro.','.$price.','.$amount.','.$money.')';
        $result = false;
        if (mysqli_query($this->connect,$query)){
            $result = true;
        }
        return $result;
    }

    function UpdateStock($id,$stock){
        $query = 'update product set stock ='.$stock.' where id='.$id.'';
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }
}
?>