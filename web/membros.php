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

        <?php
        require_once(__DIR__ . '/database/connection.php');
        $usuarios = connect()->query("SELECT * FROM 'usuario' ORDER BY nome ASC")->fetchAll(PDO::FETCH_OBJ);
        function formatMoneyBRL($valor)
        {
            return "R$ " . number_format($valor / 100, 2, ",", ".");
        }

        foreach ($usuarios as $usuario) {

            $usuarios_caixa = connect()->query("SELECT * FROM 'caixa' WHERE usuario_id='$usuario->id'")->fetchAll(PDO::FETCH_OBJ);
            $entrada = connect()->query("SELECT SUM(valor) as entrada FROM 'caixa' WHERE usuario_id='$usuario->id'  ")->fetchAll(PDO::FETCH_OBJ);
            $saida = connect()->query("SELECT SUM(valor) as saida FROM 'caixa' WHERE usuario_id='$usuario->id' AND 'data_pgto'=null")->fetchAll(PDO::FETCH_OBJ);

            echo '<div class="col-12">';
            echo ' <div class="card shadow mt-5">';
            echo ' <div class="card-header">';
            echo ('<h5>' . $usuario->nome . '</h5>');

            echo '</div>';
            echo '<div class="card-body">';
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">Data</th>';
            echo '<th scope="col">Valor</th>';
            echo '<th scope="col">Data Pgto</th>';
            echo '</tr>';
            echo '</thead> ';
            echo ' <tbody>';
            foreach ($usuarios_caixa as $valores) {
                echo '<tr>';
                echo ('<td>' . $valores->data . '</td>');
                echo ('<td>' . formatMoneyBRL($valores->valor) . '</td>');
                echo ('<td>' . $valores->data_pgto . '</td>');
                echo '</tr>';
            }
            echo ' </tbody>';
            echo '</table>';

            echo '</div>';
            echo '<div class="card-footer">';
            echo ('À pagar = '. formatMoneyBRL($entrada[0]->entrada) .' <br> ');
            echo ('Pago = '. formatMoneyBRL($saida[0]->saida ?? 0).' <br> ');
            echo ('Total  = '. formatMoneyBRL($entrada[0]->entrada - $saida[0]->saida ?? 0).' <br> ');
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
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