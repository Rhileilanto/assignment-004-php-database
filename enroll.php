<?php
$server="localhost";
$username="root";
$password="";
$database="web2";

$conn=mysqli_connect($server,$username,$password,$database);
if (isset($_POST["enroll"]))
{
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];


    $insertData = mysqli_query($conn, "INSERT INTO
    enrollment(fullname,email,phonenumber,gender)
   VALUES('$fullname','$email','$phonenumber','$gender')");
   if($insertData)

  {
    echo "Data submitted successfully";
  }
  else
    echo "Error Occured";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
        <!--Navbar starts here-->
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
            <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Zalego academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="index.html" class="nav-link active">Home</a>
                    <a href="Aboutus.html" class="nav-link">About Us</a>
                    <a href="enroll.php" class="nav-link" class="btn btn-primary">Register now</a>
                </div>
            </div>
            </div>
        </nav>
        
        <!--Navbar ends-->
        <main class="p-5 bg-light text-dark mb-4 ">
            <div class="p-5 bg-grey">
            <h1 style="padding-top: 60px;">JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
            <h2 style="padding-top: 30px;">20th July 2022</h2>
            <h3 style="padding: top 30px;">Zalego Academy,</h3>
            <h4>Devan Plaza</h4>
            </div>
            <p>
                Lorem ipsum dolor, sit
                 amet consectetur adipisicing elit. 
                 In ad delectus, saepe quo tempore consectetur ut
                  veritatis? Voluptas modi dolorem blanditiis aliquid, dolores veritatis consectetur. Sequi labore rem minima omnis!</p>
    <div class="card">
        <div class="card-body">
        <h1>Sign up today?</h1>
        <form action="enroll.php" method="POST">
            <div class="row"> 
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                    <label for="fullname" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Enter your full name">
                </div>  
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                    <label for="phoneNumber" class="form-label">Phone Number:</label>
                    <input type="tel" name="phonenumber"  class="form-control" placeholder="+2547.....">
                </div>
            <div class="row">         
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" class="form-control" name="email" placeholder="Please enter your email">
                </div>
                 <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                   <label for="Whats your gender" class="form-label">Whats your gender?</label>
                     <select name="gender" class="form-select" aria-lebel="default select example">
                           <option selected>--select your gender--</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                 </div>
        </div>  
                <p class="padding-top: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis voluptas ab cumque, dolorum quis nulla assumenda debitis libero at, magnam tenetur sequi ex illo id et recusandae autem. Deserunt, natus.</p>
                
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="course" class="form-lebel">What is preferred course ? <Address></Address></label>
                    <select class="form-select" aria-lebel="default select example">
                        <option selected>--select your course--</option>
                        <option value="Standard">Standard</option>
                        <option value="Advanced">Advanced</option>
                        <option value="Diploma">Diploma</option>
                    </select>  
            </div>       
            </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum non blanditiis suscipit sint atque vero? Fugit mollitia tempora ex nobis placeat dolores omnis amet aperiam aliquam ad ipsa, odit at.</p>

            <div class="row">
            <div class="mb-3 col-lg-3">
                    <input type="text" class="form-control" placeholder="">
                    <label for="conditions" class="form-lebel">Agree terms and conditions</label>
            
    </div>
    <button type="submit" name="enroll" class="btn btn-primary" >Submit application</button>
    </div>
    </div>
        </form>
    
    
        
        <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js.map"></script>
        <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>-->
       <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
</body>

</html>