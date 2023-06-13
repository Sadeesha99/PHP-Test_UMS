<?php require_once('../includes/dbconnect.php') ?>
<?php 

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (($username=='sadeesha99' && $password=='puffy99')||($username=='Indusha' && $password=='kolama')){
            $msg= "Admin login";
            $msg.="<br>Admin Name : {$username} {$password}";
            header("location: add-admin.php");
            exit();
        }elseif($username== null || $password==null){
            header("location: ../index.html");
        }else{
            $select_admin_query = "SELECT * FROM woofadmin";
            $result_admin = mysqli_query($connection,$select_all_query);

        }
    }else {
        $msg=  "Enter Your Details";
        
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(../Img/background.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            color: whitesmoke;
        }
    </style>
    
</head>
<body>
    <H1><?php echo $msg ?></H1>
    <a href="../php/select-query.php"><h3>Select Query</h3></a>
    <a href="../php/insert-query.php"><h3>Insert Query</h3></a>
</body>
</html>

<?php mysqli_close($connection);?>
