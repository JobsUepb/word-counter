<?php
namespace Grupo3\WordCounter;


use Symfony\Component\Filesystem\Filesystem;


class Contador
{
    private Filesystem $filesystem;


    public function __construct()
    {
        $this->filesystem = new Filesystem();
    }


    public function contarPalavras(string $caminhoArquivo): int
    {
        if (!$this->filesystem->exists($caminhoArquivo)) {
            throw new \Exception("Arquivo não encontrado: $caminhoArquivo");
        }


        $conteudo = file_get_contents($caminhoArquivo);
        $palavras = str_word_count($conteudo, 1);
        return count($palavras);
    }
}