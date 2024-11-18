<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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

    <div class="container mx-auto w-50">
       <h2 class="text-danger text-center display-4 fw-bold"><i class="fa-solid fa-user-plus" style="color: #f90101;"></i>Registration</h2>

       <div class="mt-3">
       <form action="../actions/registration.php" method="post">
          <div class="row">
              <div class="col-6">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control">
              </div>
              <div class="col-6">
                  <label for="last_name">Last Name</label>
                  <input type="text" name="last_name" id="last_name" class="form-control">
              </div>

          </div>

          <div class="mt-2">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control">
          
          </div>
          <div class="mt-2">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control">
          
          </div>
          <div class="mt-3">
              <button type="submit" name="" class="btn btn-danger w-100">Register</button>
          
          </div>
       </form>
       </div>
    </div>
    
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
