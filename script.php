<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo "O nome não pode ser encontrado";
    return;
}

if(strlen($nome) < 2)
{
    echo "O nome deve conter mais de 3 carcteres";
    return;
}

if(strlen($nome)  > 40)
{
    echo "O nome é muito exetenso";
    return;
}

if(!is_numeric($idade))
{
    echo "Informe um numero na idade";
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            return;
        }
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            return;
        }
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            return;
        }
    }
}