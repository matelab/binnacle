<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Suscripciones | Mas Inversiones</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
    crossorigin="anonymous"">

    <!--Custom CSS-->
    <link rel="stylesheet" href="./resources/css/custom.css" />
    <link rel="stylesheet" href="./resources/css/styles.css" />

    <!--Fonts-->
    <link rel="stylesheet" href="./resources/fonts/stylesheet.css" />
    <style>
      body {
        background: url("./images/bg.jpg");
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7325e1', endColorstr='#83e4d0', GradientType=0);
      }

      .contenedor {
        max-width: 560px;
        margin: 20px auto;
        padding: 10px;
        background-color: #fff;
        -webkit-box-shadow: 0px 2px 19px -9px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 2px 19px -9px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 2px 19px -9px rgba(0, 0, 0, 0.75);
        border-radius: 8px;
      }

      .lg_invesiones {
        margin: 0px auto 10px auto;
      }

      .container-img {
        text-align: center;
        margin: 0 auto;
      }

      form {
        font-family: "Helvetica Now Text";
        font-weight: 500;
      }

      .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
      }

      .form-control,
      button {
        border-radius: 0px !important;
        border: 2px solid #8b0986;
      }

      .btn-primary {
        background-color: #401666;
        border: 0px;
        padding: 6px 15px;
        transition: all 0.3s;
      }

      .btn-primary:hover,
      .btn-primary:active {
        background-color: #7d4aab !important;
        border-color: #8b0986 !important;
        outline: none !important;
        box-shadow: none !important;
      }

      .form-control:focus {
        outline: none !important;
        box-shadow: none !important;
        border-color: #8b0986;
      }

      label {
        color: #7325e1;
      }

      .modal-header .close {
        position: absolute;
        top: 4px;
        right: 12px;
      }
    </style>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="loginBox">
              <img
                src="./images/mas_inversiones.png"
                class="img-responsive"
                alt="Logo Mas Inversiones"
              />
              <h2>LOGIN</h2>

              <form action="/controllers/check-login.php" method="post">
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control input-lg"
                    name="email"
                    placeholder="Email"
                    required
                  />
                </div>
                <div class="form-group">
                  <input
                    type="password"
                    class="form-control input-lg"
                    name="password"
                    placeholder="Password"
                    required
                  />
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                  Login
                </button>
              </form>
            </div>
            <!-- /.loginBox -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!--/.row-->
    </div>
    <!-- /.container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
