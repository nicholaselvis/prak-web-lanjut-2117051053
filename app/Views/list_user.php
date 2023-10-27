<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?php $id = 1; ?>


    <a href= "<?= base_url('user/create')?>">tambah data</a>

    <table class="table table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user){
            ?>
            <tr>
                <td><?= $id++ ?></td>
                <td><?= $user['nama']?></td>
                <td><?= $user['npm']?></td>
                <td><?= $user['nama_kelas']?></td>
                <td>
                    <a href="<?= base_url('user/'. $user['id'])?>">Detail</a>
                    <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>" type="button">Edit</a>
                    <form action="<?= base_url('user/' . $user['id']) ?>" method="post" style="display:inline-block">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

<?= $this->endsection() ?>