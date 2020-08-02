<?php 
session_start();

session_destroy();

echo "<script type='text/javascript'>alert('sesion finalizada');window.location.href='../view/'</script>";
?>