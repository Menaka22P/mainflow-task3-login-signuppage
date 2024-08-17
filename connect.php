<?php 
$a=$_POST["n"];
$b=$_POST["e"];
$c=$_POST["p"];

$con=mysqli_connect("localhost","root","");
mysqli_select_db( $con,"task3");
$sql=("insert into signup(n,e,p)values('$a','$b','$c')");
mysqli_query($con,$sql);

echo("successfully Registerd!!!");

include("signup.html");
mysqli_close($con);


?>