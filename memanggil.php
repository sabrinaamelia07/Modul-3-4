<?php
$nis =$_POST['nis'];
$namadepan =$_POST['namadepan'];
$namabelakang  =$_POST['namabelakang'];
$tempatlahir =$_POST['tempatlahir'];
$tanggallahir =$_POST['tanggallahir'];
$agama =$_POST['agama'];
$gender =$_POST['gender'];
$email =$_POST['email'];
$ig =$_POST['ig'];
$fb =$_POST['fb'];
$web =$_POST['web'];
$alamat =$_POST['alamat'];
$jurusan =$_POST['jurusan'];
$kelas = $_POST['kelas'];
$Username =$_POST['Username'];
$Password =$_POST['Password'];
$pesan =$_POST['pesan'];

if ($Username == $namadepan && $Password == $namabelakang){
    echo "<b>Login Berhasil</b>";
}else{

}
echo "<br>";
echo "NIS:".$nis;
echo "<br>";
echo "Nama Depan:".$namadepan;
echo "<br>";
echo "Nama Belakang:".$namabelakang;
echo "<br>";
echo "Tempat Lahir:".$tempatlahir;
echo "<br>";
echo "Tanggal Lahir:".$tanggallahir;
echo "<br>";
echo "Agama:".$agama;
echo "<br>";
echo "Jenis Kelamin:".$gender;
echo "<br>";
echo "Email:".$email;
echo "<br>";
echo "Instagram:".$ig;
echo "<br>";
echo "Website:".$web;
echo "<br>";
echo "Alamat:".$alamat;
echo "<br>";
echo "Jurusan:".$jurusan;
echo "<br>";
echo "Kelas:".$kelas;
echo "<br>";
echo "Pesan&Kesan:".$pesan;
?>
