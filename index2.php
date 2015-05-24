<?php

// buat koneksi
$m = new MongoClient();

// pilih db
$db = $m->mydb;

// pilih koleksi
$collection = $db->judul;

// find semua record
$cursor = $collection->find();
?>


<html>

<head>



</head>


<body>

	<div>

		<table>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Judul</td>
			</tr>
	<?php
			foreach ($cursor as $document)
			{
				echo "<tr>";
				echo "<td>" . $document["no"] . "</td>";
				echo "<td>" . $document["nama"] . "</td>";
				echo "<td>" . $document["judul"] . "</td>";
				echo "</tr>";


			}


	?>		

			
		</table>

	</div>

	<div>


		<form action="post.php" method="post">

			No : <input type="text" name="no" /><br />
			Nama : <input type="text" name="nama" /><br />
			Judul : <input type="text" name="judul" /><br />
			<input type="submit" value="Simpan" />

		</form>	


	</div>


</body>


</html>