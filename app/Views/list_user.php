<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?php $id = 1; ?>

<nav class="navbar">
        <div><img src="<?= base_url("assets/img/profil.jpg")?>" alt="" style = "width: 50px; border-radius: 50%";> Nicholas Elvis</div>
        <ul class="nav-links">
            <li><a href="<?= base_url('user')?>">Data Mahasiswa</a></li>
            <li><a href="<?= base_url('user/create')?>">Tambah Data</a></li>
            <li><a href="<?= base_url('kelas/create')?>">Tambah Kelas</a></li>
            <li><a href="<?= base_url('kelas')?>">Data Kelas</a></li>
        </ul>
</nav>
    <div class="text-cantik">Tabel Data Mahasiswa</div>
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
                    <a href="<?= base_url('user/'. $user['id'])?>" class="btn btn-info">Detail</a>
                    <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>" class="btn btn-secondary">Edit</a>
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