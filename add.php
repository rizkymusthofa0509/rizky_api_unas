<?php
    include 'conn.php';
    $full_name = $_POST['full_name'];
    $npm = $_POST['npm'];
    $faculty = $_POST['faculty']; 

    $open_data = mysqli_query($conn,"INSERT INTO tbl_mahasiswa VALUES(NULL,'$ful_name','$npm','$faculty')")or die("ERROR");
    $data['status'] = 200;
    $data['message'] = "Success Insert data";
    $data['body']   = array();
    
    echo json_encode($data);
?>  