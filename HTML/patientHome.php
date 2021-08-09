<?php  
session_start();
include "doctorDatabase.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <!-- -----------------------------------------------Font Awesome kit-------------------------- -->
    <script src="https://kit.fontawesome.com/04ecdf395d.js" crossorigin="anonymous"></script>
    <!-- ------------------------------CSS link up ------------------------ -->
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"> <img src="../Assets/Icons/favicon.png" alt="" width="30" height="24">Medi Cloud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="searchDoctor.php">Search Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="patientAppointment.php">Apointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
<section>
  <?php
  echo "<h1> Welcome {$_SESSION['name']} </h1>" ;
   echo '<br>';
   $sql="SELECT MIN(date) FROM appointment WHERE patient_id ={$_SESSION['id']}";
  //   //echo $sql;
  $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) >= 1) {
      $row = mysqli_fetch_assoc($result);
      if(!empty($row['MIN(date)'])){
        echo "Your upcoming Appointment Date  <b>{$row['MIN(date)']}</b>";
      }
     
    } 
  ?>
</section>

<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous">
  </script>

</body>
</html>