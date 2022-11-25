<?php
    $konek=mysqli_connect("localhost","root","","duryudana");
    
    function insertData(){
        global $konek;
        $semuadata=mysqli_query($konek,"SELECT * FROM member");
        $barisan = [];
        while ($perdata=mysqli_fetch_assoc($semuadata)){
            $barisan[]=$perdata;
        }
        return $barisan;};

    function showData(){};

    function updateData(){};

    function deleteData(){};
    
?>
<!-- mysqli_fetch_ ada 4
    row()       return array numeric, 
    assoc()     return array association,
    array()     return array double (row and assoc),
    object()    perbedaan pemanggilan,
-->