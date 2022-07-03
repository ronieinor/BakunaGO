<?php
  require_once 'db_connection.php';

  if(isset($_GET['delete']) && !empty($_GET['delete'])){
    $delete = $_GET['delete'];
    $stmt = "DELETE FROM inventory WHERE id = '$delete'";
  	$DB_con->exec($stmt);

  	header("Location: inventory.php");
      
  }else{
    
    
  }
?>