<div class="container">
<h3>Tambah User</h3>
    <form method="POST" action="<?php echo base_url('index.php/superuser/adduser') ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
        </div>
            <div class="form-group">
            <label for="telepon">No. Telp</label>
            <input type="number" name="telepon" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon">
        </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
        </div>
        <div class="form-group">
        <label for="level">Level</label>
        <select class="custom-select" id="level" name="level">
            <option selected>Pilih Level User</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>
        </div>

    <center>  <button type="submit" class="btn btn-primary btn-block">Submit</button> </center>
    </form>
</div>