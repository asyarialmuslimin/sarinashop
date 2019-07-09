<div class="container">
<?php
if($alert == "error"){
    echo "<div class=\"alert alert-danger\" role=\"alert\">
    Data Invalid, Periksa Kembali Data yang Anda Masukkan
  </div>";
  }
?>
<h3>Kirim Produk</h3>
    <form method="POST" action="<?php echo base_url('index.php/superuser/kirimpesanan') ?>" enctype="multipart/form-data">
        <div class="form-group">
        <label for="id_pembayaran">ID Pembayaran</label>
        <select class="custom-select" id="id_pembayaran" name="id_pembayaran">
            <option value="" selected>Pilih ID Pembayaran</option>
            <?php
            
            foreach($id_pembayaran as $row){
                echo "<option value=\"".$row['id_pembayaran']."\">".$row['id_pembayaran']."</option>";
            }
            
            ?>
        </select>
        </div>
        <div class="form-group">
        <label for="ekspedisi">Nama Ekspedisi</label>
        <select class="custom-select" id="ekspedisi" name="ekspedisi">
            <option value="" selected>Pilih Nama Ekspedisi</option>
            <option value="JNE">JNE</option>
            <option value="POS Kilat">POS Kilat</option>
            <option value="J&T">J&T</option>
            <option value="JET Express">JET Express</option>
            <option value="Wahana">Wahana</option>
        </select>
        </div>
        <div class="form-group">
            <label for="resi">Nomor Resi</label>
            <input type="text" name="resi" class="form-control" id="resi" placeholder="Masukkan Nomor Resi">
        </div>

    <center>  <button type="submit" class="btn btn-primary btn-block">Submit</button> </center>
    </form>
</div>