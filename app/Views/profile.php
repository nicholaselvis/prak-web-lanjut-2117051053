<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<nav class="navbar">
        <div><img src="<?= base_url("assets/img/profil.jpg")?>" alt="" style = "width: 50px; border-radius: 50%";> Nicholas Elvis</div>
        <ul class="nav-links">
            <li><a href="<?= base_url('user')?>">Data Mahasiswa</a></li>
            <li><a href="<?= base_url('user/create')?>">Tambah Data</a></li>
            <li><a href="<?= base_url('kelas/create')?>">Tambah Kelas</a></li>
            <li><a href="<?= base_url('kelas')?>">Data Kelas</a></li>
        </ul>
</nav>

    <center>
        <div class="text-cantik">Detail</div>
        <div class="bglist">
            <br>
            <img src="<?= $user['foto']?? base_url('/assets/img/IMG_2859.png')?>" alt="..." style = "width : 200px; border-radius: 50%;"><br><br>

            <div class="badge bg-primary text-wrap">
                <?= $user['nama']?>
            </div>
            <br>

            <div class="badge bg-primary text-wrap">
                <?= $user['nama_kelas']?>
            </div>
            <br>

            <div class="badge bg-primary text-wrap">
                <?= $user['npm']?>
            </div>
            <br>
        </div>
        
    </center>

<?= $this->endsection() ?>