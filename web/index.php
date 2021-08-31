<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/bs4/dt-1.10.25/af-2.3.7/b-1.7.1/datatables.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <title>Confrat Z6</title>
</head>

<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="/home/reinaldo/Desktop/Confrat/06.png"
             width="50" height="50" class="d-inline-block align-top" alt="">
        Confrat Z6
    </a>
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
                            <th>Comprovante</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Jan-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td>21-01-2021</td>
                            <td><i class="fas fa-paperclip"></i></td>
                        </tr>
                        <tr>
                            <td>Fev-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mar-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Abr-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mai-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jun-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jul-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Ago-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Set-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Out-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Nov-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Dez-21</td>
                            <td>Reinaldo</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jan-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td>21-01-2021</td>
                            <td><i class="fas fa-paperclip"></i></td>
                        </tr>
                        <tr>
                            <td>Fev-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mar-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Abr-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mai-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jun-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jul-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Ago-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Set-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Out-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Nov-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Dez-21</td>
                            <td>Rahoney</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jan-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td>21-01-2021</td>
                            <td><i class="fas fa-paperclip"></i></td>
                        </tr>
                        <tr>
                            <td>Fev-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mar-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Abr-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mai-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jun-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jul-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Ago-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Set-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Out-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Nov-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Dez-21</td>
                            <td>Finatti</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jan-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td>21-01-2021</td>
                            <td><i class="fas fa-paperclip"></i></td>
                        </tr>
                        <tr>
                            <td>Fev-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mar-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Abr-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mai-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jun-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jul-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Ago-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Set-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Out-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Nov-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Dez-21</td>
                            <td>Martins</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jan-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td>21-01-2021</td>
                            <td><i class="fas fa-paperclip"></i></td>
                        </tr>
                        <tr>
                            <td>Fev-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mar-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Abr-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Mai-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jun-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jul-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Ago-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Set-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Out-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Nov-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        <tr>
                            <td>Dez-21</td>
                            <td>Caio</td>
                            <td>R$ 50,00</td>
                            <td></td>
                            <td><a class="btn btn-sm btn-warning"> <i class="fas fa-paperclip"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.25/af-2.3.7/b-1.7.1/datatables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable({});
    });
</script>

</body>

</html>
