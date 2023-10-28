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

<div class="bodi">
    <center>
    <?php $validation = \Config\Services::validation();?>
    <div class="text-cantik">Tambah Data Mahasiswa</div>
    <div class="bglist">
        <form action="<?= base_url('/user/store')?>" method="POST" enctype="multipart/form-data">

            <label for="">Foto</label>
            <input class="form-control" name="foto" type="file" id="formFile" style="width: 20%">
            <br>

            <label for="">Nama : </label>
            <input class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" type="text" placeholder="Default input" aria-label="default input example" type="text" name="nama" id="" style="width: 20%" value="<?= old('nama') ?>">
            <?= validation_show_error('nama'); ?>
            <br>
            <br>
            
            <label for="">NPM  : </label>
            <input class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" type="text" placeholder="Default input" aria-label="default input example" type="text" name="npm" id="" style="width: 20%" value="<?= old('npm') ?>">
            <?= validation_show_error('npm'); ?>
            <br>
            <br>
            
            <label for="">Kelas : </label>
            <select name="kelas" id="kelas">
                <?php
                foreach ($kelas as $item){
                ?>
                    <option value="<?= $item['id']?>">
                        <?= $item['nama_kelas'] ?>
                    </option>
                <?php
                }
                ?>
            </select>
            
            <br>
            
            <button type="submit" class="btn btn-secondary" >Submit</button>
        </form>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </center>
    <?= $this->endsection() ?>