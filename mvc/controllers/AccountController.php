<?php
class AccountController extends Controller{
    public $accountmodel;
    function __construct(){
        $this->accountmodel = $this->model("Account");
        
    }
    function Home(){
        header ('Location: '.BASE_URL."/AccountController/Login/");
    }
 
    function Login(){
        if (!isset($_POST['btnlogin'])){
            $this->view("masteraccount",[  
                "account"=>"login"
            ]);
        }
        else
        {
            $username = $_POST['username'];
            $password_input = $_POST['password'];
           
            $result = $this->accountmodel->login($username);
            if (count($result)>0){
                if (password_verify($password_input,$result[0]['password'])){
                    $_SESSION['name'] = $result[0]['fullname'];
                    $_SESSION['username'] = $result[0]['username'];
                    if ($_SESSION['username'] =="admin"){
                        header ('Location:'.BASE_URL."/AdminController/");
                    }
                    else{header ('Location: '.BASE_URL);}
       
                }
                else{        
                    $this->view("masteraccount",[  
                        "account"=>"login"
                    ]);
                    echo "<script type='text/javascript'>alert('Login Fail, please try again');</script>";
                }
            }
            else{
                $this->view("masteraccount",[  
                    "account"=>"login"
                ]);
                echo "<script type='text/javascript'>alert('Login Fail, please try again');</script>";
            }
        }

       

    }

    function Register(){
        if (!isset($_POST['btnregister'])){
            $this->view("masteraccount",[  
                "account"=>"register"
          ]);
            
        }
        

       else {
           $username = $_POST['usernameregister'];
           $password = $_POST['passwordregister'];
           $password = password_hash($password,PASSWORD_DEFAULT);
           $fullname = $_POST['fullnameregister'];
           $email = $_POST['emailregister'];
           if ($this->accountmodel->createaccount($username,$password,$fullname,$email))
           {
                $this->view("masteraccount",[  
                    "account"=>"register"
                ]);      
                echo "<script type='text/javascript'>alert('Register Success');</script>";         
                
           }
           else{        
                $this->view("masteraccount",[  
                    "account"=>"register"
                ]);
                echo "<script type='text/javascript'>alert('Register Fail, please try again');</script>";
           }
           
       }

    }
    function Logout(){
        unset($_SESSION['username']);
        unset($_SESSION['name']);
        header ('Location:'.BASE_URL);
    }
}
?>