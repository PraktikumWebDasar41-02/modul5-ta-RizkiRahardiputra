<?php
 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "d_modul5";
 $con     = new mysqli($hostname, $username, $pass, $db);

 if($con==false){

  die("koneksi gagal". $con->connect_error);
 }
  if (isset($_POST['submit'])) {
   $nim					=$_POST['nim'];
   $nama				=$_POST['nama'];
   $email				=$_POST['email'];
   $komen       =$_POST['komen'];
   $tanggal      =$_POST['tanggal'];
   $jeniskelamin		=$_POST['jeniskelamin'];
   $programstudi		=$_POST['programstudi'];
   $fakultas			=$_POST['fakultas'];
   


 
 $sql="INSERT INTO formmahasiswa(nim,nama,email,Komentar,tanggal,jeniskelamin,programstudi,fakultas) VALUES ('$nim','$nama','$email','$komen','$tanggal','$jeniskelamin','$programstudi','$fakultas')";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk<br>";
   }else{
    echo "Database Gagal <br>".$sql.mysqli_error($con);
   }
}
echo "DATA MAHASISWA <br>";
echo "NIM: $nim <br>";
echo "Nama: $nama<br>";
echo "Email: $email<br>";
echo "Komentar: $komen<br>";
echo "Tanggal: $tanggal<br>";
echo "Jenis Kelamin: $jeniskelamin<br>";
echo "Program Studi: $programstudi<br>";
echo "Fakultas: $fakultas<br>";

 ?>
