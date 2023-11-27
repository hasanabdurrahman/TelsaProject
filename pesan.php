<?php
    $conn = mysqli_connect("localhost", "root", "", "tracking") or die ("Database Error");
    $pesan = mysqli_real_escape_string($conn, $_POST['isi_pesan']); // mengambil pesan dari ajax
    $cek_data = mysqli_query($conn, "SELECT jawaban FROM  chatbot WHERE pertanyaan LIKE '%$pesan%' "); // CEK PERTANYAAN  KE DALAM TABEL
    if(mysqli_num_rows ($cek_data) > 0){
        // menghasilkan query ke dalam variabel data
        $data = mysqli_fetch_assoc($cek_data);
        //tampung jawban ke dalam variabel utk dikirim kembali ke ajax;
        $balasan = $data['jawaban'];
        echo $balasan;

    }else{
        echo "Maaf, saya belum menemukan jawaban yang kamu maksud" ;
    }


?>