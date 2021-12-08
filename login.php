<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/register.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/popbox.css"> -->
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/responsive.css">
    <link rel="stylesheet" href="home.html">
    <title>laman masuk</title>
  </head>
  <body>

    <div class="modal-dialog" role="dialog">
            <div class="modal-content">
              <a href="home.html">
                <img class="mx-auto d-block" src="img/logo.png" alt="logo"  style="width:25%;">
              </a>
              <div class="modal-body" style="background-color:white;">
              <center><p>Masuk dan temukan event yang kamu cari</p></center>
                  <form action="daftar.php">
                    <div class="form-group">  
                      <form class="form-inline">
                      <div class="form-group">
                        <form class="form-inline">
                          <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><img src="img/user.png" width="20px" height="20px"> </span>
                            </div>
                            <input type="text" style="width: 420px;" name="username" class="form-control" placeholder="Username"> 
                          </div>    
                        </form>   
                      </div>
    
                      <div class="form-group">
                        <form class="form-inline">
                            <div class="input-group">
                              <div class="input-group-prepend">
                              <span class="input-group-text"><img src="img/padlock.png" width="20px" height="20px"> </span>
                              </div>
                              <input type="password" style="width: 420px;" name="password" class="form-control" placeholder="Password">
                            </div>    
                          </form>   
                      </div>
                      <a href="lupapassword.php">Lupa kata sandi?</a>
    
                     <br><br><center>
                       <button type="button" class="btn btn-primary" style="border-radius: 30px; width:80%;">Masuk</button>
                        <br><br><p style="font-size: 10pt;">Belum punya akun?</p>
                        <a href="register.php">
                          <button type="button" class="btn btn-light" style="border-radius: 30px; width:80%; background-color:aliceblue;">Daftar</button>
                        </a>
                     </center><br>
                   </form>
              </div>
              </div>
            </div>
          </div>

          
    <!-- </div> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>