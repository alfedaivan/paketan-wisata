<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sistem Pendukung Keputusan Metode AHP TOPSIS</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.ico" type="image/x-icon">

    <style>
        .btn-navigation {
            margin-right: 10px;
            width: 30%;
            font-size: 1rem;
            background-color: white;
            color: #3a3b45;
            /* border: 1px solid #3a3b45; */
            font-weight: bold;
        }

        .btn-navigation {
            transition-duration: 0.4s;
        }

        .btn-navigation:hover,
        .active {
            background-color: #FFE601;
            color: #fff;
            border: none;
        }

        nav ul {
            height: 400px;
            padding-left: 0;
        }

        nav ul {
            overflow: hidden;
            overflow-y: scroll;
        }

        nav ul li {
            color: #3a3b45;
            list-style-type: none;
            background-color: #fff;
            border: 1px solid #3a3b45;
            margin-bottom: 2px;
            border-radius: 5px;
            padding: 15px 20px;
            font-size: 1.3rem;
        }
    </style>
</head>

<body class="bg-gradient-info">
    <nav class="navbar navbar-expand-lg navbar-dark bg-white shadow-lg pb-3 pt-3 font-weight-bold">
        <div class="container">
            <a class="navbar-brand text-info" style="font-weight: 900;" href="<?= base_url('') ?>"> <i class="fa fa-database mr-2 rotate-n-15"></i> Sistem Pendukung Keputusan Metode AHP TOPSIS</a>
        </div>
    </nav>

    <div class="container">
        <div class="row d-plex justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-6 mt-5">
                <a class="btn btn-navigation " href="<?= base_url('login') ?>"> Home</a>
                <a class="btn btn-navigation active" href="<?= base_url('listPackage') ?>"> Package</a>
            </div>
        </div>
        <!-- Outer Row -->
        <div class="row d-plex justify-content-between">
            <div class="col-xl-12 col-lg-12 col-md-12 mt-5">
                <div class="card bg-none o-hidden border-0 my-5 text-white" style="background: none;">
                    <div class="text-justify card-body p-0">
                        <nav>
                            <ul class="scroll-wrap">
                                <li>Private Trip Deluxe Boat (Saling Komodo)</li>
                                <li>Private Trip Deluxe Boat (Saling Komodo)</li>
                                <li>Private Trip Deluxe Boat (Saling Komodo)</li>
                                <li>Private Trip Deluxe Boat (Saling Komodo)</li>
                                <li>Private Trip Deluxe Boat (Saling Komodo)</li>
                                <li>Private Trip Sumba</li>
                                <li>Private Trip Sumba</li>
                                <li>Private Trip Sailing Komodo</li>
                                <li>Private Trip Sailing Komodo</li>
                                <li>Overland Flores</li>
                                <li>Open Trip Sumba</li>
                                <li>Open Trip Sumba</li>
                                <li>Open Trip Sumba</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
</body>

</html>