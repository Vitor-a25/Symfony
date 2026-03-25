# Aplicação Olá Mundo com Symfony

## Objetivo do projeto

Este projeto foi desenvolvido para demonstrar o uso básico do framework Symfony. O objetivo é criar uma aplicação web mínima que responda à rota `/ola-mundo` com uma mensagem simples, evidenciando conceitos fundamentais como roteamento, controladores e resposta HTTP.

### Pré-requisitos

- PHP 8.1 ou superior
- Composer
- Symfony CLI (opcional, mas recomendado)

## Como executar

1. Clone ou extraia o projeto para uma pasta de sua preferência.

2. No terminal, navegue até a pasta do projeto e instale as dependências:

   ```bash
   composer install
3. Inicie o servidor de desenvolvimento:

    symfony server:start

Com o servidor embutido do PHP:

    php -S localhost:8000 -t public

4. Abra o navegador e acesse:

    http://localhost:8000/ola-mundo