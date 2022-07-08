<?php 
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn=mysqli_connect($server,$username,$password,$database);
if(isset($_POST["submitButton"]))
{
    $email=$_POST['email'];
    $insertData=mysqli_query( $conn, "INSERT INTO subscribers(email) 
    VALUE('$email')");
    if($insertData)
    {
        echo "Data submited successfully";
    }
        else{ 
            echo "error occured";
        }
    
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
</head>
<body>
     <!-- navigation bar here -->
      <nav class="navbar navbar-expand-lg bg-light shadow fixed-top" >
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
             </button>
                <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                    <div class="navbar-nav">
                        <a href="index.html" class="nav-link active">Home</a>
                        <a href="#" class="nav-link">ABOUT US</a>
                        <a href="#" class="nav-link">CONTACT US</a>
                    </div>
                </div>
        
        </div>  
     </nav>  
     <br>
       <!-- end of navigation bar -->
     <main class="p-5 md-4 bg-light round-0">
        <h1>About us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque iure obcaecati at eum itaque illo maxime alias impedit id? Consequuntur?</p>
        
    </main>
  <div class="container">
      <div class="row pt-5"> 
          <div class="col-lg-6">
              <h1>Our Program</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio et obcaecati, atque minus aliquid, voluptatum, maxime accusantium autem sunt velit officiis! Minima omnis perspiciatis numquam impedit corrupti vitae inventore.</p>
          </div>
          <div class="col-lg-6">
              <img src="images/laptop.webp" alt="a laptop" height="250px">
          </div>
      </div>
      <br>
      <h1>The Programs</h1>
      <div class="row"> 
          <div class="col-lg-4">
          <div class="card card-border-radius-10px">
              <div class="card-body">
              <h4>Skill Discovery</h4>
             <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime perspiciatis nesciunt, quisquam adipisci soluta distinctio.</p>
              <a href="#" class="btn btn-primary">view details</a>
            </div> 
          </div>
          </div>
          <br>
          <div class="col-lg-4">
              <div class="card card-border-radius-10px">
                  <div class="card-body">
                  <h4>Upskilling Programs</h4>
                  <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. ab cumque ex animi dolorum, nostrum quasi eum provident!</P>
                  <a href="#" class="btn btn-primary">view details</a>
                </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="card card-border-radius-10px">
                  <div class="card-body">
                    <h4>Upskilling Programs</h4>
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. ab cumque ex animi dolorum, nostrum quasi eum provident!</P>
                    <a href="#" class="btn btn-primary">view details</a>
                  </div>
              </div>
          </div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-lg-12">
              subscribe to get informaton,latest news about Zalego
          </div>
          <div class="col-lg-12">
              <form action="aboutus.php" method="POST">
                  
                  <input type="text" name="email" placeholder="Your email address">
                  <button class="btn btn-primary" type= "submit" name="submitButton">subscribe</button>
              </form>
          </div>
      </div>
      <hr>
    <footer>
        &copy;company 2022
    </footer>

  </div>  











    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
</body>
</html>