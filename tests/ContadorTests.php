<?php

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
    }
}