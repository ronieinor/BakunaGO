<!DOCTYPE html>
<html>
<head>
<title>User Dashboard</title>
<link rel="stylesheet" type="text/css" href="css/design.css">
 <link rel="stylesheet" href="css/content.css">
  <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <script type="text/javascript">
function formatDate(date){
var d = new Date(date),
month = '' + (d.getMonth() + 1),
day = '' + d.getDate(),
year = d.getFullYear();

if (month.length < 2) month = '0' + month;
if (day.length < 2) day = '0' + day;

return [year, month, day].join('-');

}

function getAge(dateString){
var birthdate = new Date().getTime();
if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){
// variable is undefined or null value
birthdate = new Date().getTime();
}
birthdate = new Date(dateString).getTime();
var now = new Date().getTime();
// now find the difference between now and the birthdate
var n = (now - birthdate)/1000;
if (n < 604800){ // less than a week
var day_n = Math.floor(n/86400);
if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')){
// variable is undefined or null
return '';
}else{
return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
}
} else if (n < 2629743){ // less than a month
var week_n = Math.floor(n/604800);
if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')){
return '';
}else{
return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
}
} else if (n < 31562417){ // less than 24 months
var month_n = Math.floor(n/2629743);
if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')){
return '';
}else{
return month_n + ' month' + (month_n > 1 ? 's' : '') + ' old';
}
}else{
var year_n = Math.floor(n/31556926);
if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
return year_n = '';
}else{
return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
}
}
}

function getAgeVal(pid){
var birthdate = formatDate(document.getElementById("bday").value);
var count = document.getElementById("bday").value.length;
if (count=='10'){
var age = getAge(birthdate);
var str = age;
var res = str.substring(0, 1);
if (res =='-' || res =='0'){
document.getElementById("bday").value = "";
document.getElementById("age").value = "";
$('#bday').focus();
return false;
}else{
document.getElementById("age").value = age;
}
}else{
document.getElementById("age").value = "";
return false;
}
}
</script>


</head>

<style>
    
    body {
            background-image: url('img/bgg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

  </style>


<body>

<nav>
    

    <label class="logo" style="font-size: 30px;">  </label>
    <ul>
      <li><a class="active" href="User-Dashboard.php">Home</a></li>
      <li><a href="login.php">Admin Login</a></li>
      <li><a href="About.php">About</a></li>
    </ul>

  </nav>
	<br>
<section class="about" id="about">
        <div class="max-width">
            <h2 class="title" style="color: black; font-style: italic;"><b>BakunaGO: A Vaccine Management System</b></h2>
            <div class="about-content" >
              
              <img src="img/LOGO.png" style="width: 450px; height: 450px;">
            	 
              <div class="column right">
                  <div class="text" ><span style="color: black;"><b>WELCOME TO</b></span></div>
                  <h2 style="color: black; font-family: tahoma; font-size: 40px;"><b>BARANGAY SAN JOSE</b></h2>
                  <h6 style="color: black; font-family: tahoma">Barangay San Jose, Zone 3, Urdaneta City, Pangasinan</h6>
                  <h6 style="color: black; font-family: tahoma">Open Hours of Barangay Health Center: Monday to Friday (8AM - 4PM)</h6>
                  <h6 style="color: black; font-family: tahoma">https://www.facebook.com/brgy.sanjose.3572</h6>
                 
                
                  
                <br><br><br>

                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPatientModal">
  R E G I S T R A T I O N</button>
                       
                     </div> 
                    
                    
              </div> 
              </div>
              </div>
            </div>
    </section>

<div class="modal fade " id="addPatientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">REGISTRATION FORM</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


          
          <form action="User-Dashboard.php" method="POST" class="p-3  text-light">
            <h3 style="color: black;">Personal Information</h3>
          
         <div class="row">
             <div class="col">
              <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname"required>
            </div>

             <div class="col">
              <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" required>
            </div>

             <div class="col">
              <input type="text" class="form-control" id="mname" placeholder="Middle Name" name="mname" required>
            </div>

             <div class="col">
              <input type="text" class="form-control" id="suffix" placeholder="Suffix: (JR, SR, I, II, III, IV) " name="suffix">
            </div>
           </div><br>
            

            <div class="row">
            
               <div class="col">
              <select class="custom-select" id="barangay" name="barangay">
              <option selected>BRGY. ANONAS</option>
              <option>BRGY. BACTAD EAST</option>
              <option>BRGY. BAYAOAS</option>
               <option>BRGY. BOLAOEN</option>
                <option>BRGY. CABARUAN</option>
                 <option>BRGY. CABULOAN</option>
                  <option>BRGY. CAMANANG</option>
                   <option>BRGY. CAMANTILES</option>
                   <option>BRGY. CASANTAAN</option>
                   <option>BRGY. CATABLAN</option>
                   <option>BRGY. CAYAMBANAN</option>
                   <option>BRGY. CONSOLACION</option>
                   <option>BRGY. DILAN-PAURIDO</option>
                   <option>BRGY. LABIT PROPER</option>
                   <option>BRGY. LABI WEST</option>
                   <option>BRGY. MABANOGBOG</option>
                   <option>BRGY. MACALONG</option>
                   <option>BRGY. NANCALOBASAAN</option>
                   <option>BRGY. NANCAMALIRAN EAST</option>
                   <option>BRGY. NANCAMALIRAN WEST</option>
                   <option>BRGY. NANCAYASAN</option>
                   <option>BRGY. OLTAMA</option>
                   <option>BRGY. PALINA EAST</option>
                   <option>BRGY. PALINA WEST</option>
                   <option>BRGY. PEDRO T. ORATA(</option>
                   <option>BRGY. PINMALUDPOD</option>
                   <option>BRGY. POBLACION</option>
                   <option>BRGY. SAN JOSE</option>
                   <option>BRGY. SAN VICENTE</option>
                   <option>BRGY. SANTA LUCIA</option>
                   <option>BRGY. SANTO DOMINGO</option>
                   <option>BRGY. SUGCONG</option>
                   <option>BRGY. TIPOSU</option>
                   <option>BRGY. TULONG</option>

          </select>
            </div>
           

             <div class="col">
              <input type="text" class="form-control" id="city" placeholder="Municipality/City" name="city" value="URDANETA CITY">
            </div>

            <div class="col">
              <input type="text" class="form-control" id="province" placeholder="Province" name="province" value="PANGASINAN">
            </div>
        </div><br>

        <div class="row">
             <div class="col">
              <input class="form-control" type="text" name="age" id="age" autocomplete="off" placeholder="Age">
            </div>

             <div class="col">
              <input class="form-control" id="bday" type="date" name="bday" maxlength="10" placeholder="mm/dd/yyyy" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);">
            </div>
        </div><br>

        <div class="row">
             <div class="col">
              <input type="number" class="form-control" id="phone" placeholder="Contact Number" name="phone" required>
            </div>


             <div class="col">
              <select class="custom-select" id="sex" name="sex">
              <option selected>Gender</option>
              <option>MALE</option>
              <option>FEMALE</option>
          </select>
            </div>
        </div><br>

        <div class="row">
             <div class="col">
              <input type="text" class="form-control" id="height" placeholder="Height" name="height" required>
            </div>

             <div class="col">
              <input type="text" class="form-control" id="weight" placeholder="Weight" name="weight" required>
            </div>
        </div><br>

        <div class="form-group ">
              <input type="text" class="form-control" id="civil" placeholder="Civil Status" name="civil" required>
            </div>

            <div class="row">
             <div class="col">
              <select class="custom-select" id="idType" name="idType">
              <option selected>ID Type</option>
              <option>Phil Health ID</option>
              <option>SSS ID</option>
               <option>POST ID</option>
                <option>PASSPORT</option>
                 <option>DRIVER LICENSE</option>
                  <option>STUDENT ID</option>
                   <option>BARANGAY CERT</option>
          </select>
            </div>

             <div class="col">
             <select class="custom-select" id="vaccine" name="vaccine">
              <option selected>Vaccine Type</option>
              <option>ANTI RABIST VACCINE</option>
              <option>FLU VACCINE</option>
               <option>COVID VACCINE</option>
                <option>MEASLES VACCINE</option>
                 <option>POLIO VACCINE</option>
                  <option>HEPATITIS A</option>
                  <option>HEPATITIS B</option>
                  <option>TUBERCULOSIS</option>
                  <option>YELLOW FEVER</option>
          </select>
            </div>

            <div class="col">
             <select class="custom-select" id="appointment" name="appointment">
              <option selected>Appointment</option>
              <option>MONDAY</option>
              <option>TUESDAY</option>
               <option>WEDNESDAY</option>
                <option>THURSDAY</option>
                 <option>FRIDAY</option>
          </select>
            </div>
        </div>
        <br>

        <h3 style="color: black;">Medical Information</h3>
    
         <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="q1" placeholder="Allergy (Specified)" name="q1"required>
            </div>

             <div class="col">
              <select class="custom-select" id="q2" name="q2">
              <option selected>Hypertension</option>
              <option>NONE</option>
              <option>YES, I HAVE</option>
          </select>
            </div>
          </div>
<br>
          <div class="row">
            <div class="col">
             <select class="custom-select" id="q3" name="q3">
              <option selected>Heart Disease</option>
              <option>NONE</option>
              <option>YES, I HAVE</option>
          </select>
            </div>

            <div class="col">
              <input type="text" class="form-control" id="q4" placeholder="Cancer (Specified)" name="q4"required>
            </div>
          </div>
<br>
          <div class="row">
            <div class="col">
              <select class="custom-select" id="q5" name="q5">
              <option selected>Kidney Disease</option>
              <option>NONE</option>
              <option>YES, I HAVE</option>
          </select>
            </div>

            <div class="col">
             <select class="custom-select" id="q6" name="q6">
              <option selected>Diabetes Mellitus</option>
              <option>NONE</option>
              <option>YES, I HAVE</option>
          </select>
            </div>
          </div>
<br>
        <div class="row">
            <div class="col">
              <select class="custom-select" id="q7" name="q7">
              <option selected>Head Ache</option>
              <option>NONE</option>
              <option>YES, I HAVE</option>
          </select>
            </div>

            <div class="col">
              <select class="custom-select" id="q8" name="q8">
              <option selected>Bronchial Asthma</option>
              <option>NONE</option>
              <option>YES, I HAVE</option>
          </select>
            </div>
          </div>
<br>
          <div class="row">
            <div class="col">
              <select class="custom-select" id="q9" name="q9">
              <option selected>Immunodeficiency</option>
              <option>NONE</option>
              <option>YES, I HAVE</option>
          </select>
            </div>

            <div class="col">
              <select class="custom-select" id="q10" name="q10">
              <option selected>Fever</option>
              <option>NONE</option>
              <option>YES, I HAVE</option>
          </select>
            </div>
          </div>
<br>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="q11" placeholder="Other Diseases: (Specified)" name="q11"required>
            </div>

            <div class="col">
              <input type="text" class="form-control" id="q12" placeholder="Comorbidities: (Specified)" name="q12"required>
            </div>
        </div>
        <br>
  
  <button type="submit" class="btn btn-success" name="Add">SUBMIT</button>
           
          </form>

      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

  

</body>
</html>

<?php
  require_once 'db_connection.php';

  if (isset($_POST['Add'])) {

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $suffix = $_POST['suffix'];
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
    $idType = $_POST['idType'];
    $vaccine = $_POST['vaccine'];
    $appointment = $_POST['appointment'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $q11 = $_POST['q8'];
    $q12 = $_POST['q12'];
    


    $stmt = $DB_con->prepare('INSERT INTO registration (lname, fname, mname, suffix, barangay, city, province, age, sex, bday, phone, height, weight, civil, idType, vaccine, appointment, q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12)VALUES(:lname, :fname, :mname, :suffix, :barangay, :city, :province, :age, :sex, :bday, :phone, :height, :weight, :civil, :idType, :vaccine, :appointment, :q1, :q2,:q3,:q4,:q5,:q6,:q7,:q8,:q9,:q10,:q11,:q12)');
   
    $stmt->bindParam(':lname',$lname);
    $stmt->bindParam(':fname',$fname);
    $stmt->bindParam(':mname',$mname);
    $stmt->bindParam(':suffix',$suffix);
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
    $stmt->bindParam(':idType',$idType);
    $stmt->bindParam(':vaccine',$vaccine);
    $stmt->bindParam(':appointment',$appointment);
    $stmt->bindParam(':q1',$q1);
    $stmt->bindParam(':q2',$q2);
    $stmt->bindParam(':q3',$q3);
    $stmt->bindParam(':q4',$q4);
    $stmt->bindParam(':q5',$q5);
    $stmt->bindParam(':q6',$q6);
    $stmt->bindParam(':q7',$q7);
    $stmt->bindParam(':q8',$q8);
    $stmt->bindParam(':q9',$q9);
    $stmt->bindParam(':q10',$q10);
    $stmt->bindParam(':q11',$q11);
    $stmt->bindParam(':q12',$q12);


    
    if($stmt->execute()){

       echo "<script> alert('Patient Information Registered'); window.location='User-Dashboard.php'</script>";

      }else{

      

      } 
  }

?>


