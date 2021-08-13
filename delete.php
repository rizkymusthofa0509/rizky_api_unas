<?php
    include 'conn.php';
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $npm = $_POST['npm'];
    $faculty = $_POST['faculty']; 

    $open_data = mysqli_query($conn,"DELETE FROM tbl_mahasiswa  WHERE id='$id')")or die("ERROR");
    $data['status'] = 200;
    $data['message'] = "Success Delete data";
    $data['body']   = array();
    
    echo json_encode($data);
?>  