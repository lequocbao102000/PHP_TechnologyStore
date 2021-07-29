<?php
class Product extends DB{
    function getproductfrombrand($id_brand){
        $query = 'select * from product where id_brand='.$id_brand.'';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
    }

    function getproduct($id){
        $query = 'select * from product where id='.$id.'';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
    }
}
?>