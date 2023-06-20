<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem</title>

    <!-- <link rel="shortcut icon" href="layouts/assets/img/iconboba.png" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" type="text/css" href="/layouts/assets/css/loginstyle.css"> -->
    <link rel="stylesheet" href="<?php echo AST; ?>/css/loginstyle.css">
</head>
<body>

    <div class="loginstyle">
        <div class="loginstyle1">
        <img src="<?php echo AST; ?>/img/delitekno.png" alt="">
            <h3> Login Admin</h3>
        </div>

        <form action="<?php echo URL; ?>/dashboard">
            <table class="loginstyle2">
                <tr>
                    <td class="text1">Username or Email Address</td>
                </tr>

                <tr>
                    <td class="block1"><input type="text" name="user_name" id=""></td>
                </tr>

                <tr>
                    <td class="text1">Password</td>
                </tr>
                
                <tr">
                    <td class="block1"><input type="password" name="user_password" id=""></td>
                </tr>

                <tr>
                    <td class="block2"><input type="submit" name="btn_login" value="Login"></td>
                </tr>

            </table>
            
        </form>
    </div>

    <div class="logologin">
        <div class="logologin1">
            <div class="logologin2">
                <a href="https://github.com/PatrickkkKing" target="_blank" rel="noopener noreferrer"> <img src="<?php echo AST; ?>/img/githublogo.png" alt=""></a>
                <h4>GitHub</h4>
            </div>
            <div class="logologin2">
                <a href="mailto:muklasputra222@gmail.com" target="_blank" rel="noopener noreferrer"> <img src="<?php echo AST; ?>/img/gmaillogo.png" alt=""></a>
                <h4>Email</h4>
            </div>
            <div class="logologin2">
                <a href="https://instagram.com/muklas_gilbert" target="_blank" rel="noopener noreferrer"> <img src="<?php echo AST; ?>/img/instagramlogo.png" alt=""></a>
                <h4>Instagram</h4>
            </div>
            <div class="logologin2">
                <a href="http://facebook.com/muklas.a.putra.988" target="_blank" rel="noopener noreferrer"> <img src="<?php echo AST; ?>/img/fblogo.png" alt=""></a>
                <h4>Facebook</h4>
            </div>
        </div>
    </div>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Warung Rizky</title>

</head>

<body>
    <form action="<?php echo URL; ?>/dashboard">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h4 class="text-center mb-3">Form Login</h4>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="user_nama">
                <label for="floatingPassword">Nama</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" class="form-control " id="floatingPassword" placeholder="Password" name="user_alamat">
                <label for="floatingPassword">Alamat</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" name="user_email" placeholder="Email">
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="user_password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="user_hp">
                <label for="floatingPassword">Nomor Hp</label>
            </div>

            <button type="submit" name="btn_simpan" value="SIMPAN" class="col-12 btn btn-success position-absolute top-100 start-50 translate-middle mt-5 bi bi-caret-down-fill btn-">Login</button>
        </div>
    </form>
</body>

</html> -->