<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        body{
            background-image: url("https://wallpapertag.com/wallpaper/full/5/a/9/214618-4k-hd-wallpapers-3840x2160-tablet.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        table{
            width: 500px;
            height: 250px;
        }
        form{
            padding: 40px;
            border-radius: 8px;
        }
        #a{
            color:white;
            font-size:20px;
        }
    </style>
</head>
<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">

        <!-- form -->
    <form method="post" action="login.php">
        <table >
            <tr>
                <td><label for="email" class="w-100" id="a">Email</label></td>
                <td><input type="text" id="email" name="email" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="password" class="w-100" id="a">Password</label></td>
                <td><input type="text" id="password" name="password" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="con_password" id="a">Confirm Password</label></td>
                <td><input type="text" id="con_password" name="con_password" class="form-control"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="signup" class="btn btn-success w-100" value="SignUp"></td>
            </tr>
        </table>
        <?php
include 'database.php';
if(isset($_POST['signup'])){
            $mail = $_POST['email'];
            $pass = $_POST['password'];
            $con_pass=$_POST['con_password'];
            $sql ="INSERT INTO student (mail,pass,con_pass) VALUES ('$mail','$pass','$con_pass')";
            if(mysqli_query($con,$sql)){
               echo "<script>alert('new record inserted')</script>";
            }
            else{
                echo "error:".mysqli_error($con);
                mysqli_close($con);
            }
        }
        ?>
    </form>

</body>
</html>