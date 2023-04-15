<?php
$insert == false;
if ($isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Could not connect to database failed: " . mysqli_connect_error());
    }
    // echo "success connection to the database";

    $name = $_POST['name'];

    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];


    $sql = "INSERT INTO `nepaltravel`.`travel` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    if ($con->query($sql) == true) {
        // echo "Sucessfully inserted";
        $insert = true;
    } else {
        echo "Error:$sql <br>  $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>travel form</title>
    <link rel="stylesheet" href="travel.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
    <img class="bg" src="bg.jpeg" />

    <div class="container">
        <h1>Welcome to Nepals Travels</h1>

        <p>Your Destiny Partner</p>
        <?php
        if ($insert == true) {
            echo "<div class='done'>Thanks for submitting the form.</div>";
        }
        ?>

        <form action="travel.php" method="post">
            <input type="text" name="name" placeholder="enter your name" id="name" />
            <input type="text" name="age" placeholder="enter your age" id="age" />
            <input type="text" name="gender" placeholder="enter the gender" id="gender" />
            <input type="email" name="email" placeholder="enter your email" id="email" />
            <input type="phone" name="phone" placeholder="enter your phonenumber" id="phone" />
            <textarea name="desc" id="desc" cols="30" rows="10 " placeholder="enter any other information."></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="travel.js"></script>
</body>

</html>