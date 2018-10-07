<form action="koneksi.php " method="post">
<center><h1>Aplikasi Pendaftaran Mahasiswa</h1>
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" placeholder="NIM" maxlength="10"></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Nama" maxlength="20"></td>
		</tr>

		<tr>
			<td>E-mail</td>
			<td><input type="E-mail" name="email" placeholder="example@gmail.com"></td>
		</tr>

   <tr> 
    <td>KOMENTAR : <br><textarea name="komen" placeholder="Isikan Komentar"></textarea><br></td>
    </tr>

     <tr> 
    <td>Tanggal Lahir : <br><input type="date" name="tanggal"><br></td>
    </tr>

		<tr>
			<td>JenisKelamin</td>
			<td><input type="radio" name="jeniskelamin" value="laki- laki">Laki-Laki<br>
				<input type="radio" name="jeniskelamin" value="perempuan">Perempuan<br>
		</tr>

		<tr>	
			<td>ProgramStudi</td>
			<td><select name="programstudi" id="programstudi">
            <option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>    
            <option value="S1 Administrasi Bisnis">S1 Administrasi Bisnis</option>    
					 <option value="D3 Teknologi Telekomunikasi">D3 Teknologi Telekomunikasi</option>
  					<option value="D3 Rekayasa Perangkat Lunak Aplikasi">D3 Rekayasa Perangkat Lunak Aplikasi</option>
  					<option value="D3 Sistem Informasi Akuntansi">D3 Sistem Informasi Akuntansi</option>
  					<option value="D3 Teknologi Komputer">D3 Teknologi Komputer</option>
  					<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
  					<option value="D3 Perhotelan">D3 Perhotelan</option>
  					<option value="S1 Terapan Teknologi Rekayasa Multimedia">S1 Terapan Teknologi Rekayasa Multimedia</option>
            <option value="S1 DKV">S1 DKV</option>			
            <option value="S1 D. Interior">S1 D. Interior</option>      
            <option value="S1 D. Produk ">S1 D. Produk</option>
            <option value="S1 Seni Rupa">S1 Seni Rupa</option>
            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option> 
            <option value="S1 Informatika">S1 Informatika</option> 
            <option value="S1 T.Telekomunikasi">S1 T.Telekomunikasi</option> 
            <option value="S1 T.Industri">S1 T.Industri</option>      
            <option value="S1 T.Elektro">S1 T.Elektro</option>      
  			</select>
  		</tr>

  		<tr>
  			<td>Fakultas</td>
			<td><select name="fakultas" id="fakultas">
					<option value="FIT">FIT</option>
  					<option value="FKB">FKB</option>
  					<option value="FIK">FIK</option>
  					<option value="FTE">FTE</option>
  					<option value="FEB">FEB</option>	
  			</select>
  		</tr>
  		
			<td ><input type="submit" name="submit" value="Login"></td>
	</table>
</center>

<?php
if (isset($_POST['submit'])) {
  $nim					=$_POST['nim'];
   $nama				=$_POST['nama'];
   $email				=$_POST['email'];
   $komen        =$_POST['komen'];
   $tanggal       =$_POST['tanggal'];
   $jeniskelamin		=$_POST['jeniskelamin'];
   $programstudi		=$_POST['programstudi'];
   $fakultas			=$_POST['fakultas'];
   
   $Error = array();
   if (strlen($_POST['nim'])<=10) {
    $error['nim']=="nim harus 10";
   }if(strlen($_POST['nama'])<=20){
    $error['nama']=="nama harus 20";
   }if (empty($email)) {
    $error['email']=="email tidak boleh kosong";
   }if (empty($jeniskelamin)) {
    $error['jeniskelamin']=="jeniskelamin tidak boleh kosong";
   }if (empty($tanggal)) {
    $error['tanggal']=="tanggal tidak boleh kosong";
   }if (strlen($_POST['komen'])<=5) {
    $error['komen']=="komen harus 5";
   }if (empty($programstudi)) {
    $error['programstudi']=="programstudi tidak boleh kosong";
   }if (empty($fakultas)) {
    $error['fakultas']=="fakultas tidak boleh kosong";
   }
}
?>
