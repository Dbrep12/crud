<html>
<head>
 <title>dashboard</title>
 <link rel="stylesheet" href="style.css">
 <style>

 </style>
</head>
<body style="font-family:arial">
 <center><h2> Tampilan Barang <br /></h2></center>
 <hr />
    <div class="img">
           <img src="letris.png" alt="letris">
        </div>
 <a class="a" href="tambah.php" >+ Tambah Data Baru</a><br /><br />
 <b>Data Barang</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Kode</th>
   <th>Nama</th>
   <th>Harga</th>
   <th>Stok</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from barangg");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $harga_barang = $r['harga_barang'];
   $stok_barang = $r['stok_barang'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $id_barang; ?></td>
   <td><?php echo $nama_barang; ?></td>
   <td><?php echo $harga_barang; ?></td>
   <td><?php echo $stok_barang; ?></td>
  <td align=right width=70px><a href="edit.php?id=<?php echo $id_barang;?>">Edit</a></td>
  <td align=right width=70px><a href="hapus.php?id=<?php echo $id_barang;?>">Hapus</a></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
</body>
</html>