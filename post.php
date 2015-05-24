<?php

if (isset($_REQUEST["no"]) && isset($_REQUEST["nama"]) && isset($_REQUEST["judul"])) {


	

	$no = $_REQUEST["no"];
	$nama = $_REQUEST["nama"];
	$judul = $_REQUEST["judul"];


	if (empty($no) && empty($nama) && empty($judul)) {

		header("Location: http://localhost/mongo/index2.php");

	} else {
// buat koneksi
	$m = new MongoClient();

// pilih db
	$db = $m->mydb;

// pilih koleksi
	$collection = $db->judul;

	$data = array( "no" => $no, "nama" => $nama, "judul" => $judul );

	$collection->insert($data);

	header("Location: http://localhost/mongo/index2.php");

	} 

	




}




?>