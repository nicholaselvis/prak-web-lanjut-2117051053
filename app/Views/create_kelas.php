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
    <div class="text-cantik">Tambah Kelas</div>
    <?php $nama_kelas = session()->getFlashdata('nama_kelas');?>

    <form action="<?= base_url('/kelas/store')?>" method="POST">
        <label for="">Kelas : </label><br>
        <input class="form-control <?= (empty(validation_show_error('nama_kelas'))) ? '' : 'is-invalid' ?>" type="text" placeholder="Default input" aria-label="default input example" type="text" name="nama_kelas" id="" style="width: 20%" value="<?= old('nama_kelas') ?>">
            <?= validation_show_error('nama_kelas'); ?>
            <br>
        <button type="submit" class="btn btn-secondary" >Submit</button>
    </form>
    <br>
    
    </center>

<?= $this->endsection() ?>