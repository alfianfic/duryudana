<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="header cl">
        <div class="logo"><div class="foto"></div></div>
        <div class="keluar">Exit</div>
        <div class="tambah"><div class="foto"></div></div>
    </div>
    <div class="container">
        <h1>Tampilan Data</h1><br>
            <br>
        <?php 
            require'DeklarasiVariabel.php';
            // $semuadata=mysqli_query($konek,"SELECT * FROM member");
            // $data=mysqli_fetch_assoc($semuadata);
            // var_dump($data);
            $a=1;
            $datanih=insertdata();
            // while ($data=mysqli_fetch_assoc($semuadata)):
            foreach ($datanih as $data):
        ?>
            <h3><?=$a?>. username= <?= $data["username"]?>,
                nama= <?= $data["nama"]?>,
                ketertarikan= <?= $data["ketertarikan"]?></h3>
            <br>
        <?php 
            $a++;
            // endwhile;
            endforeach;
        ?>
    </div>
    <div class="container">
        <h1>LogIn</h1>
        <form action="">
            <div class="username">
                <input type="text" name="username" id="username" required>
                <label for="username">USERNAME</label>
            </div>
            <br>
            <br>
            <div class="username">
                <input type="password" name="password" id="password" required>
                <label for="password">PASSWORD</label>
                <span><a href="#">Lupa password?</a></a><span>
            </div>
            <br>
            <button type="submit" class="login"><a href="index.html">LogIn</a></button>
            <button type="submit" class="daftar"><a href="#">Daftar</a></button>
        </form>
    </div>
</body>
</html>
