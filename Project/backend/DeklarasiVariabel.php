<?php
    $konek=mysqli_connect("localhost","root","","duryudana");
    
    function showData(){
        global $konek;
        $semuadata=mysqli_query($konek,"SELECT username,nama,ketertarikan FROM member");
        $barisan = [];
        while ($perdata=mysqli_fetch_assoc($semuadata)){
            $barisan[]=$perdata;
        }
        return $barisan;};
        
    function shWithKey($username){
        global $konek;
        $primaryKey = mysqli_query($konek,"SELECT * FROM member where username='$username'");
        $mengacuKey=mysqli_fetch_assoc($primaryKey);
        return $mengacuKey;};
            
    function insertData(){};

    function updateData(){};

    function deleteData(){};
    
?>
<!-- mysqli_fetch_ ada 4
    row()       return array numeric, 
    assoc()     return array association,
    array()     return array double (row and assoc),
    object()    perbedaan pemanggilan,
-->