<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

        <style>
            .table {
                border-collapse: collapse;
                width: 50%;
                border: 2px solid;
                justify-content: center;
                align-items: center;
                margin :auto;
                margin-top: 10px;
            }

            tr, td{
                border: 1px solid;
            }

            th{
                text-align: center;
            }

        </style>

    </head>
    <body class="container">

        

        <?= $this->renderSection('content') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>