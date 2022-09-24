<?php
    $con=mysqli_connect("localhost","root","","pfa") or die (erreur);
    session_start();

    // Set Session Message
    function set_message($msg)
    {
        if(!empty($msg))
        {
            $_SESSION['MESSAGE']=$msg;
        }
        else
            {
                $msg = '';
            }
    }
    // affichage message
    function display_message()
{
    if(isset($_SESSION['MESSAGE']))
    {
        echo $_SESSION['MESSAGE'];
        unset($_SESSION['MESSAGE']);
    }
}
function register_user()
{
    global $con;
    if(isset($_POST['btn_register']) || $_SERVER['REQUEST_METHOD']=='POST')
    {
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
    }
    if(empty($username) || empty($password) ){
    $error = "<div> SVP Entrer vos données </div>";
    set_message($error);
}

else
{
    $query = "select * from membre where nomUtilisateur='$username'";
    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result))
    {
        $error = "<div> Nom d'utilisateur non existe.</div>";
        set_message($error);
    }
    else
        {
            $query = "select * from user_bio where mot2pass='$password'";
            $result = mysqli_query($con,$query);

            if(mysqli_num_rows($result))
            {
                $error = "<div> mot de pass incorrect.</div>";
                set_message($error);
            }
            else
                {
                    $hash = md5($password);
                    $sql = "insert into user_bio(username,email,password) values('$username','$email','$hash')";
                    $data = mysqli_query($con,$sql);

                    if($data)
                    {
                        $error = "<div> Record Successfully Registered : ) </div>";
                        set_message($error);
                    }
                    else
                        {
                            $error = "<div> Something is Wrong; </div>";
                            set_message($error);
                        }
                }
        }
}
}
function login_user()
   {
    global $con;
    if(isset($_POST['btn_login']) || $_SERVER['REQUEST_METHOD']=='POST')
    {
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        if(empty($username)  || empty($password) )
        {
            $error = "<div> Please Fill in the Blanks</div>";
            set_message($error);
        }
        else
        {
            $query = "select * from user_bio where username='$username' or email='$username'";
            $result = mysqli_query($con,$query);

            if($row=mysqli_fetch_assoc($result))
            {
                $db_pass = $row['password'];
                if(md5($password)==$db_pass)
                {
                    header("location: user/index.php");
                    $_SESSION['ID']=$row['id'];
                    $_SESSION['EMAIL']=$row['EMAIL'];
                }
                else
                    {
                        $error = "<div> Please Enter Valid Password</div>";
                        set_message($error);
                    }
            }
            else
                {
                    $error = "<div> Please Enter Valid UserName or Email</div>";
                    set_message($error);
                }

        }
    }
}
?>