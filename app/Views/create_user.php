<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Create User</title>
</head>
<body>
    <center>
    <p>Ini Halaman Create User</p>

    <form action="<?= base_url('/user/store')?>" method="POST">
        <label for="">Nama : </label>
        
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" type="text" name="nama" id="" style="width: 20%">
        <br>
        
        <label for="">NPM  : </label>
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" type="text" name="npm" id="" style="width: 20%">
        <br>
        
        <label for="">Kelas : </label>
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" type="text" name="kelas" id="" style="width: 20%">
        <br>
        
        <button type="submit" class="btn btn-secondary" >Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </center>
</body>
</html>