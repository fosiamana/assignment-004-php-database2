<?php
$server="localhost";
$username= "root";
$password="";
$database="zalego";
$conn=mysqli_connect( $server,$username,$password,$database);
if(isset($_POST["submitButton"]))
{
    // 1.fetch form data
     $fullname=$_POST['fullname'];
     $email=$_POST['email'];
     $phonenumber= $_POST['phonenumber'];
     $gender=$_POST['gender'];
     $courses=$_POST['courses'];
    // 2. submit form  data
    $insertData=mysqli_query( $conn, "INSERT INTO enrollment(fullname,email, phonenumber,gender,courses) VALUES('$fullname','$email','$phonenumber','$gender','$courses')" );
    if($insertData)
    {
        echo"Data submited successfully";
    }
        else{ 
            echo"error occured";
        }
    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enroll page</title>
    <link rel="stylesheet" href="enroll.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
 <?php
 include('navbar.php');

 ?>
     <br>
     <main class= "p-5 md-4 bg-light round-0">
        <h1 class="text-center">JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        
        <span><i class="fa fa-calendar fa-2x"area-hidden="true"></i>  20th July 2022</span> <p></p>
        <i class="fa fa-map-marker fa-2x fa-2x" area-hidden="true"></i>  Zalego Academy,<br>    Devan plaza<p></p> 



     </main>
     <p class="text-center">looking for a place to kickstart your career in technology? <br> Whether you are a local, 
     new in town or just crushing through, we have got ;loads of great tips and events for you .</p>
     
        <div class="container shadow">
            <h1 class="text-center"><b>Sign up today?</b></h1>
            <form action="enroll.php" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                <label for="fullName" class="form-label"><b>Full name</b></label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter first name">
                </div>
                <div class="mb-3 col-lg-6">
                <label for="phone" class="phone Number"><b>phone number</b></label>
                    <input type="text"  name="phonenumber"class="form-control" placeholder="+254...">
                </div>
                <div class="mb-3 col-lg-6">
                <label for="email" class="form-label"><b>email address</b></label>
                    <input type="text" name= "email" class="form-control" placeholder="please enter ypur email">
                </div>
                <div class="mb-3 col-lg-6">
                <label for="gender" class="form-label"><b>what's your gender</b></label>
                  
                  <select class="form-select" name=" gender" aria-label="Default select example">
                     <option selected>....select your  gender...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
  
                     </select>
                </div>
            </div>
            
              
                
                <p>In order to complete your registration to the bootcamp, you are required to select one course you will be  undertaking. please NOTE that this will be your learning track during the 2-weeks immersion</p>
            <div class="row">
                <div class="mb-3 col-lg-6">
                <label for="courses" class="form-label"> <b>What's your preffered course ? </b></label>
                <select class="form-select"  name="courses" aria-label="Default select example">
                     <option selected>...select your course...</option>
                    <option value="cyber security">cyber security</option>
                    <option value="software engineering">software engineering</option>
                    <option value="web development">web development</option>
                    <option value="software designe">software designe</option>
                </select>
                </div>
                     <p>You agree by providing your information you undrstand all our data privacy and protection policy outlined in our terms & condition and the privacy policy statement</p>

                 <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <b>Agree terms and conditions</b> 
                     </label>
                     <br>
                     <button class= "btn btn-primary" type="submit" name="submitButton">Submit application </button>
                  </div>
                  <p class="text-center">subscribe to get information latest news about <br> Zalego Academy</p>
                  <div class="container">
                         <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="your email address" >
                            </div>
                            <div class="col-lg-6">
                            <button class= "btn btn-primary" >Subscribe</button>
                            </div>

                         </div>
                  </div>
            </form>


        </div>
        <br>
</div>
<br>
  <p class="text-center">Subscribe to get latest information, latest news about  <br> zalego</p>
    <div class="container">
     <div class= "row">
        <div class="col-lg-6">
            <input type="text" class="form-control" placeholder= "enter email address">
            <button class="btn btn-primary">subscribe</button>
           
        </div>
        

      </div>   
            
            

        
        

     </div>
       
<footer>
    <hr>
    &copy;company 2022
</footer>


     <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    
</body>
</html>