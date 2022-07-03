<?php
  require_once 'db_connection.php';

  if (isset($_POST['Add'])) {

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $age = $_POST['age'];
    $bday = $_POST['bday'];
    $phone = $_POST['phone'];
    $sex = $_POST['sex'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $civil = $_POST['civil'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
  

    $stmt = $DB_con->prepare('INSERT INTO admin_record (lname, fname, mname, barangay, city, province, age, sex, bday, phone, height, weight, civil, username, password, name)VALUES(:lname, :fname, :mname, :barangay, :city, :province, :age, :sex, :bday, :phone, :height, :weight, :civil, :username, :password, :name)');
   
    $stmt->bindParam(':lname',$lname);
    $stmt->bindParam(':fname',$fname);
    $stmt->bindParam(':mname',$mname);
    $stmt->bindParam(':barangay',$barangay);
    $stmt->bindParam(':city',$city);
    $stmt->bindParam(':province',$province);
    $stmt->bindParam(':age',$age);
    $stmt->bindParam(':bday',$bday);
    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':sex',$sex);
    $stmt->bindParam(':height',$height);
    $stmt->bindParam(':weight',$weight);
    $stmt->bindParam(':civil',$civil);
    $stmt->bindParam(':username',$username);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':name',$name);
    
    if($stmt->execute()){

       echo "<script> alert('Admin Information Added'); window.location='Admin-Profile.php'</script>";

      }else{

      

      } 
  }

?>