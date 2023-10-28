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
    <div class="text-cantik">Edit Kelas</div>
    <?php $validation = \Config\Services::validation();?>

    <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>
        
        <label for="">Kelas : </label>
        
        <input class="form-control <?= (empty(validation_show_error('nama_kelas'))) ? '' : 'is-invalid' ?>" type="text" placeholder="Default input" aria-label="default input example" type="text" name="nama_kelas" id="" style="width: 20%" value="<?= $kelas['nama_kelas'] ?>" ?>
            <?= validation_show_error('nama_kelas'); ?>
        <br>
        
        <br>
        
        <button type="submit" class="btn btn-secondary" >Submit</button>
    </form>

    </center>
    <?= $this->endsection() ?>