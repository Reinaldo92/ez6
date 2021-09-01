<?php
require_once(__DIR__ . '/connection.php');

$valor = 5000;
$data_pgto = '';
$usuario_id = 1;
$comprovante = '';

$usuarios = connect()->query("SELECT * FROM 'usuario'")->fetchAll(PDO::FETCH_OBJ);

for ($i = 1; $i <= 12; $i++) {
    $data = '2021-' . $i;

    foreach ($usuarios as $usuario) {
        connect()->prepare("INSERT INTO 'caixa'('data', 'valor', 'data_pgto', 'usuario_id', 'comprovante', 'usuario')
    VALUES('$data', '$valor', '$data_pgto', '$usuario->id', '$comprovante', '$usuario->nome');")->execute();
    }
}
