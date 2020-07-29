<?php

declare(strict_types=1);

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
        return false;
    }
    else if(strlen($nome) < 2)
    {
        $_SESSION['mensagem-de-erro'] = "O nome deve conter mais de 3 carcteres";
        return false;
    }
    else if(strlen($nome)  > 40)
    {
        $_SESSION['mensagem-de-erro'] = "O nome é muito exetenso";
        return false;
    }
    return true;
}
function validaIdade(string $idade)
{
    if(!is_numeric($idade))
    {
        $_SESSION['mensagem-de-erro'] = "Informe um numero na idade";
        return false;
    }
    return true;
}    