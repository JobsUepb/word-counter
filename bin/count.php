#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Grupo3\WordCounter\Contador;
use League\CLImate\CLImate;

$climate = new CLImate();
$climate->bold()->blue("Contador de Palavras - Grupo 3");

$caminho = $climate->lightGreen()->input("Digite o caminho do arquivo .txt:")->prompt();

try {
    $contador = new Contador();
    $quantidade = $contador->contarPalavras($caminho);
    $climate->green("O arquivo contém $quantidade palavra(s).");
} catch (Exception $e) {
    $climate->error("Erro: " . $e->getMessage());
}