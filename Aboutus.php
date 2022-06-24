<?php
$server="localhost";
$username="root";
$password="";
$database="web2";

$conn=mysqli_connect($server,$username,$password,$database)

if( isset($_POST[submitButton]))
{
    $email=$_POST['email'];


    $insertData = mysqli_query($conn, "INSERT INTO
    subscriber(email)
   VALUES('$email')");
   if($insertData)

  {
    echo "Data submitted successfully";
  }
  else
    echo "Error Occured"


}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Aboutus.html">
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
                        <a href="#" class="nav-link" class="btn btn-primary">Register now</a>
                    </div>
                </div>
            </div>
    
        </nav>
    
        <!--Navbar ends-->
        <main class="p-5 bg-light mb-4 ">
            <h1>About Us</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout a jumbtron and three supporting pieces of content. Use it as astarting point to create something more unique.</p>
        </main>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h1>Our Programs</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus vitae sed voluptatibus amet similique laborum.</p>
                    <img src="Images/Download.jpg" alt="Elearning">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1>The Programs</h1> 
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                    <h2>Skill Discovery</h2>
                    <p>Fusce dapibus, tellus ac cursus cammodo, tortor. Fuiid cofjng</p>
                    <button class="btn btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                    <h2>Upskilling Program</h2>
                    <p>Fusce dapibus, tellus ac cursus cammodo, tortor. Fuiid cofjng</p>
                    <button class="btn btn-primary">View Details</button>
                    <span class="border-left"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                    <h2>Path finding Program</h2>
                    <p>Fusce dapibus, tellus ac cursus cammodo, tortor. Fuiid cofjng</p>
                    <button class="btn btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>Subscribe to get information, latest news about Zalego Academy</p>
                <form action="Aboutus.php" method="POST">
                    <div class="row">
                       <div class="mb-3 col-lg-6 col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your email address">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6">
                             <button  type="submit" name="submitButton "class="btn btn-primary">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js.map"></script>
        <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>-->
       <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>