<html>
<head>
    <title>Form Login</title>
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
      <h3 align="center">FORM LOGIN</h3>
      <br>
      <form method = "POST" action="panggilform.php">
      <?php
          $Username =$_POST["username"];
          $Password =$_POST["password"];
          echo "<br>";

          if ($_POST["Submit"]=="LOGIN") {

          }
          if ($Username =="Sabrina Amelia"&& $Password=="100703") {
          echo "Login Berhasil🎉✨";
          }else {
          echo "Uuups😮,Maaf Username dan Password Salah";
          }
          ?>
          </form>
          </div>
          </div>
          </body>