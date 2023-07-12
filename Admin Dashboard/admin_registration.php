<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
     <!--Bootsrap CSS Link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Font Awosome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS File Link-->        
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-fluid m-3">
    <h2 class="text-center mb-5" >Admin Registration</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/Signup.jpg" alt="Signup" class="img-fluid" height="100%" width="100%">
            </div>
            <div class="col-lg-6 col-xl-4">
            <!-- <div class="card" style="border-radius: 15px;"> -->
            <!-- <div class="card-body p-5"> -->
                <form action="do_register.php" method="post" >
                <div class="form-outline mb-4">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" id="username" name="username" class="form-control"  autocomplete="off" required="required" />              
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="email" >Email</label>
                  <input type="email" id="email" name="email" class="form-control" autocomplete="off" required="required"/>                  
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                  name="password" class="form-control"  autocomplete="off" required="required" />                 
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="confirm_password">Confirm Password</label>
                  <input type="password" id="confirm_password" name="confirm_password" class="form-control" required="required" />               
                </div>  
                <!-- <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="agree" />
                  <label class="form-check-label" for="agree">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div> -->
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>
                <p class="text-center text-muted mt-4 mb-0">Have already an account? <a href="admin_login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>
                </form>
            <!-- </div> -->
            <!-- </div> -->
            </div>
          </div>
    </div>
    <!--Bootsrap Js Link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>