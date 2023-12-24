<?php
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if (isset($_POST['btntest'])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "customers";

    $conn = mysqli_connect($host, $user, $password, $db);

    $insert = "insert into info values ('$username','$password')";

    if (mysqli_query($conn, $insert)) {
        echo "<h1 style='color:green;'>Successful login</h1>";
    } else {
        echo "<h1 style='color:red;'>Invalid username or password. Please try again.</h1>";
    }

    // Check for errors
    if (mysqli_error($conn)) {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
