<?php 
    $connect = mysqli_connect("localhost", "root", "", "obat");
    $erorus = "" ;
    $erorpw = "";
    if(isset($_POST['sign'])){
        $username= $_POST['username'];
        $pw = $_POST['password'];
        $encrypt_pw = md5($pw);
        if(empty($username)){
            $erorus ="username tidak boleh kosong!";
        }

        if(empty($pw)){
            $erorpw = "password tidak boleh kosong!";
        }

        if($erorus == "" && $erorpw == ""){
            $query = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");
            $result = mysqli_fetch_assoc($query);

            if(mysqli_num_rows($query) > 0){
                echo "<script>
                    alert('akun sudah pernah dibuat!');
                </script>";
            }else{
                $query_insert = mysqli_query($connect, "INSERT INTO user (username, password, level) VALUES
                ('$username', '$encrypt_pw', '2')");
                echo "<script>
                    alert('akun berhasil dibuat!');
                    window.location.href='login.php';
                </script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Login</title>
    <style>
        body{
            font-family: 'Arial';
            margin: 0;
            height: 100vh;
            background: linear-gradient(180deg, #4A90E2, #1E3A8A, #0F172A);
        }

        .signup-title {
            font-size: 2.5rem; 
            font-weight: bold; 
            text-align: center; 
            color: black; 
            margin-bottom: 20px; 
            text-transform: uppercase; 
            letter-spacing: 2px; 
            font-family: 'Arial', sans-serif; 
            padding: 10px; 
        }

        .card{
            box-shadow: 2px 2px 2px gray;
        }
        .card-body{
            background: radial-gradient(circle, #D4EBF8,  #A2D2DF);
        }
        .input-user{
            position: relative;
            margin-bottom: 20px;
            display: flex;
            gap: 3px;
            border: 2px solid black;
            padding: 10px;
            border-radius: 90px;
            background-color: #F8FAFC;
        }

        .input-user div input{
            width: 100%;
            border: none;
            outline: none;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
            background-color: #F8FAFC;
        
        }


        .input-user:focus-within {
            border-color: #007BFF; 
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .input-user div input:focus{
            border-bottom: 2px solid #9AA6B2;
        }
        .input{
            width: 100%;
        }
        .eror{
            color: red;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 30%">
            <div class="card-body">
                <form action="" method="post">
                <div class="p-5">
                    <div class="mb-2">
                        <div class="d-flex justify-content-center align-items-center">
                            <h5 class="signup-title">Sign Up</h5>
                        </div>
                    </div>
                    <div class="input-user d-flex align-items-center gap-3">
                        <div class="logo">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input">
                            <input type="text" name="username" placeholder="Masukkan Username">
                        </div>
                    </div>
                    <p class="eror mt-0"><?= $erorus  ?></p>
                    <div class="input-user d-flex align-items-center gap-3">
                        <div>
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="input">
                            <input type="password" name="password" placeholder="Masukkan Password">
                        </div>
                    </div>
                    <p class="eror mt-0"><?= $erorpw  ?></p>
                    <div class="d-flex justify-content-center gap-3 ">
                        <button type="submit" name="sign" class="btn btn-primary" style="width: 100%;">Create Account</button>
                    </div>
                    <div class="d-flex align-items-center mt-2 gap-1">
                        <button type="button" class="btn btn-warning" onclick="window.location.href='login.php'">
                            <i class="fa-solid fa-arrow-left"></i> Back</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>