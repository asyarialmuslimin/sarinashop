<div class="container">
<h3>Tambah Produk</h3>
    <form method="POST" action="<?php echo base_url('index.php/superuser/newproduk') ?>" enctype="multipart/form-data">
        <input type="hidden" name="id_produk" value="<?php echo uniqid() ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
        <label for="gambar">Gambar</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="gambar" name="gambar">
            <label class="custom-file-label" for="gambar">Pilih Gambar Produk</label>
        </div>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" placeholder="Masukkan Harga Produk">
        </div>
        <div class="form-group">
            <label for="diskon">Diskon</label>
            <input type="number" name="diskon" class="form-control" id="diskon" placeholder="Masukkan Diskon Produk">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" id="stok" placeholder="Masukkan Stok Produk">
        </div>
        <div class="form-group">
        <label for="kategori">Kategori</label>
        <select class="custom-select" id="kategori" name="kategori">
            <option selected>Pilih Kategori Produk</option>
            <option value="Ruang Tamu">Ruang Tamu</option>
            <option value="Ruang Keluarga">Ruang Keluarga</option>
            <option value="Kamar Tidur">Kamar Tidur</option>
            <option value="Dapur">Dapur</option>
            <option value="Lain lain">Lain lain</option>
        </select>
        </div>

    <center>  <button type="submit" class="btn btn-primary btn-block">Submit</button> </center>
    </form>
</div>