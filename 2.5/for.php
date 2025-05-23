<?php
    $title = 'for loop';
    $favorateGitures = [
        'Vela',
        'Explorer',
        'Strat'
    ];

    // $kpvGitures = [
    //     'prs' => 'Vela',
    //     'givson' => 'Explorer',
    //     'finder' => 'Strat'
    // ];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?></title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
   

            <!-- Main Content -->
            <div id="content">
                            <table class="table table-striped">
                                <?php
                                    // for($i = 0; $i < count($favorateGitures); $i++){
                                    //     $giture = $favorateGitures[$i];
                                    //     echo "<tr><td>$giture</td></tr>";
                                    // }
                                 ?>

                                <?php
                                    $loveProfusely = [
                                        'I love you profusely Omia'
                                    ];
                                    for($i = 0; $i < count($loveProfusely);){
                                        $love = $loveProfusely[$i];
                                        echo "<tr><td>$love</td></tr>";
                                    }
                                ?>
                            </table>

            </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>