 <?php
    
    if(isset($_POST['name'])){

        include('db/config.php');

        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_images = $_FILES['user_images']['name'];
        $tmp_name = $_FILES['user_images']['tmp_name'];

        $query = "INSERT INTO user(name, username, email, password,image) 
        VALUES ('$name','$username','$email','$password','$user_images')";

        $sql = $conn->query($query);

        if($sql){
            move_uploaded_file($tmp_name, 'upload/'.$user_images);
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