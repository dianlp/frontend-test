<!DOCTYPE html>
<html lang="en">
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body>
    <!-- Content Wrapper. Contains page content -->
    <div class="container-login">
        <form>
            <img class="img-login" src="energeek2 1.png">
            <div class="box">
                <p>Silahkan Masuk</p>
                <input class="form-control" id="username" placeholder="Username">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <button type="submit" class="btn" id="btn" onClick="checkLoginPass()">Masuk</button>

            </div>
        </form>

    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE -->
    <script src="<?= base_url('dist/js/adminlte.js') ?>"></script>

    <script>
        var checkLoginPass = function (){
            var user = document.getElementById("username").value;
            var pass = document.getElementById("password").value;
            if (user === "energeek" && pass === "En3rg33k") {
                window.location.replace("/admin");
            }
            if (user === "user_reg" && pass === "qwerty123456") {
                window.location.replace("/user");
            }
        };
    </script>