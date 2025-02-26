<?php
   include"koneksi1.php";
   $id= $_GET['id'];
   $data= mysqli_query($koneksi,"DELETE FROM tb_mhs where no_induk='$id'");

   if($data){
    header('location:dashboard.php');
}else{
    echo "maaf Proses Menghapus Data Tidak Berhasil";
}
?>