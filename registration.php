<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8d0e03591a.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5 d-flex justify-content-center align-items-center">
        <div class="card" style="width: 35rem; background-color: rgba(0,0,0,0.4)">
            <div class="card-header">
                <h2 class="text-center">Registration</h2>
            </div>
            <div class="card-body">
                <form method="post" action="config.php">
                <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Full name" name="tname" required="required">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email address" name="tmail" required="required">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="number" class="form-control" placeholder="Mobile number" name="tmob" required="required">
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Enter your password" name="tpass" required="required">
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Confirm password" name="tcpass" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success w-100" name="submit">Create Account</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center text text-light">
                Already have an account?<a href="login.php">Log In</a>
            </div>
        </div>
    </div>
</body>
</html>