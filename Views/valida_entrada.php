<?php

function debug(){
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
}

session_start();
if(!isset($_SESSION['ID'])):
  exit();
  header('Location:index.php');
else:
  if($_SESSION['TIPO'] != 'Admin'):
    echo"<script>alert('Acesso restrito');</script>";
    header('Location:index2.php');
  endif;
endif;

?>