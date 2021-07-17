<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../indek.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 <table>
            <tr>
                <td>Nama lengkap</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nomer HP</td>
                <td><input type="text" name="nohap"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>jenis alokasi</td>
                <td>
                    <select name="posko">
                        <option value="posko1">alat pelindung diri</option>
                        <option value="posko2">logistik mahasiswa</option>
                        <option value="posko3">bantuan kuota</option>
                    </select>
                </td>
            </tr>    
			<tr>
                <td>jumlah dana</td>
                <td><input type="text" name="email"></td>
            </tr>			
            <td></td>
            <td><input type="submit" value="SIMPAN" name="tambah" href="indek.php"></td>
            </tr>            
        </table>
	<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>
 
 
</body>
</html>