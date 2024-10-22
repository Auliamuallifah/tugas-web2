<?php 
if (isset($_POST['Input'])) {
	$npm = $_POST['npm'];
	$nama = $_POST['nama'];
	$nilai = $_POST['nilai'];

	echo "<br>";
	echo "NPM Anda : <b>$npm</b><br>";
	echo "Nama Anda : <b>$nama</b><br>";
	echo "Nilai Anda : <b>$nilai</b><br>";

	if (($nilai >=0)&&($nilai <60 )) {
		echo "Anda Tidak Lulus<br>";
	}
	elseif (($nilai >=60)&&($nilai <=100)) {
		echo "Selamat Anda Lulus<br>";
	}
	else {
		echo "Tidak Valid<br>";
	}

if (($nilai >=0)&&($nilai <50)) {
	$grade = "<b>E</b>";
}
elseif (($nilai >=50)&&($nilai <60)) {
	$grade = "<b>D</b>";
}
elseif (($nilai >=60)&&($nilai <75)) {
	$grade = "<b>C</b>";
}
elseif (($nilai >=75)&&($nilai <85)) {
	$grade = "<b>B</b>";
}
elseif (($nilai >=85)&&($nilai <=100)) {
	$grade = "<b>A</b>";
}
else {
	$grade = "Nilai Tidak Valid";
}
echo "Grade <b>$grade</b>";
}

 ?>