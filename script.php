<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolecente";
$categorias[] = "adulto";
$categorias[] = "idoso";

$nome = $_POST["nome"];
$idade = $_POST["idade"];


if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
            echo "O nadador ".$nome. " compete na categoria " .$categorias[$i];
            return;
        }
    }
}
else if($idade >=13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolecente')
        {
            echo "O nadador ".$nome. " compete na categoria " .$categorias[$i];
            return;
        }
    }
}
else if($idade >=19 && $idade <= 50)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            echo "O nadador ".$nome. " compete na categoria " .$categorias[$i];
            return;
        }
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'idoso')
        {
            echo "O nadador ".$nome. " compete na categoria " .$categorias[$i];
            return;
        }
    }
}