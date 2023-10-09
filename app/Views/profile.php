<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>


    <center>
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
        
    </center>

<?= $this->endsection() ?>