<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/af-2.3.7/b-1.7.1/datatables.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Confrat Z6</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/06_black.png" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Z6
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="membros.php"><i class="fas fa-users"></i> Membros</a>
                    <a class="dropdown-item" href="confrarias.php"><i class="fas fa-camera"></i> Confraria</a>
                    <a class="dropdown-item" href="/"><i class="fas fa-dollar-sign"></i> Caixa</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container-fluid my-5">

        <div class="row">
            <!--        meta-->
            <div class="col-3">
                <div class="card shadow mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4 bg-danger text-white text-center">
                            <i class="fas fa-chart-line py-4 h1"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Meta</h5>
                                <p class="card-text mb-0">R$ 3000,00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--        a receber-->
            <div class="col-3">
                <div class="card shadow mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4 bg-primary text-white text-center">
                            <i class="fas fa-hand-holding-usd h1 py-4"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">A receber</h5>
                                <p class="card-text">R$ 350,00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--        saldo-->

            <div class="col-3">
                <div class="card shadow body mb-3 ">
                    <div class="row no-gutters">
                        <div class="col-4 bg-success text-white text-center">
                            <i class="fas fa-dollar-sign h1 py-4"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Saldo</h5>
                                <p class="card-text">R$ 2500,00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--        atrasado-->

            <div class="col-3">
                <div class="card shadow mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4 bg-info text-white text-center">
                            <i class="fas fa-money-bill-alt py-4 h1"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Atrasado</h5>
                                <p class="card-text">R$ 2500,00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card shadow mt-5">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Mês</th>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th>Data Pgto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once(__DIR__ . '/database/connection.php');

                                function formatMoneyBRL($valor)
                                {
                                    return "R$ " . number_format($valor / 100, 2, ",", ".");
                                }

                                $caixa = connect()->query("SELECT * FROM 'caixa'")->fetchAll(PDO::FETCH_OBJ);
                                foreach ($caixa as $value) {

                                    echo '<tr>';
                                    echo ('<td>' . $value->data . '</td>');
                                    echo ('<td>' . $value->usuario . '</td>');
                                    echo ('<td>' . formatMoneyBRL($value->valor) . '</td>');
                                    echo ('<td>' . $value->data_pagamento . '</td>');
                                    echo '</tr>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.25/af-2.3.7/b-1.7.1/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({});
        });
    </script>

</body>

</html>