<?php
class Main extends DB{
    public function getbrand(){
        $query = 'select * from brand';
        $rows = mysqli_query($this->connect, $query);
        $mang=[];
        while ($row = mysqli_fetch_array($rows)){
            $mang[]=$row;
        }
        return $mang;
    }
}
?>