<?php
include "config.php";
if($_SERVER['REQUEST_METHOD']==='GET'){
    if (isset($_GET['delete_Expenses'])){
      $ID = $_GET['id'];
     $stmt =$conn->prepare("DELETE FROM Expenses WHERE idEx  = ?");
     $stmt->bind_param("i", $ID);
     $stmt->execute();
     $stmt->close();
    }


    if (isset($_GET['delete_incomes'])){
      $ID = $_GET['id'];
     $stmt =$conn->prepare("DELETE FROM incomes WHERE idIn  = ?");
     $stmt->bind_param("i", $ID);
     $stmt->execute();
     $stmt->close();
    }
     header("Location: index.php");
        exit;
}
