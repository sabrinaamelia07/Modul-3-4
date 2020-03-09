<html>
<head>
    <title>Daftar Siswa</title>
    <style type="text/css">
        #hasil{width:500px;margin:0 auto;padding:5px;font-weight:bold;color:#f00;}
        body{padding:0;margin:0;font-family:arial;font-size:12px;}
        #main-wrapper{border:3px double #faa800;padding:5px;width:550px;margin:20px auto 0;}
        #main{text-align:left;padding:5px;background:#e8eef0;}
        table{font-size:12px;width:450px;}
        #prn{border:1px solid #b3ccf7;background:#c3d9ff;cursor:pointer;padding:2px 24px;}
        h1{font-size:18px;font-weight:bold;padding:10px 0;text-align:center;}
        #efri{font-size:11px;padding:5px 0 0;color:#0000ff;text-align:center;}red{font-weight:bold;color:#f00;}
        body{
            background: linear-gradient(to right,aqua,paleturquoise,lavender,pink,papayawhip);
        }
    </style>
</head>
<body>
<div id="main-wrapper">
    <div id="main">
        <h1><b>Daftar Siswa</b></h1>
        </br>
        <form method="POST" action="memanggil.php">
            <table>
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="nis" required/></td>
                    </tr>
                    <tr>
                        <td>Nama Depan</td>
                        <td><input type="text" name="namadepan" required/></td>
                        </tr>
                        <td>Nama Belakang</td>
                        <td><input type="text" name="namabelakang" required/></td>
                        </tr>
                        <td>Tempat Lahir</td>
                        <td><input type="text" name="tempatlahir" required/></td>
                        </tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" name="tanggallahir" required/></td>
                        </tr>
                        <td>Agama</td>
                        <td><input type="text" name="agama" required/></td>
                        </tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="gender" value="L">Laki-Laki
                            <input type="radio" name="gender" value="P">Perempuan
                            </td>
                            </tr>
                        <td>Email</td>
                        <td><input type="text" name="email" placeholder="@gmail.com"required/></td>
                        </tr>
                        <td>Telepon</td>
                        <td><input type="text" name="telepon" required/></td>
                        </tr>
                        <td>Instagram</td>
                        <td><input type="text" name="ig" required/></td>
                        </tr>
                        <td>Facebook</td>
                        <td><input type="text" name="fb" required/></td>
                        </tr>
                        <td>Website</td>
                        <td><input type="text" name="web" placeholder="http://" required/></td>
                        </tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" rows="5" cols="25"
                        placeholder="Alamat Lengkap" required/></textarea></td>
                        </tr>
                        <tr>
                        <td>Jurusan:</td>
                        <td><select name="jurusan">
                            <option value="">Pilih Jurusan</option>
                            <option value="RPL">--Rekayasa Perangkat Lunak--</option>
                            <option value="TKJ">--Teknik Komputer Jaringan--</option>
                            </select></td>
                            </tr>
                         <tr>
                         <td>Kelas:</td>
                        <td><select name="kelas">
                            <option value="">Pilih Kelas</option>
                            <option value="">10 RPL</option>
                            <option value="">10 TKJ</option>
                            <option value="">11 RPL</option>
                            <option value="">11 TKJ</option>
                            <option value="">12 RPL</option>
                            <option value="">12 TKJ</option>
                            </select></td>
                            </tr>
                        <tr>
                            <td>Username👩👨</td>
                            <td><input type="text" name="Username" required/></td>
                            </tr>
                       <tr>
                        <td>Password🔑</td>
                        <td><input type="password" name="Password" required/></td>
                        </tr>
                        <tr>
                            <td>Pesan💻</td>
                            <td><textarea name="pesan" rows="5" cols="25"
                            placeholder="Pesan&Kesan" required/></textarea></td>
                        </tr>
                        <tr>
                        <td>
                        <label><br><br>
                            <input type="submit" name="Submit" value="Submit" id="prn">
                        </label>
                        <label>
                            <input type="reset" name="reset" value="BATAL" id="prn">
                        </label>
                        </script>
<!-- amot footer -->
<div class="col-12 footer"> &copy; Copyright By Sabrinaam </div>
</div>

</body>
</html>

                            

