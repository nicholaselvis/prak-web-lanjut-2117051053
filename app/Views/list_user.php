<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?php $id = 1; ?>

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
                <td><?php echo $id++ ?></td>
                <td><?= $user['nama']?></td>
                <td><?= $user['npm']?></td>
                <td><?= $user['nama_kelas']?></td>
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

<?= $this->endsection() ?>