<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="py-5" style="background-image: url(images1/ntare.jpg); background-size:cover; background-position: center;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
              
                <form action="login-code.php" method="POST">
                <div class="mb-3">
                  <label >Email</label>
                  <input type="email" name="email" class="form-control" >
                </div>
                <div class="mb-3">
                  <label >Password</label>
                  <input type="password" name="password" class="form-control" >
                </div>
                <div class="row mb-3">
                 <div class="col-6">
                   <button type="submit" name="loginbtn" class="btn btn-primary w-100">Login</button>
                 </div>
                 <div class="col-6">
                   <button type="button" class="btn btn-secondary w-100"><a href="index.php" class="text-white">Back</a></button>
                 </div>
                 </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>