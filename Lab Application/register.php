<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="register.php" method="post">
        <h2>REGISTER</h2>
        <div class="container">
            <label for="uname"><b>Name Surname</b></label>
            <input type="text" placeholder="Name Surname" name="uname" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Email" name="email" required><br>

            <label for="female, male"><b>Gender</b></label><br>
            <input type="radio" name="gender" id="female" value="Female">
            <label for="female">Female</label><br>
            <input type="radio" name="gender" id="male" value="Male">
            <label for="male">Male</label><br>
      
            <button type="submit">SUBMIT</button>

        </div>

    </form>
</body>
</html>

<?php

include("connection.php");

if (isset($_POST["uname"], $_POST["email"], $_POST["gender"]))
{
    $name=$_POST["uname"];
    $mail=$_POST["email"];
    $gender=$_POST["gender"];

    $insert="INSERT INTO students (name_surname, email, gender) VALUES ('".$name."', '".$mail."', '".$gender."')";

    if ($conn->query($insert)===TRUE){
        echo "<script>alert('Your message has been sent successfully.')</script>";
    }
}
?>