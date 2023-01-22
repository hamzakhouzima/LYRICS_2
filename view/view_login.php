<?php

include '../controller/login.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<section class="h-100 gradient-form" id="back" style="background-color: #eee;">

  <div class="container py-5 h-100" >
  
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="assets/logo.png" style="width: 185px;" alt="logo">
                 
                  <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                </div>

                <form method='post'>

                <div class="form-outline mb-4">
  <?php if (isset($_SESSION['email_error']) ): ?>
				<div class="alert alert-green alert-dismissible fade show " style="background-color:red;">
				<strong>Please!</strong>
					<?php 
						echo $_SESSION['email_error']; 
                        unset($_SESSION['email_error']);
						
					?>
          
				</div>
			<?php endif ?>
  <?php if (isset($_SESSION['password_error'] ) ): ?>
				<div class="alert alert-green alert-dismissible fade show " style="background-color:red;">
				<strong>Please!</strong>
					<?php 
						echo $_SESSION['password_error'] ; 
                        unset($_SESSION['password_error']);
						
					?>
          
				</div>
			<?php endif ?>
  <?php if (isset($_SESSION['login_error'] ) ): ?>
				<div class="alert alert-green alert-dismissible fade show " style="background-color:red;">
				<strong>Please!</strong>
					<?php 
						echo $_SESSION['login_error'] ; 
                        unset($_SESSION['login_error']);
						
					?>
          
				</div>
			<?php endif ?>
   
  </div>
                 <strong> <p>Please login to your account</p></strong>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" id="form2Example11" class="form-control"  name="log_email" placeholder="email address" />
                     
                   
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22" class="form-control" name="log_password"  placeholder="password" />
                   
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type='submit'><br>
                    <label class="form-label" for="form2Example22" >Login</label>
                   
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href='view_signup.php'> <button type="button" class="btn btn-outline-danger" >Signup</button></a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2"  id='side'> 
              <!-- <div class="text-white px-3 py-4 p-md-5 mx-md-4" >
                
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<style>
#back{
  background-image: url("assets/background.png");
  width : 100%;
}
#side{
    background-image: url("assets/side.png");
    border-radius : 6px;
   

}

</style>

</body>
</html>