<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>membuat form validasi dengan javascript</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
  <body>
    <center><h2>WWW.REZIHARDI.COM</h2></center>
	<div class="login">
		<form action="#" method="POST" onSubmit="validasi()">
			<div>
				<label>Nama Lengkap:</label>
				<input type="text" name="nama" id="nama" />
			</div>
			<div>
				<label>Email:</label>
				<input type="email" name="email" id="email" />
			</div>
			<div>
				<label>Alamat:</label>
				<textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
			</div>
			<div>
				<input type="submit" value="Daftar" class="tombol">
			</div>
		</form>
	</div>
  </body>
   <script type="text/javascript">
    function validasi(){
      var nama = document.getElementById("nama").value;
      var email = document.getElementById("email").value;
      var alamat = document.getElementById("alamat").value;
      if (nama != "" && email!="" && alamat !=""){
        return true;
      }else{
        alert('anda harus mengisi data secara lengkap !');
      }
    }

   </script>

</html>
