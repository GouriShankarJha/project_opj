<?php
$insert=false;
   if(isset($_POST["name"]))
    {
        $server = "localhost";
        $username = "root";
        $password = "";
        $con = mysqli_connect($server, $username, $password);
        if(!$con)
        {
            die("connection this database failed due to". mysqli_connect_error());
        }
        // echo "success connecting to the database";
        $Name = $_POST['name'];
        $Gender = $_POST['gender'];
        $Age = $_POST['age'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Marks = $_POST['marks'];
        $sql = "INSERT INTO `studentd`.`studentd` (`name`, `age`, `gender`, `email`, `phone`,`marks`, `dt`) VALUES ('$Name', '$Age', '$Gender', '$Email', '$Phone','$Marks', current_timestamp());"; 
        if($con->query($sql) == true)
        {
            // echo "Successfully insert";
            $insert=true;
        }
        else 
        {
            echo "Error:$sql<br> $con->error";
        }
        $con->close();

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Department</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img class="bg" src="form/opj112.jpg" alt="OP jindal University">
    <div class ="container">
        <h1>Welcome to O.P Jindal Global University </h1>
        <p class="dt1">Enter Your Detail</p>
    <?php
        if ($insert==true)
        {
            echo  "<p class='submitmsg'>Thanks for submit your form we are happy to giving your query </p>";
        }
    ?>

        <form action="index.php"method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone no.">
            <input type="marks" name="marks" id="marks" placeholder="marks.">
            <!-- <textarea name="desc" id="email" cols="50" rows="15" placeholder="Enter Your Query"></textarea> -->
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `query` (`S.no`, `Name`, `Age`, `Gender`, `Email`, `Phone no.`, `query`, `dt`) VALUES ('1', 'gouri', '54', 'Male', 'gourishankarjha@gmail.com', '9999993333', 'asdegdtrhgtyjtyjhyhukyughgedfcgcthtyjytjtyvth', current_timestamp()); -->
</body>
</html>