<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory Report</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css" media="print">
      @media print{
        .noprint, .noprint *{
          display: none; !important;
        }
      }
    </style>
</head>

<body onload="print()">
  <div class="container">
    <center>
      <h3 style="margin-top: 30px;">Vaccine Inventory Report</h3> 
      <hr>
    </center>
    <table id="ready" class="table table-striped table-bordered" style="width: 100%;">
      <thead>
        <tr>
          <th>VACCINE NAME</th>
          <th>QUANTITY</th>
          <th>MEASUREMENT</th>
          <th>EXPIRATION</th>
          <th>STATUS</th>
        </tr>
      </thead>
      <tbody>
        <?php
  require_once 'db_connection.php';
  $stmt = $DB_con->prepare('SELECT * FROM registration');
  $stmt->execute();
  
  if($stmt->rowCount() > 0){
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      ?>

        <tr style="color: black;">
          <td><?php echo $row['vaccine'];?></td>
          <td><?php echo $row['quantity']; ?></td>
          <td><?php echo $row['measurement']; ?></td>
          <td><?php echo $row['expiry']; ?></td>
          <td><?php echo $row['status']; ?></td>
          
        </tr>      
      <?php
    }
  }
?>
      </tbody>
      
    </table>
    <button class="btn btn-info noprint" style="margin-left: 1000px;" onclick="window.location.replace('Inventory.php')">Cancel</button>
  </div>
</body>
</html>