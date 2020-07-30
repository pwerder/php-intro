<?php

declare(strict_types=1);

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }
    else if(strlen($nome) < 2)
    {
        setarMensagemErro("O nome deve conter mais de 3 carcteres");
        return false;
    }
    else if(strlen($nome)  > 40)
    {
        setarMensagemErro("O nome é muito exetenso");
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro("Informe um numero na idade");
        return false;
    }
    return true;
}    