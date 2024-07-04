<?php

function depositar(array $conta, float $deposito):array {
    if ($deposito > 0){
        $conta['saldo'] += $deposito;
        exibeMensagem("Seu depósito de R$$deposito foi bem sucedido {$conta['titular']}");

    }else {
        exibeMensagem("Não é possivel fazer um depósito negativo {$conta['titular']}");
    }
    return $conta;
}
function saque(array $conta, float $valorSaque): array {
    if($valorSaque > $conta['saldo']) {
        exibeMensagem("Desculpe \"{$conta['titular']}\", não é possivel realizar operação. olhe para seu saldo de R\${$conta['saldo']} e reveja seus conceitos");
    } else {
        $conta['saldo'] -= $valorSaque;
        exibeMensagem("Seu saque $valorSaque efetuado com sucesso {$conta['titular']} seu saldo é de R$$conta[saldo]");

    }
    return $conta;
}
function exibeMensagem ($texto)
{
    echo $texto . PHP_EOL;
}

function letraCaps(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}

