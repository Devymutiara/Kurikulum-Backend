    <?php 
    session_start();
    if(!isset($_SESSION['status'])){
        echo null; //set null agar tidak muncul error
    } else if($_SESSION['status'] == 'admin') {
        header("location: index.php");
    } else if($_SESSION['status'] == 'user') {
        header("location: user.php");
    }

    if($_GET['logout'] == "yes"){
        session_unset();
        header("location: login.php");
    } else{
        echo null;
    }
    
    include 'library.php';
    $login = new Login();
    if(isset($_POST['login'])) {
        $adminUser = "AdminOnly";
        $adminPwd = "justAdmin";
        $uname = $_POST['uname'];
        $pass = $_POST['psw'];
    
        if($uname == $adminUser && $pass == $adminPwd) {
            $_SESSION['uname'] = "Author";
            $_SESSION['status'] = "admin";
        header("location: index.php");
         } else if ($uname != $adminUser && $pass != $adminPwd) {
            $login->masuk($uname, $pass);
        }
    }

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            form {
                border: 3px solid #f1f1f1;
            }

            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                border-radius: 5px;
            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }

                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>

    <body>
        <br><br><br>
        <center>
            <h2>Silakan Masuk</h2>
        </center>
        <br><br><br>
        <form action="" method="POST">
            <div class="col-6 container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button name="login" type="submit">Login</button>

            </div>
            <div class="col-6 container">
                <span class="psw">Belum punya akun? Daftar di <a href="register.php">sini</a></span>
            </div>
        </form>

    </body>

    </html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>