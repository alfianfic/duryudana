<!DOCTYPE html>
<html lang="en">
    <?php session_start();
        if(!isset($_SESSION["username"])){ header("location: LoginNSession.php");}
    ?>
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
        <a href="logout.php"><div class="keluar">Exit</div></a>
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
            $datanih=showData();
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
        <?php 
            echo "<h4>test key</h4>";
            // $primaryKey = mysqli_query($konek,"SELECT * FROM member where username='member1'");
            // echo($primaryKey); 
            // $mengacuKey=mysqli_fetch_assoc($primaryKey);
            $mengacuKey=shWithKey('member1');
            echo "Nama = ",$mengacuKey['nama'],", ";
            echo "Ketertarikan = ",$mengacuKey['ketertarikan'];
        ?>
    </div>
    <div class="container">
        <h1>Daftar</h1>
        <?php 
            if (isset($_POST["daftar"])){
            $ok=insertData();
            var_dump($ok);
            keberhasilan($ok);};
            // var_dump(isset($_POST["daftar"]));
            // if (isset($_POST["daftar"])){
            // var_dump($_POST["username"]);}
            // echo($_POST["username"]);
            // echo($_POST["nama"]);
            // echo($_POST["password"]);
            // echo($_POST["ketertarikan"]);
            // $i1=($_POST["username"]);
            // $i2=($_POST["nama"]);
            // $i3=($_POST["password"]);
            // $i4=($_POST["ketertarikan"]);
            // mysqli_query($konek,"INSERT INTO member VALUES('$i1','$i2','$i3','$i4')");
        ?>
        <form action="" method="post">
            <div class="username">
                <input type="text" name="username" id="username" required>
                <label for="username">USERNAME</label>
            </div>
            <br>
            <br>
            <div class="username">
                <input type="text" name="ketertarikan" id="ketertarikan" required>
                <label for="name">KETERTARIKAN</label>
            </div>
            <br>
            <br>
            <div class="username">
                <input type="text" name="nama" id="nama" required>
                <label for="nama">NAMA</label>
            </div>
            <br>
            <br>
            <div class="username">
                <input type="password" name="password" id="password" required>
                <label for="password">PASSWORD</label>
                <!-- <span><a href="#">Lupa password?</a></a><span> -->
            </div>
            <br>
            <button type="submit" class="login" name="daftar"><a href="percobaan.php">Daftar</a></button>
            <!-- <button type="submit" class="daftar"><a href="#">Daftar</a></button> -->
        </form>
    </div>
    <div class="container">
        <h1>LogIn</h1>
        <form action="">
            <div class="username">
                <?php
                $sds=shWithKey($_SESSION["username"]); 
                echo$sds["nama"];?><br>
            <a href="https://daftarbeasiswa.com/beasiswa-anak-bangsa-untuk-pelajar-dan-mahasiswa/">Link1</a></div>
                <!-- <input type="text" name="username" id="username" required>
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
            <button type="submit" class="login" name="login"><a href="index.html">LogIn</a></button>
            <button type="submit" class="daftar"><a href="#">Daftar</a></button> -->
        </form>
    </div>
</body>
</html>
