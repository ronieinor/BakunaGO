<?php
  require_once 'db_connection.php';

  if (isset($_POST['insert'])) {

    $vaccine = $_POST['vaccine'];
    $quantity = $_POST['quantity'];
    $measurement = $_POST['measurement'];
    $expiry = $_POST['expiry'];
    $status = $_POST['status'];
    
    


    $stmt = $DB_con->prepare('INSERT INTO inventory (vaccine,quantity,measurement,expiry,status)VALUES( :vaccine, :quantity,:measurement,:expiry,:status)');
   

    $stmt->bindParam(':vaccine',$vaccine);
    $stmt->bindParam(':quantity',$quantity);
    $stmt->bindParam(':measurement',$measurement);
    $stmt->bindParam(':expiry',$expiry);
    $stmt->bindParam(':status',$status);
   
    if($stmt->execute()){

       echo "<script> alert('Vaccine Stocks Added'); window.location='Inventory.php'</script>";

      }else{

      

      } 
  }

?>