<!DOCTYPE html>
<html>
<head>
	<title>PERHITUNGAN BPJS KETENAGAKERJAAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>PERHITUNGAN BPJS KETENAGAKERJAAN</h1>

	<table class="table1">
	<?php
    $a = 10000000;
    $b = 1500000;
    $c = $a + $b;
    $d = $c * 3.7/100;
    $e = $c * 2/100;
    $f = $c * 0.24/100;
    $g = $c * 0.3/100;
    $h = 8939700 * 2/100;
    $i = 8939700 * 1/100;

    ?>

		<tr>
			<th>No</th>
			<th>Komponen</th>
			<th>Nilai (Rp)</th>
		</tr>
		<tr>
			<td>1</td>
			<td><?php echo "Gaji Pokok"?></td>
			<td><?php echo "$a"?></td>
		</tr>
		<tr>
			<td>2</td>
			<td><?php echo "Tunjangan Jabatan"?></td>
			<td><?php echo "$b"?></td>
		</tr>
		<tr>
			<td>4</td>
			<td><?php echo "JHT Perusahaan"?></td>
			<td><?php echo "$d"?></td>
		</tr>
		<tr>
			<td>5</td>
			<td><?php echo "JHT Karyawan"?></td>
			<td><?php echo "$e"?></td>
		</tr>
		<tr>
			<td>6</td>
			<td><?php echo "JKK"?></td>
			<td><?php echo "$f"?></td>
		</tr>
		<tr>
			<td>7</td>
			<td><?php echo "JKM"?></td>
			<td><?php echo "$g"?></td>
		</tr>
		<tr>
			<td>8</td>
			<td><?php echo "JP Perusahaan"?></td>
			<td><?php echo "$h"?></td>
		</tr>
		<tr>
			<td>9</td>
			<td><?php echo "JP Karyawan"?></td>
			<td><?php echo "$i"?></td>
		</tr>
	</table>	
</body>
</html>
