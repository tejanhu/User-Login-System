<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Login & Registration</title>
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/user-login-system">User System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link" href="/user-login-system/updateDetails">Update Details</a>
        <a class="nav-link" href="/user-login-system/dashboard">Dashboard</a>
        <a class="nav-link" href="/user-login-system">Login</a>
        <a class="nav-link" href="/user-login-system/register">Register</a>
      </div>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-4">
            <div class="card">
            <div class="card" style="margin-top: 30px">
                <div class="card-header text-center">
                    Update Details
                </div>
                <div class="card-body">
                        <form id="form" autocomplete="off" action="<?=base_url('/dashboard')?>"  method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" placeholder="Username" name="username" class="form-control" id="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" placeholder="Password" name="password" class="form-control" id="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" placeholder="Email Address" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" placeholder="Phone Number" name="phone" class="form-control" id="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" placeholder="Age" name="age" class="form-control" id="age" required>
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" placeholder="City" name="city" class="form-control" id="city" required>
                            </div>
                            <div class="mb-3">
                                <label for="postcode" class="form-label">Post Code</label>
                                <input type="text" placeholder="Post Code" name="postcode" class="form-control" id="postcode" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" placeholder="Address" name="address" class="form-control" id="address" required>
                            </div>
           
                            <div class="mb-3">
                                <label for="reg_date" class="form-label">Registration Date</label>
                                <input type="date" placeholder="Registration Date" name="reg_date" class="form-control" id="reg_date" required>
                            </div>
           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                           
                        </form>
                </div>
                </div>
            </div>
        </div>
       
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <script src="register.js"></script>


  </body>
</html>