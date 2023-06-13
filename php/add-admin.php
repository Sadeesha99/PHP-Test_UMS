<!-- <?php require_once('../includes/dbconnect.php'); ?> -->
<?php

/* 
        INSERT INTO table_name (
            colomn 01, colomn 02, etc
        ) VALUES (
            value1, value2 , etc
        )
    */
/* $userId = '';
    $first_name = '';
    $last_name = '';
    $email = '';
    $username = '';
    $password = '';
    
    $hashed_password = sha1($password);

    $query = "INSERT INTO woofuser ( userId, first_name, last_name, email, username, password_hased, )
    VALUES ('{userId}','{$first_name}','{$last_name}','{$email}','{$hashed_password}')";

    $result = mysqli_query($connection, $query);
    
    if ($result){
        echo "1 record added.";
    }else{
        echo "Database query failed.";
    }*/


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Query</title>
    <style>
        body {
            color: whitesmoke;
            background-image: url(../Img/background.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .insert-form {
            height: auto;
            width: 500px;
            margin: 140px auto;
            padding: 30px;
            border-radius: 10px;
            font-family: sans-serif;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 30px;
        }

        h3{ 
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: rgb(51, 153, 255, 0.3);
            height: 30px;
            padding: 0 10px;
            margin-right: 5px;
            border-radius: 2px;
            width: 400px;
        }
        p{
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            opacity: 0.8;
            height: 10px;
            width: 150px;
            padding: 0 10px;
            margin-right: 5px;
            border-radius: 2px;
            width: 400px;
        }

        label {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: rgb(51, 153, 255, 0.3);
            height: 30px;
            width: 150px;
            padding: 0 10px;
            margin-right: 5px;
            border-radius: 2px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 250px;
            height: 30px;
            margin-bottom: 10px;
            border-radius: 2px;
            border: 0px;
            opacity: 0.4;
            box-sizing: border-box;
        }

        input[type="submit"] {
            color: white;
            width: 150px;
            height: 30px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: bold;
            background-color: rgb(51, 153, 255, 0.2);
            border: 0px;
        }

        button[type="button"]{
            color: white;
            width: 150px;
            height: 30px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: bold;
            background-color: rgb(51, 153, 255, 0.2);
            border: 0px;
            margin-right: 20px;
        }
        #shwp:active{
            background-color: rgb(51, 153, 255, 0.4);
        }

        input[type="submit"]:hover {
            background-color: rgb(51, 153, 255, 0.5);
        }
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            border: 2px;
            border-radius: 3px;
        }
        
        
    </style>
</head>

<body>
    <div class="insert-form">
        <h3>Main User Logged In</h3>
        <button type="button" id="addUser" onclick="">Add User</button>
        <button type="button" id="addAdmin" onclick="">Add Admin</button>
    </div>
    <script></script>


</body>

</html>
<?php mysqli_close($connection);
