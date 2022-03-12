<?php
include "header.php";

?>
  <body>
  <?php 
    include "koneksi.php";
    $qry_get_transaksi=mysqli_query($conn,"update * from transaksi where id = '".$_GET['id']."'");
    $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
    ?>
          <form action="transaksi.php" method="GET">
            <input type="number" name="jumlah_paket" min="1">
            <input type="submit">
          </form>

          <form action="proses_transaksi.php" method="post">
          &emsp;User :
          <input type="text" name="id_user" value="<?=$_SESSION['id_user']?>" class="form-control">
          <br>
          &emsp;Pelanggan
          <select name="id_member" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member");
            while($data_member=mysqli_fetch_array($qry_member)){
                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama_member'].'</option>';    
            }
            ?>
        </select>
          <br>
          &emsp;Tanggal
          <input type="date" name="tgl" value="" class="form-control" placeholder="Masukkan Tanggal" required>
          <br>
          &emsp;Batas Waktu
          <input type="date" name="batas_waktu" value="" class="form-control" placeholder="Masukkan No Telepon" required>
          <br>
          &emsp;Tanggal Bayar
          <input type="date" name="tgl_bayar" value="" class="form-control" placeholder="Masukkan Username" required>
          <br>
          &emsp;Status Cucian
          <select name="status" class="form-control">
          <option></option>
          <option value="baru">Baru</option>
          <option value="proses">Dalam proses pencucian</option>
          <option value="selesai">Selesai</option>
          <option value="diambil">Cucian dapat diambil</option>
          </select>
          <br>
          &emsp;Status Pembayaran
          <select name="dibayar" class="form-control">
          <option></option>
          <option value="dibayar">Sudah dibayar</option>
          <option value="belum_dibayar">Belum Dibayar</option><br>
          </select>
          <?php for ($i = 0; $i < (isset($_GET['jumlah_paket']) ? $_GET['jumlah_paket'] : 1); $i++): ?>
          &emsp;Jenis Paket :
          <select name="id_paket[]" class="form-control">
          <option></option>
          <?php
            include "koneksi.php";
            $qry_paket=mysqli_query($conn,"select * from paket");
            while($data_paket=mysqli_fetch_array($qry_paket)){
                echo '<option value="'.$data_paket['id'].'">'.$data_paket['jenis'].'-'.$data_paket['harga'].'</option>';
            }
            ?>
            </select>
            
            &emsp;QTY :
            <input type="text" name="qty[]" value="" class="form-control">
          <?php endfor; ?>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <input type="submit" name="Transaksi" value="Transaksi" class="btn btn-primary">    
          </div>
          </div>
        
<?php
include "footer2.php"
?>
</form>
      
</body>
</html>