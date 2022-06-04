<!DOCTYPE html>
<html>
<head>
<title>Tugas Pertemuan 10</title>
</head>
<body>
	<div class="container">
		<div class="main">
			<?php
			include("koneksi.php");
			// query untuk menampilkan data
			$sql = 'SELECT * FROM pasien';
$result = mysqli_query($conn, $sql);
echo'<center><h1>Klinik_312010192</h1></center>';
echo '<h3> Tabel Pasien </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Pasien</th>
				<th>Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Umur</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_pasien'].'</td>
			<td>'.$row['nama_pasien'].'</td>
			<td>'.$row['jenis_kelamin'].'</td>
			<td>'.$row['umur'].'</td>
		</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

$sql = 'SELECT * FROM dokter';
$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Dokter </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Dokter</th>
				<th>Nama dokter</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_dokter'].'</td>
			<td>'.$row['nama_dokter'].'</td>
		</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

$sql = 'SELECT * FROM Berobat';
$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Berobat </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Berobat</th>
				<th>ID Pasien</th>
				<th>ID Dokter</th>
				<th>Tgl berobat</th>
				<th>Keluhan pasien</th>
				<th>Hasil diagnosa</th>
				<th>Penatalaksanaan</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_berobat'].'</td>
			<td>'.$row['id_pasien'].'</td>
			<td>'.$row['id_dokter'].'</td>
			<td>'.$row['tgl_berobat'].'</td>
			<td>'.$row['keluhan_pasien'].'</td>
			<td>'.$row['hasil_diagnosa'].'</td>
			<td>'.$row['penatalaksanaan'].'</td>
		</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

$sql = 'SELECT * FROM resep_obat';
$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Resep_Obat </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID resep</th>
				<th>ID berobat</th>
				<th>ID obat</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_resep'].'</td>
			<td>'.$row['id_berobat'].'</td>
			<td>'.$row['id_obat'].'</td>
		</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

$sql = 'SELECT * FROM obat';
$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Obat </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Obat</th>
				<th>Nama Obat</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_obat'].'</td>
			<td>'.$row['nama_obat'].'</td>
		</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

mysqli_free_result($result);

mysqli_close($conn);
?>
		</div>
	</div>
</body>
</html>