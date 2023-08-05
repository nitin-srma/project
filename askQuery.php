<?php 
// including the connection to database
include 'database.php';
// on click submit
if(isset($_POST['submit'])){
$name = $_POST['uname'];
$email  = $_POST['email'];
$question = $_POST['question'];
// inserting the input's data table called ask_query
$sql = "insert into ask_query(name, email, question) values('$name', '$email', '$question')";

// if data filled to database successfully
if(mysqli_query($con,$sql)){
    header("Location: http://localhost/airschool/index.html");
    exit();
    // echo "<script>
    // alert('done');
    // </script>";
}

// if not
else{
    header("Location: http://localhost/airschool/askQuery.html");
}
mysqli_close($con);
}
?>