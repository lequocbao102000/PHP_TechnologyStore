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
}
?>