 <?php
    
    if(isset($_POST['name'])){

        include('db/config.php');

        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO user(name, username, email, password) 
        VALUES ('$name','$username','$email','$password')";

        $sql = $conn->query($query);

        if($sql){
            $msg = "Data Insert Successfull!";
            header("location:sign-up.php?msg=$msg");
        }
        else{
            $msg = "Data Insert Faild!";
            header("location:sign-up.php?msg=$msg");
        }
    }
    else{
        $msg = "This is a invalited user!";
        header("location:sign-up.php?msg=$msg");
    }

?>