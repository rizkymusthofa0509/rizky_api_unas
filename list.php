<?php
    include 'conn.php';
    $open_data = mysqli_query($conn,"SELECT * FROM tbl_mahasiswa")or die("ERROR");
    $data['status'] = 200;
    $data['message'] = "Success Request data";
    $data['body']   = array();
    while ($list = mysqli_fetch_array($open_data)) {
        $push['id'] = $list['id'];
        $push['full_name'] = $list['full_name'];
        $push['npm'] = $list['npm'];
        $push['created_at'] = $list['created_at'];
        $push['updated_at'] = $list['updated_at'];
        array_push($data['body'], $push);
    }
    echo json_encode($data);
?>  