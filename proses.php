<?php

echo "<h3> HOBI YANG TELAH DIPILIH: </h3>";
$hobi = $_POST["hobi"];
	foreach($hobi as $key => $value){
	echo "- $value <br>";    
}


$file = $_FILES['foto'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "upload/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "<br> <br>";
echo "<h3> FOTO YANG TELAH ANDA PILIH : <h3>";
?>
<img src="upload/<?php echo $nama_file; ?>" width="500px">
<br> <br>
<a href="formawal.html" style="text-decoration: none; color: red;"> Reset Data </a>




