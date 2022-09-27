<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <form action="/update/<?= $mahasiswa['id']; ?>" method="post">
        <div class="row">
            <div class="col-6">

                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" class="form-control" id="npm" name="npm" placeholder="Input NPM Anda. Ex: 2017051019" value="<?= $mahasiswa['npm']; ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Anda. Ex: Rifan Setiadi" value="<?= $mahasiswa['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input alamat Anda. Ex: Tangerang" value="<?= $mahasiswa['alamat']; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi"><?= $mahasiswa['deskripsi']; ?></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>