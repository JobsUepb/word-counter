<?php

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
    }
}