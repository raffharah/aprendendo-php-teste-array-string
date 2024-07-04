<?php

require 'funcoes.php';
$contaCorrente = [
    12345678910 => $conta1 = ['titular' => 'J. J. Jameson', 'saldo' => 10000],
    12345678911 => $conta2 = ['titular' => 'Ben', 'saldo' => 1000],
    12345678912 => $conta3 = ['titular' => "May", 'saldo' => 500],
    12345678913 => $conta4 = ['titular' => "Mary", 'saldo' => 500],
    12345678914 => $conta5 = ['titular' => "Jane", 'saldo' => 500],
    12345678915 => $conta6 = ['titular' => "Miranha", 'saldo' => 499],
];

$contaCorrente[12345678915] = saque($contaCorrente[12345678915], 500);
$contaCorrente[12345678910] = saque($contaCorrente[12345678910], 100);
$contaCorrente[12345678911] = saque($contaCorrente[12345678911], 500);
$contaCorrente[12345678913] = depositar($contaCorrente[12345678913], -100);
$contaCorrente[12345678914] = depositar($contaCorrente[12345678914], 1000);
letraCaps($contaCorrente[12345678910]);

echo "Todas as operações foram realizadas, sendo assim as contas ficaram: " . PHP_EOL;

foreach ($contaCorrente as $cpf){
    $cpfValido = preg_match('/^[0-9]{11}$/',
    $cpf[],
    $valido);
    var_dump($cpf[]);
}


foreach ($contaCorrente as $conta) {
    echo "Titular {$conta['titular']}, Saldo {$conta['saldo']}" . PHP_EOL;
    }
