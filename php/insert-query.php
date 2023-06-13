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

        h3 {
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

        p {
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

        button{
            color: white;
            width: 150px;
            height: 30px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: bold;
            border: 0px;
            background-color: rgb(51, 153, 255, 0.2);
            margin-right: 20px;
        }

        button[type="button"]:hover{
            background-color: rgb(51, 153, 255, 0.5);
        }

        .shwpbtn{
            background-color: rgb(51, 153, 255, 0.9);
        }
        .shwpbtn:hover {
            background-color: rgb(51, 153, 255, 0.5);
        }

        input[type="submit"]:hover {
            background-color: rgb(51, 153, 255, 0.5);
        }

    </style>

    <script>
        function showPassword() {
            let x = document.getElementById("pword1");
            let y = document.getElementById("pword2");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
                
            }
        }

        function checkpass() {
            let pass1 = document.getElementById("pword1");
            let pass2 = document.getElementById("pword2");

            if (pass1.value == pass2.value) {
                document.getElementById("passwcheck").innerHTML = "Password matched";
                document.getElementById("pword1").;
            } else {
                document.getElementById("passwcheck").innerHTML = "Use same password!";
            }
        }
    </script>
</head>

<body>
    <div class="insert-form">
        <form action="insert-query.php" method="post">
            <h3>Add New User Data :</h3>
            <p id="passwcheck"></p>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <label for="uname">Username</label>
            <input type="text" id="uname" name="uname">
            <label for="pword">Password</label>
            <input type="password" id="pword1" name="pword">
            <label for="pword">Confirm Password</label>
            <input type="password" id="pword2" name="pword" onkeyup="checkpass()"><br>
            <button type="button" id="shwp" onclick="showPassword();csschange();">Show Password</button>
            <input type="submit" value="Add User" name="addu">
        </form>
    </div>
    <script>
        function csschange() {
            let z = document.getElementById("shwp");
            z.classList.toggle("shwpbtn");
            console.log(z.className);
        }
        
    </script>


</body>

</html>
<?php mysqli_close($connection);
