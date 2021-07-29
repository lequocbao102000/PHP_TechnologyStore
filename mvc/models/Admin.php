<?php
class Admin extends DB{
    
    public function getcategory(){
        $query = 'select brand.id, brand.name, category.name  from brand inner join category on brand.id_cate=category.id';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
        
    }

    public function gettype(){
        $query = 'select * from category';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
    }
    public function getbrand(){
        $query = 'select * from brand';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
    }

    public function createcategory($name,$id_cate){
        $query = "insert into brand(name,id_cate) values ('$name','$id_cate')";
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }

    public function editcategory($id,$name,$id_cate){
        $query = 'update brand set name ="'.$name.'",id_cate='.$id_cate.' where id='.$id.'';
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }

    public function getcategorywhere($id){
        $query = 'select * from brand where id='.$id.'';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
    }
    public function deletecategory($id){
        $query = 'delete from brand where id='.$id.'';
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }

    public function getproduct(){
        $query = 'select product.id, product.name, image, description,price,stock,brand.name,created_at,updated_at
        from product inner join brand on product.id_brand=brand.id';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
        
    }

    public function createproduct($name,$description,$price,$stock,$id_brand,$image){
        $created_at = $updated_at = date('Y-m-d H:s:i');
        $query = "insert into product(name,description,price,stock,id_brand,created_at,updated_at,image) values
         ('$name','$description',$price,$stock,$id_brand,'$created_at','$updated_at','$image')";
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }
    public function editproduct($id,$name,$description,$image,$price,$stock,$id_brand){
        $created_at = $updated_at = date('Y-m-d H:s:i');
        $query = 'update product set name ="'.$name.'",description="'.$description.'",image="'.$image.'",
        price='.$price.',stock='.$stock.',id_brand='.$id_brand.',updated_at="'.$updated_at.'" where id='.$id.'';
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }

    public function deleteproduct($id){
        $query = 'delete from product where id='.$id.'';
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }

    public function getproductwhere($id){
        $query = 'select * from product where id='.$id.'';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
    }

    public function getallreceipt(){
        $query = 'select account.fullname,receipt.created_at,receipt.address,receipt.total FROM receipt INNER JOIN account ON receipt.username=account.username';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
    }
}
?>