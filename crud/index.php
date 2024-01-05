
<?php 
require 'funcation.php';

$siswa = mysqli_query($conn, "SELECT * FROM `siswa wikrama`");



?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Tabel</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
  }
  
  h2 {
    text-align: center;
    color: #333;
    
  }

  .button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border: 1px solid #3498db;
    color: #ffffff;
    background-color:white;
    color:black;
    border-radius: 5px;
    margin: 10px;
    transition:all .2s ease;
  }

  .button:hover {
    background-color: #2980b9;
    border-color: #2980b9;
  }

  table {
    width: 80%;
    border-collapse: collapse;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #3498db;
    color: #fff;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  td a {
    display: inline-block;
    margin-right: 5px;
  }
</style>
    </style>
</head>
<body>

    <h2>Data Orang berkunjung ke perpustakan</h2>
    <a class="button" href="index1.php">TAMBAHAN SISWA</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>aksi</th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Jurusan</th>
                <th>Rayon</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1?>
            <?php foreach($siswa as $row):?>
            <tr>
                <th><?= $i ?></th>
                <th>
                <a class="button" href="ubah.php?id=<?= $row["id"];?> ">UPDATE</a>
                    <a class="button" href="hapus.php?id=<?= $row["id"];?> ">DELETE</a>
                </th>
                <th><?= $row["nama"];?></th>
                <th><?= $row["nis"];?></th>
                <th><?= $row["jurusan"];?></th>
                <th><?= $row["rayon"];?></th>
            </tr>
            <?php $i++ ;?>
            <?php endforeach ;?>
        </tbody>
    </table>

</body>
</html>
