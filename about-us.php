<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn =mysqli_connect($server,$username,$password,$database);

if( isset($_POST["subscribebutton"]))
{
    
   
    $email =$_POST['email'];
 
   $insertData = mysqli_query($conn, "INSERT INTO subscribers(email)
    VALUE('$email')");

    if($insertData)
    {
       echo="Data submitted successfully.";
    }
    else{
        echo="error occured";
    }


}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>About Us</title>

</head>
<body>

    <!-- navigation bar here -->
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbardisplaynavigations">
             <div class="navbar-nav">
                <a href="index.html" class="nav-link active">Home</a>
                <a href="#" class="nav-link active">About us</a>
                <a href="#" class="nav-link active">Register Now</a>
             </div>
          </div>
        </div>
      
      </nav> 
    <!-- End navion bar -->



    <a href="#" class="navbar-brand">About Us</a>
    <!-- main -->
    <main class="p-5 mb-4 bg-light">
        <h1 style="padding-top:50px ;">About Us</h1>
        <p>Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum laboriosam maiores minus quae. Aliquam voluptates voluptas explicabo, dolorum dignissimos aspernatur delectus consequatur esse asperiores natus nisi! Odit, obcaecati architecto? ipsum dolor sit amet consectetur adipisicing elit. Provident iure eligendi id exercitationem non! Obcaecati tenetur itaque tempore dolorem Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>


    </main>
    <!-- end main -->
    <div class="container">
        <!-- our prog -->
        <div class="row">
            <div class="col-lg-6">
                <h1>Our Program</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tenetur ducimus quod, quam illo impedit nihil corrupti dolorum doloremque in, delectus, voluptate aperiam repudiandae. Esse possimus asperiores tempora fugiat, dolore sequi incidunt?</p>
            </div>
            <div class="col-lg-6">
               <img src="images/2.jpg" alt="image loading" style="border-radius: 20px; height:45vh; width:550px;">
            </div>
            <!-- end our prog -->

            <!-- the programs card -->
            <h1>The programs</h1>
            <br>
            <div class="row">

                <div class="col-lg-4 bg-light shadow-bottom" >
                    <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">skill discovery</h4>
                          <p style="padding: 8px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur itaque veniam ullam, exercitationem delectus dolorum. Qui, iure! Minus, debitis id.</p>
                          <button class="btn btn-primary">View Details</button>
                      </div>
                     </div> 
                </div>     
                     <div class="col-lg-4 bg-light shadow-bottom " >
                     <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Upskill Program</h4>
                           
                            <p style="padding: 8px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur itaque veniam ullam, exercitationem delectus dolorum. Qui, iure! Minus, debitis id.</p>
                            <button class="btn btn-primary">View Details</button>
                        </div>
                     </div> 
                </div>
                <div class="col-lg-4 bg-light shadow-bottom" >
                     <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Path finding Program</h4>
                            <p style="padding: 8px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur itaque veniam ullam, exercitationem delectus dolorum. Qui, iure! Minus, debitis id.</p>
                            <button class="btn btn-primary">View Details</button>
                        </div>
                     </div> 
                </div>

              
            </div>
            <!-- end programs card -->
                    
            <p style="text-align: center; color:grey; padding-top: 30px;">Subscribe to get information,latest news about <br> Zalego Academy</p>
    
           
                    <form  action="about-us.php" method="POST" >
                        <div class="row pt-5">

                            <div class="col-lg-12" style="text-align: center;">
                             
                                <input type="email" name='email' placeholder="Your E-mail Adress" >
                                <button type='submit' name='subscribebutton' class="btn btn-primary">Subscribe</button>

                            </div>
                        </div>
                    </form>
            
            

       









        </div>




    </div>
    <hr>
    <footer>
        &copy;company 2022
    </footer>






    <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="strap-5.2.0/bootstbootrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>