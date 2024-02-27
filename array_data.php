<?php
    $daftarBuah = [
     [
          "id" => 001,
          "nama" => "Strawberry",
          "warna" => "Pink",
          "stok" => 20,
          "harga" => 35000,
          "deskripsi" => "Strawberry ini cocok untuk salad buah"
        ],
        [
            "id" => 002,
            "nama" => "Anggur",
            "warna" => "Ungu",
            "stok" => 25,
            "harga" = 30000,
            "deskripsi" => "Anggur cocok untuk cemilan buah"
        ],
        [
            "id" => 003,
            "nama" => "Leci",
            "warna" => "Putih",
            "stok" => 15,
            "harga" => 25000,
            "deskripsi" => "Leci kecil kecil juga cocok untuk cemilan buah"
        ]
    ]

?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Array Table Buah</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
      <table class="table table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Warna</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($fruits as $fruit){
              echo "<tr>";
              echo "<td>". $fruit["id"];
              echo "<td>". $fruit["nama"];
              echo "<td>". $fruit["warna"];
              echo "<td>". $fruit["stok"];
              echo "<td>". $fruit["harga"];
              echo "<td>". $fruit["deskripsi"];
          }
          ?>
        </tbody>
      </table>
    </div>
  </body>
  </html>