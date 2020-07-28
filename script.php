<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome= $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
    header('location: index.php');    
}

if(strlen($nome) < 2)
{
    $_SESSION['mensagem-de-erro'] = "O nome deve conter mais de 3 carcteres";
    header('location: index.php');
}

if(strlen($nome)  > 40)
{
    $_SESSION['mensagem-de-erro'] = "O nome é muito exetenso";
    header('location: index.php');
}

if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = "Informe um numero na idade";
    header('location: index.php');
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
