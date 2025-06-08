#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Grupo3\WordCounter\Contador;
use League\CLImate\CLImate;

$climate->br();
$climate->border("📘 Bem-vindo ao Contador de Palavras - Grupo 3 🚀");
$climate->br();


$climate = new CLImate();
$climate->bold()->blue("📘 Bem-vindo ao Contador de Palavras - Grupo 3 🚀");

$caminho = $climate->yellow()->input("📝 Por favor, digite o caminho do arquivo .txt que deseja analisar:")->prompt();

try {
    $contador = new Contador();
    $quantidade = $contador->contarPalavras($caminho);
    $climate->green("O arquivo contém $quantidade palavra(s).");
} catch (Exception $e) {
    $climate->error("Erro: " . $e->getMessage());
}