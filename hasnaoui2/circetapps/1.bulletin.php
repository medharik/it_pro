<?php

session_start();

if (!isset($_SESSION['user'])) {

    header("location: ../index.html");
}

require_once "../connectdb.php";
require_once "configs.php";



$resultat1 = $db->query("SELECT * from bulletin WHERE Emp_id=" . $_SESSION['user']["id"]);




?>

<?php

include "head.php";
?>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link">
        <i class="fas fa-file-invoice-dollar"></i>
        <span>Ma paie</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<?php
include "sidebar.php";
?>

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">


        <?php
        include "navbar.php";

        ?>
        <!-- End of Topbar -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
            </div>
            <!-- Content Row -->
            <div class="container">
                <div class="row ">
                    <div class="col-lg-9 order-lg-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Choisir un bulletin</a>
                            </li>
                            <li class="nav-item">

                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                        <div class="tab-content ">
                            <div class="tab-pane active" id="profile">

                                <div class="row">
                                    <div class="col-md-9">



                                        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
                                        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                                        <style type="text/css">
                                            body {
                                                color: #566787;
                                                background: #f5f5f5;
                                                font-family: 'Roboto', sans-serif;
                                            }

                                            .table-wrapper {
                                                width: 100%;
                                                background: #fff;
                                                padding: 20px 30px 5px;
                                                margin: 30px auto;
                                                box-shadow: 0 0 1px 0 rgba(0, 0, 0, .25);
                                            }

                                            .table-title .btn-group {
                                                float: right;
                                            }

                                            .table-title .btn {
                                                min-width: 50px;
                                                border-radius: 2px;
                                                border: none;
                                                padding: 6px 12px;
                                                font-size: 95%;
                                                outline: none !important;
                                                height: 30px;
                                            }

                                            .table-title {
                                                border-bottom: 1px solid #e9e9e9;
                                                padding-bottom: 15px;
                                                margin-bottom: 5px;
                                                background: black;
                                                margin: -20px -31px 10px;
                                                padding: 15px 30px;
                                                color: #fff;
                                                border-radius: 0.35em 0.35em 0 0;
                                            }

                                            .table-title h5 {
                                                margin: 2px 0 0;
                                                font-size: 22px;
                                                color: #e3722e;


                                            }

                                            table.table tr th,
                                            table.table tr td {
                                                border-color: #e9e9e9;
                                                padding: 12px 15px;
                                                vertical-align: middle;
                                            }

                                            table.table tr th:first-child {
                                                width: 40px;
                                            }

                                            table.table tr th:last-child {
                                                width: 100px;
                                            }

                                            table.table-striped tbody tr:nth-of-type(odd) {
                                                background-color: #fcfcfc;
                                            }

                                            table.table-striped.table-hover tbody tr:hover {
                                                background: #f5f5f5;
                                            }

                                            table.table td a {
                                                color: #2196f3;
                                            }

                                            table.table td .btn.manage {
                                                padding: 2px 10px;
                                                background: #37BC9B;
                                                color: #fff;
                                                border-radius: 2px;
                                            }

                                            table.table td .btn.manage:hover {
                                                background: #2e9c81;
                                            }

                                            .search-box {
                                                position: relative;
                                                float: right;
                                            }

                                            .search-box input {
                                                height: 34px;
                                                border-radius: 20px;
                                                padding-left: 35px;
                                                border-color: #ddd;
                                                box-shadow: none;
                                            }

                                            .search-box input:focus {
                                                border-color: #3FBAE4;
                                            }

                                            .search-box i {
                                                color: #a0a5b1;
                                                position: absolute;
                                                font-size: 19px;
                                                top: 8px;
                                                left: 10px;
                                            }
                                        </style>


                                        <body>
                                            <div class="table-wrapper shadow table-bordered border-warning  rounded">

                                                <table id="tabledemande" class="table table-striped table table-responsive table-hover ">
                                                    <div class="table-title">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h5><i class="fas fa-file-pdf"> Mes Bulletins</i></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="search-box float-left mb-2">
                                                        <i class="material-icons">&#xE8B6;</i>
                                                        <input type="text" id="tablesearch" name="tablesearch" class="form-control" placeholder="Rechercher&hellip;">
                                                    </div>
                                                    <thead>

                                                        <tr class="text-center">
                                                            <th>N°</th>
                                                            <th>pseudo</th>
                                                            <th>Matricule</th>
                                                            <th>Mois</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>


                                                    <?php

                                                    if (isset($_POST['bulletin'])) {

                                                        $mois = $_POST['moisbulletin'];

                                                        $resultat = $db->query("SELECT * from bulletin WHERE Emp_id=1 AND mois='" . $mois . "'");
                                                        $bulletin = $resultat->fetch();



                                                        $chemin = $bulletin['chemin'];






                                                        $file = "bulletins/<?php echo$chemin";


                                                        // Type de contenu dd l'en-tête
                                                        header('Content-type: application/pdf');

                                                        header('Content-Disposition: inline; filename="' . $file . '"');

                                                        header('Content-Transfer-Encoding: binary');

                                                        header('Accept-Ranges: bytes');

                                                        // Lire le fichier
                                                        @readfile($file);
                                                    }

                                                    ?>

                                                    <?php

                                                    $resultat1 = $db->query("SELECT * from bulletin WHERE Emp_id=" . $_SESSION['user']["id"]);

                                                    while ($bulletin = $resultat1->fetch()) { ?>
                                                        <tr class="text-center">
                                                            <td><?php echo $_SESSION['bulletin']['id'] ?></td>
                                                            <td><?php echo $_SESSION['user']['pseudo'] ?></td>
                                                            <td><?php echo $_SESSION['user']['matricule'] ?></td>
                                                            <td method="POST" name="moisbulletin"><?php echo date('m-Y', strtotime($_SESSION['bulletin']['ajouteLe'])) ?></td>
                                                            <td class="text-center">

                                                                <button method="POST" type="submit" name="bulletin" class="btn btn-sm btn-success mx-auto">
                                                                    <a target="_blank" href="bulletins/<?php echo $bulletin['chemin'] ?>" class="fas fa-eye text-white" value=""></a></button></td>
                                                        <tr>
                                                        <?php     } ?>


                                                        </tbody>

                                                </table>
                                            </div>
                                        </body>

                                        <script>
                                            $(document).ready(function() {
                                                $('#tablesearch').keyup(function() {
                                                    search_table($(this).val());
                                                });

                                                function search_table(value) {
                                                    $('#tabledemande tr').each(function() {
                                                        var found = 'false';
                                                        $(this).each(function() {
                                                            if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                                                                found = 'true';
                                                            }
                                                        });
                                                        if (found == 'true') {
                                                            $(this).show();
                                                        } else {
                                                            $(this).hide();
                                                        }
                                                    });
                                                }
                                            });
                                        </script>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "footer.php";


    ?>