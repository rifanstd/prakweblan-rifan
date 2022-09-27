<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <a href="/create" type="button" class="btn btn-success mb-4"><i class="fa fa-paper-plus"></i> Tambah Data Mahasiswa</a>
    <table class="table table-striped table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <th class="align-middle" scope="row"><?= $no; ?></th>
                    <td class="align-middle"><?= $mhs['npm']; ?></td>
                    <td class="align-middle"><?= $mhs['nama']; ?></td>
                    <td class="align-middle"><?= $mhs['alamat']; ?></td>
                    <td class="align-middle"><?= strip_tags($mhs['deskripsi']); ?></td>
                    <td class="align-middle"><?= $mhs['created_at']; ?></td>
                    <td class="align-middle">
                        <div class="d-flex justify-content-center">
                            <a href="/edit/<?= $mhs['id']; ?>" class="btn btn-warning mr-3"><i class="fa fa-pencil-pencil" aria-hidden="true"></i> Edit</a>
                            <form action="/delete/<?= $mhs['id']; ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $mhs['nama']; ?>?');"><i class="fa fa-trash"></i> Delete</button>
                            </form>

                        </div>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>