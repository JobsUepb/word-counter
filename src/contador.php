<?php
<<<<<<< HEAD

use Grupo3\WordCounter\Contador;
use PHPUnit\Framework\TestCase;

class ContadorTest extends TestCase
{
    public function testContarPalavras()
    {
        $arquivo = __DIR__ . '/../inputs/exemplo.txt';
        file_put_contents($arquivo, 'Olá mundo de testes!');
        $contador = new Contador();
        $this->assertEquals(4, $contador->contarPalavras($arquivo));
        unlink($arquivo);
=======

namespace Grupo3\WordCounter;

class Contador
{
    public function contarPalavras(string $caminhoArquivo): int
    {
        if (!file_exists($caminhoArquivo)) {
            throw new \Exception("Arquivo não encontrado.");
        }

        $conteudo = file_get_contents($caminhoArquivo);
        $palavras = str_word_count(strip_tags($conteudo), 1);
        return count($palavras);
>>>>>>> a2ca0bdaae06d8d4df38044e9f2166c0f4e95d63
    }
}