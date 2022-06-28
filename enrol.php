<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn =mysqli_connect($server, $username, $password, $database);

if( isset($_POST["submitapplication"]))

{
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];

    $insertData = mysqli_query($conn, "INSERT INTO enrollment(fullname, phonenumber, email, gender, course)VALUES('$fullname','$phonenumber','$email','$gender','$course')");

    if($insertData)
    {
        $response="Data submitted successfully.";
    }
    else{
        $response="error occured";
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Bootstrap Grid Layout</title>
</head>
<body >
 <?php include('navbar.php')?>
   
    <main class="text-cenre mb-4 ">
        <h1 style="text-align:center;">JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <ul >
            <li>
             
                    <span> <i class="fa fa-calendar"></i></span>
                   <span>20th July 2022</span>
              
            </li>

            <li>
               
                    <span> <i class="fa fa-map-marker "></i></span>
                   <span>Zalego Academy<br>Devan Plaza</span>
              
            </li>
            

        </ul>
       </main>

    <div class="container-fluid "  >
      <!-- 2 step -->
      
  
       <p >Looking for a place to kickstart your career in Technology ? <br> Whether you're a location ,new in town of just cruising though we've got <br>loads of great tips and events for you <br> <br><h3><b>Sign up today?</b></h3></p>


     <form action="enrol.php" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <label for="fullName" class="form-label"><h6>full name</h6></label>
                <input type="text" name="fullname" class="form-control" placeholder="Enter your Full Name">
            </div>
     
            <div class="col-lg-6">
                <label for="phonenumber" class="form-label"><h6>Phone Number</h6></label>
                <input type="text" name="phonenumber" class="form-control" placeholder="+254">
            </div>

            <div class="col-lg-6">
                <label for="emailadress" class="form-label"><h6>email adress</h6></label>
                <input type="text" name="email" class="form-control" placeholder="Please Enter Your email Adress">
            </div>

            <div class="col-lg-6">
                <label for="gender" class="form-label"><h6>what is your grnder ?</h6></label> 
                
                <select class="form-select" aria-label="Default select example" name="gender">
                    <option selected>--select your gender--</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                   
                </select>
            </div>
    
            <p style="text-align:left;">In order to complete your registration in the bootcamp, you are required to select one course you will be <br> undertaking.Please NOTE that: This will be your learning track during the 2-weeks immersion.</p>

            <div class="mb-5 mt-5 col-lg-6">
                <label for="course" class="form-label"><h6>What is your prefered course ?</h6></label> 
                
                <select class="form-select" aria-label="Default select example"name="course">
                    <option selected>--select your course--</option>
                    <option value="software design">software design</option>
                    <option value="cyber security">cyber security</option>
                </select>
            </div>
      
      
            <p style="text-align:left;" >You agree by providing your information you understand all our data privacy and security policy <br>
                outlined in our Terms & condition and the privacy policy statements. 
            </p>

                <div class="container mb-5 mt-5">
                    <div class="form check">
                        <input class="form-check-label" type="checkbox" value="" id="flexcheckdefault">
                        <label class="form-check-label" for="flexcheckdefault mt-1">
                            Agree terms and conditions
                        </label>
                    </div>
                </div>
            
                <div class="col-lg-6">
                 <button type="submit" name="submitapplication"class= "btn btn-primary">Submit aplication</button>
                </div>
     </form>
        
                <br>

                <br>
                <hr>
                <p style="color:grey;" >Subscribe to get information ,latest news about <br> zalego academy</p>
     <form acation="enrol.php" method="POST">
                <div class="row">
                    <div class="col-lg-12" style="text-align: center; margin-bottom:3px;">
                        
                        <input type="email" class="form-control" placeholder="Your email adress" >
                        <button name="subscribe" class= "btn btn-primary">Subscribe</button>
                    </div>
                </div>     
      </form>           
    </div>
     
                     <br>  <hr style="color:black;" >
                    
                    <footer>
                        &copy;company 2022
                    </footer>
                
            

       </div>
    

      <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
     <script src="bootstrap-5.2.0/bootstbootrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>