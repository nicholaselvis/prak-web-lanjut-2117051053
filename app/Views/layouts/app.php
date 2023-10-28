<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
       
    </head>
        <style>

            body{
                background-image: url('./assets/img/bg.jpeg') ;
            }
            
            /* .bodi {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            } */
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
                text-align: center;
            }

            th{
                text-align: center;
            }

            .bglist {
                width: 1000px;
                height: 500px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f9f9f9;
            }

            .navbar {
                background-color: #007BFF;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            .tombol1 {
                background-color: #007BFF;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
                font-weight: bold;
                transition: background-color 0.3s;
            }

            .nav-links {
                list-style: none;
                padding: 0;
                display: flex;
            }

            .nav-links li {
                margin-right: 20px;
            }

            .nav-links li a {
                text-decoration: none;
                color: #fff;
                font-weight: bold;
            }

            .text-cantik {
                background: linear-gradient(70deg, #0072ff, #00c6ff);
                -webkit-background-clip: text;
                color: transparent;
                font-size: 30px;
                font-weight: bold;
                text-align: center;
            }

            

        </style>

    
        <?= $this->renderSection('content') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
</html>