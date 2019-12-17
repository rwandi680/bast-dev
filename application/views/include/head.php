<html>
<head>
    <title>Aplikasi BASt</title>
    <link rel="stylesheet" href="<?php echo site_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    
    <style>
        #sc1{
            margin-top:25px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('bast') ?>">KONTRAK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('bast/kegiatan') ?>">KEGIATAN</a>
                </li>
            </ul>
        </div>
        </nav>