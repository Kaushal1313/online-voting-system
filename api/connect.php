<?php
$connect=mysqli_connect("localhost:3307","root","","voting") or die("connection faild");
if($connect){
    echo "connected";
}
else{
    echo "note connect";
}
?>