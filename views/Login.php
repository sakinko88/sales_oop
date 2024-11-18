<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <main class="row justify-content-center mt-5 w-25 mx-auto">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
          <h2 class="text-start text-primary fw-bold display-5">LOGIN <i class="fa-solid fa-right-to-bracket" style="color: #005eff;"></i></h2>
        </div>
          

          <form action="../actions/login.php" method="post">
              <div class="row mt-3">
                <div class="col-3">
                    <label for="username" class="form-label">Username</label>
                </div>
                <div class="col-9">
                      <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                </div>
                <div class="col-3 mt-2">
                    <label for="password" class="form-label">password</label>
                </div>
                <div class="col-9 mt-2">
                      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="col-3"></div>
                <div class="col-9 mt-2">
                    
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="Registration.php" class="btn btn-danger btn-sm text-center mt-2">Create an Account</a>
                    
                </div>
          </form>
          
      
        
      </div>
</main>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
