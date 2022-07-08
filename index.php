<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bootstrap Grid Layout</title>
    <link rel="stylesheet" href="style.php">
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
                        <a href="#" class="nav-link active">Home</a>
                        <a href="aboutus.html" class="nav-link">ABOUT US</a>
                        <a href="#" class="nav-link">CONTACT US</a>
                    </div>
                </div>
        
        </div>  
    </nav> -->
     <!-- end navigation bar -->


  
<br>
    <main class="p-5 md-4 bg-light round-0">
        <h1>Welcome, Fosi</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae repellat aut delectus neque porro natus repellendus molestias animi iure, nesciunt labore officiis id nam nemo impedit, atque quis maxime quasi?</p>
        <button class="btn btn-primary">learn more</button>
        
    </main>
    <br>
    <hr>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-4">
                <h4>Header1</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dignissimos quasi, molestias voluptas impedit adipisci praesentium aperiam cum, debitis architecto rerum? Veniam qui earum tempore iusto pariatur maiores fuga architecto.</p>
                <button class="btn btn-primary">learn more</button>
            </div>
            <div class="col-lg-4">
                <h4>Header2</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dignissimos quasi, molestias voluptas impedit adipisci praesentium aperiam cum, debitis architecto rerum? Veniam qui earum tempore iusto pariatur maiores fuga architecto.</p>
                <button class="btn btn-primary">learn more</button>
            </div>
            <div class="col-lg-4">
                <h4>Header3</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dignissimos quasi, molestias voluptas impedit adipisci praesentium aperiam cum, debitis architecto rerum? Veniam qui earum tempore iusto pariatur maiores fuga architecto.</p>
                <button class="btn btn-primary">learn more</button>
            </div>

        </div>
        <!-- contact us page here-->
        <div class="row">
            <h1>Contact us </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit voluptatibus sint quae esse aperiam, blanditiis debitis unde mollitia rem, ipsam eos pariatur quas natus dicta recusandae tempore vitae temporibus culpa necessitatibus nulla consequuntur. Sapiente, culpa quidem? Fugit molestias et earum?
            </p>
          <form action="index.php" method="POST">
             <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" placeholder="Enter first name">
                  </div>
                  <div class="mb-3 col-lg-6" >
                      <label for="lastName" class="form-label">Last name</label>
                      <input type="text" class="form-control" placeholder="Enter last name">
                    </div>
             </div>
             <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="email" class="form-label">email</label>
                    <input type="text" class="form-control" placeholder="Enter email">
                  </div>
                  <div class="mb-3 col-lg-6" >
                      <label for="phone" class="form-label">phone number</label>
                      <input type="tel" class="form-control" placeholder="Enter your no.">
                    </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">
                    <label for="message" class="form-label">Your message</label>
                    <textarea cols="30" rows="10" class="form-control"></textarea>
                 </div>

             </div>
             <br>
             <button class="btn btn-primary" type="submit" >send a message</button>
          </form>
          
        </div>
        <!-- end contact us page -->
    <hr>
    <footer>
        &copy;company 2022
    </footer>
    </div>
    
    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
</body>
</html>