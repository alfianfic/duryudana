<?php 
    $konek=mysqli_connect("localhost","root","","duryudana");
    if (isset($_GET["hal"])) {
        # code...
        $halrn=$_GET["hal"];
    }
    else{
        $halrn=1;
    }
    $mulai=($halrn-1)*2;
    $t=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM member"));
    $t=ceil($t/2);
    
    if ($halrn>1) {
        # code...
        echo'<a href="?hal=',$halrn-1,'">',"&lt&lt",'</a>'," ";
    }
    for ($i=1; $i <= $t; $i++) { 
        # code...
        echo'<a href="?hal=',$i,'">',$i,'</a>'," ";
    }
    if ($halrn<$t) {
        # code...
        echo'<a href="?hal=',$halrn+1,'">',"&gt&gt",'</a>'," ";
    }
    $data=mysqli_query($konek,
                        // "SELECT * 
                        "SELECT username,nama,ketertarikan 
                        FROM member 
                        LIMIT $mulai,2
                        ");
        $a=1;
        while (
            $perdata=mysqli_fetch_assoc($data)
            ){
            $barisan[]=$perdata;
        }
            foreach ($barisan as $KEY => $data):
                ?>
                    <h3><?=$a?>. username= <?= $data["username"]?>,
                        nama= <?= $data["nama"]?>,
                        ketertarikan= <?= $data["ketertarikan"]?></h3>
                    <br>
                <?php 
                    $a++;
                    var_dump($KEY);
                    echo"<br>";
                    var_dump($data);
                    endforeach;