<?php
    include 'conn.php';
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $npm = $_POST['npm'];
    $faculty = $_POST['faculty']; 

    $open_data = mysqli_query($conn,"UPDATE tbl_mahasiswa SET full_name='$ful_name', npm='$npm', faculty='$faculty' WHERE id='$id')")or die("ERROR");
    $data['status'] = 200;
    $data['message'] = "Success Update data";
    $data['body']   = array();
    
    echo json_encode($data);
?>  