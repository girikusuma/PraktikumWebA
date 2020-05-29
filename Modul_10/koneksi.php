<?php
    $konek = mysqli_connect("localhost","root","","paginationdb");
    if(mysqli_connect_errno()){
        echo "error".mysqli_connect_error();
        die();
    }
?>