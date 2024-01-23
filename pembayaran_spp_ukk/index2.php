<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin / Petugas - Aplikasi Pembayaran SPP.</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="mts.jpg.png" type="image/x-icon">
  <style>
    body {
      background-color: #0d1117;
      /* Dark purple background color */
      padding-top: 60px;
      /* Adjusted for the fixed navbar height */
      line-height: 1.5;
    }

    .navbar {
      background-color: #0d1117;
      /* Dark  background color for navbar */
      padding: 2px;
    }

    .navbar a {
      color: #fff;
      /* Navbar link text color */
      margin-right: 15px;
      text-decoration: none;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Noto Sans", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
      margin-bottom: 10px;
      font-size: 14px;

    }

    .navbar a:hover {
      color: #6c757d;
    }

    .container {
      margin-top: 20px;
    }

    .navbar-brand img {
      height: 35px;
      /* Adjust the height as needed */
      margin-right: 10px;
      /* Adjust the margin as needed */
    }

    /* Footer styling */
    footer {
      background-color: #0d1117;
      /* Dark gray background color for the footer */
      color: #6c757d;
      /* Text color for the footer */
      padding: 20px 0;
      text-align: center;
      margin-top: 350px;
      font-family: Georgia, 'Times New Roman', Times, serif
    }

    .alert {
      font-weight: bold;
      text-align: center;
      background-color: #0d1117;
    }

    .tombol {
      font-weight: bold;
    }

    h3 {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      color: #fff;
      text-align: center;
    }

    .logout {
      margin-left: 30px;
    }

    .card {
      background-color: #0d1117;
      color: #fff;
    }

    .form-control {
      background: black;
    }

    h4 {
      color: #fff;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="mts.jpg.png" alt="Logo">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Login Siswa</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        <h4 class="text-center">LOGIN ADMIN / PETUGAS</h4>
        <div class="card">
          <div class="card-header">
            <img src="logo-spp.png" width="100%">
          </div>
          <div class="card-body">
            <form action="proses-login-petugas.php" method="post">
              <div class="form-group mb-2">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username anda.." required>
              </div>
              <div class="form-group mb-2">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password anda.."
                  required>
              </div>
              <div class="form-group mb-2">
                <button type="submit" class="btn btn-success">LOGIN</button>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>

  </div>
  <footer>
    <p>&copy; Managemenet Training System</p>
  </footer>



  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>