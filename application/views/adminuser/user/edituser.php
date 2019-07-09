<div class="container">
    <h3>Edit User</h3>
    <form method="POST" action="<?php echo base_url('index.php/superuser/edituser/').$id_user ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user ?>" >
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?php echo $nama ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" value="<?php echo $alamat ?>">
        </div>
            <div class="form-group">
            <label for="telepon">No. Telp</label>
            <input type="number" name="telepon" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon" value="<?php echo $telepon ?>">
        </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Baru">
        </div>
        <div class="form-group">
        <label for="level">Level</label>
        <select class="custom-select" id="level" name="level">
            <option value="" selected>Pilih Level User</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>
        </div>

    <center>  <button type="submit" class="btn btn-primary btn-block">Submit</button> </center>
    </form>
</div>