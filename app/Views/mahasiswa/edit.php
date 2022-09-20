<div class="container">
    <form action="/update/<?= $id; ?>" method="post">
        <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm" placeholder="Input NPM Anda. Ex: 2017051019" value="<?= $npm; ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Anda. Ex: Rifan Setiadi" value="<?= $nama; ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input alamat Anda. Ex: Tangerang" value="<?= $alamat; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>