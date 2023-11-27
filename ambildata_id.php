<?php
include "connect.php";
$Q = mysqli_query($conn, "SELECT * FROM tb_distributors where id=" . $id) or die($conn);
if ($Q) {
        $posts = array();
        if (mysqli_num_rows($Q)) {
                while ($post = mysqli_fetch_assoc($Q)) {
                        $posts[] = $post;
                }
        }
        $data = json_encode(array('results'=>$posts));
}
