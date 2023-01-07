<h1>LogIn</h1>
<?php 
    session_start();
    // echo($_SESSION["username"]);
    if(isset($_SESSION["username"])){ header("location: percobaan.php");}
    $konek=mysqli_connect("localhost","root","","duryudana");
    if(isset($_POST["login"])){
        $user=$_POST["username"];
        $password=$_POST["password"];
        $primaryKey =mysqli_fetch_assoc(mysqli_query($konek,"SELECT * FROM member where username='$user'")); 
        var_dump($_POST);echo("<br>"); // var_dump($primaryKey);
        var_dump($_SESSION);echo("<br>"); // var_dump($primaryKey);
            if(!($primaryKey==null)){
                if($primaryKey["password"]==$password){
                    $_SESSION["username"]=$user;
                    echo"<script>alert('Login Berhasil');
                    document.location.href='percobaan.php';</script>";
                }
                else{
                    echo"<script>alert('Password anda salah');
                    document.location.href='LoginNSession.php';</script>";
                }
            }
            if($primaryKey==null)
                    {
                        echo"<hr>";
                        echo"user salah";
                        echo"<hr>";
                        // "<script>alert('Username anda salah');
                        // document.location.href='LoginNSession.php';</script>";
                    } 
    }
?>
        <form action="" method="post">
            <div class="username">
                <input type="text" name="username" required>
                <label for="username">USERNAME</label>
            </div>
            <br>
            <div class="username">
                <input type="password" name="password" required>
                <label for="password">PASSWORD</label>
                <!-- <span><a href="#">Lupa password?</a></a><span> -->
            </div>
            <br>
            <button type="submit" class="login" name="login">LogIn</button>
            <!-- <button type="submit" class="daftar"><a href="#">Daftar</a></button> -->
        </form>