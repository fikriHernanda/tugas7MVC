<?php
class formView{

public function tampilFormAwal(){


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="http://localhost/tugas7MVC/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://localhost/tugas7MVC/styles.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript"> document.getElementsByTagName('email').innerText=result; </script>
</head>
<body style="background-image: url('http://localhost/tugasMVC/class/pattern.jpg');">
<div  class="atas col-md-12" ><h3 style="text-align: center;">Form Pengajuan Komplain Pengembalian Barang</h3></div>

<div class="container" style=" padding:10px; box-shadow: 0px 0px 50px 5px #888888; background-color: white; ">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<br>
			<form action="getFormIsi" class="form-horizontal" method="post"
        enctype="multipart/form-data" >
				<div class="form-group">
	   				 <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
	    			 <div class="col-sm-10">
	      				<input type="email" class="form-control" id="inputEmail3" placeholder="jane@example.com" name="email" required>
	      				
	   	 			 </div>
	 	 		</div>
	 	 		<div class="form-group">
	 	 			<label for="exampleInputName2" class="col-sm-2 control-label">Nama Lengkap</label>
   					 <div class="col-sm-10">
     					 <input type="text" class="form-control" id="exampleInputName2" placeholder="Nama Lengkap" name="nama" required>
    				 </div>
	 	 		</div>
	 	 		<div class="form-group">
	 	 			<label for="exampleInputName2" class="col-md-2 control-label">Nomor Order</label>
   					 <div class="col-sm-10">
     					<input class="form-control " id="disabledInput" type="text" value="0111022ABCD" name="order">
    				 </div>
	 	 		</div>
	 	 		<p>Alasan Pengembalian :</p>
	 	 		<div class="checkbox">
  					<label>
    						<input type="checkbox" name="check[]" value="Barang tidak sesuai foto">
    			Barang Tidak Sesuai Foto
  					</label>
				</div>
				<div class="checkbox">
  					<label>
    						<input type="checkbox" name="check[]" value="Saat diterima sudah rusak" >
    			Saat diterima sudah rusak
  					</label>
				</div>
				<br>
				<p>	Pilihan Pengembalian : </p>
				<div class="radio">
  					<label>
    						<input type="radio" name="optionsRadios" id="optionsRadios1" value="Pengembalian Uang" required >
   								Pengembalian Uang
  					</label>
				</div>
				<div class="radio">
  					<label>
    						<input type="radio" name="optionsRadios" id="optionsRadios2" value="Penukaran Barang baru" required>
    						Penukaran Barang baru
  					</label>
				</div>
				<br>
				<p>Deskripsi barang yang diterima :</p>
				<textarea  type="text" name="deskripsi" class="form-control" rows="2"></textarea>
				<br>
				<p>Kurir Untuk Melakukan Pengembalian Barang :</p>
				<select name="Kurir" class="form-control">
  				<option value="JNE">JNE</option>
  				<option Value="J&T">J&T</option>
  				<option Value="Wahana">Wahana</option>
				</select>
				<br>
				<div class="form-group">
    				<label for="exampleInputFile">File input</label>
   						<input type="file" id="exampleInputFile" name="upload">
    						<p class="help-block">Gambar Produk yang diterima.</p>
  				</div>
  				  <button name="kirim" style="float: right;" type="submit" class="btn btn-default" >Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<?php
}
public function tampilisi($variabel,$barangRandom){
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://localhost/tugas7MVC/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/tugas7MVC/styles.css">
        <script src="js/bootstrap.js"></script>
</head>

<body style="background-image: url('http://localhost/tugasMVC/class/pattern.jpg');" >
<div class=" atas col-md-12">
	<h3 style="text-align: center;">Form Pengajuan Komplain Pengembalian Barang</h3>
</div>
<br>

  <div class="container" style="background-color: white;   padding:10px; box-shadow: 0px 0px 50px 5px #888888;">
	 <div class="row">
		<table class=" table table-hover">			
  			<tr>
  				<td style="width: 200px;">Nama</td>
  				<td style="width: 50px;"> : </td>
				  <td><?php echo $variabel['nama'];?></td>
  			</tr>
  			<tr>
  				<td>Email </td>
  				<td> : </td>
				  <td><?php  echo $variabel['email']; ?></td>
  			</tr>
  			<tr>
  				<td>Nomor Order </td>
  				<td> : </td>
  				<td><?php  echo $variabel['order'];?></td>
			  </tr>
			  <tr>
  				<td>Nama Barang </td>
  				<td> : </td>
  				<td><?php  echo $barangRandom;?></td>
  			</tr>
  			<tr>
  				<td> Alasan Pengembalian </td>
  				<td> : </td>
  				<td>
  					<ul>
						  <?php if(isset($variabel['check'])){
							  foreach ($variabel['check'] as $key ){
							 echo "<li>".$key."</li>";
						  } 
						 } else{
							  echo "<li> tidak ada alasan</li>";
						 }
						
						  ?>

  					</ul> 
  				</td>
  			</tr>
  			<tr>
  				<td> Pilihan Pengembalian</td>
  				<td> : </td>
  				<td> <?php echo $variabel['optonsRadios']; ?> </td>

  			</tr>
  			<tr>
  				<td> Deskripsi Barang diterima :</td>
  				<td> : </td>
  				<td><?php  echo $variabel['deskripsi'];?></td>
  			</tr>
  			<tr>
  				<td>Pilihan Kurir </td> 
  				<td> : </td>
  				<td> <?php echo $variabel['kurir'];?></td>
  			</tr>
  			<tr>
  				<td>Gambar Barang</td>
  				<td>:</td>

  				<td> <?php $gambar = $_FILES['upload']['name'];
   						 $tmp  = $_FILES['upload']['tmp_name'];
    					move_uploaded_file($tmp, "./".$gambar); ?>
				  <img id="gambar" src="<?php echo $gambar; ?>"></td>
  				
  			</tr>
	 	 </table>
	 </div>
  </div>
</body>
</html>

<?php
}

}
?>