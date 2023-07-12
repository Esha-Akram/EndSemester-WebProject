<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
    <h2 class="text-center mb-5" >Admin Login</h2>
        <div class="row d-flex justify-content-center align-items-center">   
            <div class="col-lg-6 col-xl-5">
                <img src="../images/Login.jpg" alt="Signup" class="img-fluid" height="100%" width="100%">
            </div>
            <div class="col-lg-6 col-xl-4">
            <form action="do_login.php" method="post" >
                <div class="form-outline mb-4">
                  <label class="form-label" for="name">Username</label>
                  <input type="text" id="name" name="username" class="form-control" required="required" />              
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control" required="required" />                 
                </div>
                <!-- <div class="form-outline mb-4">
                  <label class="form-label" for="confirm_password">Confirm Password</label>
                  <input type="password" id="confirm_password" name="confirm_password" class="form-control" required="required" />               
                </div>  -->
                <!-- <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="agree" />
                  <label class="form-check-label" for="agree">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div> -->
                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>
                <p class="text-center text-muted mt-4 mb-0">Don't you have an account? <a href="admin_registration.php"
                    class="fw-bold text-body"><u>Register</u></a></p>
            </div>
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