# Word Counter (CLI) - Grupo 3

Aplicativo PHP de linha de comando que conta a quantidade de palavras em arquivos `.txt`.

## ✨ Funcionalidades
- Entrada via terminal usando league/climate
- Leitura de arquivos `.txt` para contagem de palavras
- Tratamento de erros com mensagens claras
- Testes automatizados com PHPUnit

## 🔧 Requisitos
- PHP >= 7.4
- Composer

## 📦 Instalação
Clone o repositório e instale as dependências:

```bash
composer install
```

## ▶️ Uso
Execute o contador com:

```bash
php bin/count.php
```

Digite o caminho do arquivo `.txt` quando solicitado (exemplo: `inputs/exemplo.txt`).

## ✅ Testes
Execute os testes com PHPUnit:

```bash
./vendor/bin/phpunit tests/
```

##  Estrutura de Pastas
- bin/ — Script principal
- inputs/ — Arquivos de entrada
- src/ — Código fonte
- tests/ — Testes
- vendor/ — Dependências gerenciadas pelo Composer

## Equipe
Projeto colaborativo com GitHub Desktop, utilizando git-flow e versionamento semântico.