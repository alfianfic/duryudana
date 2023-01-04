<?php
    $konek=mysqli_connect("localhost","root","","duryudana");
    //1 Read
    function showData(){
        global $konek;
        $semuadata=mysqli_query($konek,"SELECT username,nama,ketertarikan FROM member");
        $barisan = [];
        while ($perdata=mysqli_fetch_assoc($semuadata)){
            $barisan[]=$perdata;}
        return $barisan;};
        
    function shWithKey($username){
        global $konek;
        $primaryKey = mysqli_query($konek,"SELECT * FROM member where username='$username'");
        $mengacuKey=mysqli_fetch_assoc($primaryKey);
        return $mengacuKey;};

    //2 Create        
    function insertData(){
        if (isset($_POST["username"])){
            if (isset($_POST["password"])){
                if (isset($_POST["nama"])){
                    if (isset($_POST["daftar"])){
                        $i1=htmlspecialchars(($_POST["username"]));
                        $i2=htmlspecialchars(($_POST["nama"]));
                        $i3=htmlspecialchars(($_POST["password"]));
                        $i4=htmlspecialchars(($_POST["ketertarikan"]));
                        $perintahtambah="INSERT INTO member VALUES
                            ('$i1','$i2','$i3','$i4')";
                            global $konek;
                            mysqli_query($konek,$perintahtambah);
                    }
                }
            }
        }
        return mysqli_affected_rows($konek); 
        // echo"<script>alert('Registrasi Berhasil');
        // documen.location.href='percobaan.php';</script>";
    };
    function keberhasilan($k){//lanjutan registrasi
        if($k>0){
            echo"<script>alert('Registrasi Berhasil');
            documen.location.href='percobaan.php';</script>";
        }else{
            echo"<script>alert('Registrasi Gagal');
            documen.location.href='percobaan.php';</script>";
        }
    };

    //3 Update        
    function updateData(){};

    //4 Delete        
    function deleteData(){};
    
    //5 Login
    function loginAkun(){};        

?>
<!-- mysqli_fetch_ ada 4
    row()       return array numeric, 
    assoc()     return array association,
    array()     return array double (row and assoc),
    object()    perbedaan pemanggilan,
-->