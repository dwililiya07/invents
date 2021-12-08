<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/register.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/popbox.css"> -->
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/responsive.css">
    <link rel="stylesheet" href="login.php">
    <title>laman masuk</title>
    <title>Register form</title>
</head>
<body>

    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
          <a href="home.html">
            <img class="mx-auto d-block" src="./img/logo.png" alt="logo"  style="width:25%;">
          </a>
          <div class="modal-body" style="background-color:white;">
          <center><p>Daftarkan dirimu untuk eksplor event yang lebih baik</p></center>
              <form action="daftar.php">
                <div class="form-group">  
                  <form class="form-inline">
                  <div class="input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text"><img src="img/name.png" width="20px" height="20px"> </span>
                    </div>
                    <input type="text" style="width: 420px;" class="form-control" name="nama" placeholder="Nama Lengkap">
                  </div>    
                  </form>                
                </div>

                <div class="form-group"> 
                  <form class="form-inline">
                    <div class="input-group">
                      <div class="input-group-prepend">
                      <span class="input-group-text"><img src="img/email.png" width="20px" height="20px"> </span>
                      </div>
                      <input type="email" style="width: 420px;" name="email" class="form-control" placeholder="Email">
                    </div>    
                  </form>              
                </div>

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

                  <div class="form-group">
                    <form class="form-inline">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><img src="img/padlock2.png" width="20px" height="20px"> </span>
                          </div>
                            <input type="password" style="width: 420px;" name="password" class="form-control" placeholder="Konfirmasi Password">
                        </div>    
                    </form>   
                  </div>

                  <div class="form-group">
                    <form class="form-inline">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><img src="img/telepon.png" width="20px" height="20px"> </span>
                        </div>
                          <input type="text" style="width: 420px;" name="telepon" class="form-control" placeholder="No.Telepon">
                      </div>    
                    </form>                   
                  </div>

                  <div class="form-group">
                  <form class="form-inline">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><img src="img/building.png" width="20px" height="20px"> </span>
                        </div>
                          <input type="text" style="width: 420px;" class="form-control" name="organisasi" placeholder="Organisasi">
                      </div>    
                    </form>      
                  </div>
                 <center>
                   </a><button type="button" class="btn btn-primary" style="border-radius: 30px; width:80%;">Daftar</button>
                    <br><br><p style="font-size: 9pt;">Dengan menekan tombol "Daftar", maka kamu menyetujui ketentuan penggunaan</p></>
                    <p style="font-size: 9pt;">Sudah punya akun?</p>
                    <a href="login.php">
                        <button type="button" class="btn btn-light" style="border-radius: 30px; width:80%; background-color:aliceblue;">Masuk</button>
                    </a>
                 </center><br>
               </form>
          </div>
          </div>
        </div>
</body>
</html>