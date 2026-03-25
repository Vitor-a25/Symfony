# Aplicação de Saudação com Symfony

## Objetivo do projeto

Este projeto foi desenvolvido para demonstrar conceitos fundamentais do framework Symfony, incluindo roteamento com parâmetros, uso de templates Twig e passagem de variáveis dinâmicas. A aplicação exibe uma saudação personalizada de acordo com o nome informado na URL, além de mostrar a data e hora atuais, proporcionando uma experiência mais rica e funcional.

## Tecnologias utilizadas

- **PHP 8.1+** – Linguagem de programação.
- **Symfony 6.4** – Framework para aplicações web.
- **Twig** – Motor de templates para renderização de páginas.
- **Composer** – Gerenciador de dependências.
- **Symfony CLI** – Ferramenta auxiliar para desenvolvimento (opcional).

## Funcionalidades

- Rota `/ola` – Exibe uma mensagem genérica solicitando que o usuário informe seu nome.
- Rota `/ola/{nome}` – Exibe uma saudação personalizada (ex.: “Olá, Vitor! Seja bem-vindo(a) ao Symfony.”) juntamente com a data e hora atual.
- Páginas estilizadas com CSS simples, utilizando um template Twig reutilizável.

### Pré-requisitos

- PHP 8.1 ou superior instalado e configurado no PATH.
- Composer instalado.
- Symfony CLI (opcional, mas recomendado para facilitar o servidor).

## Como executar

1. Clone ou extraia o projeto para uma pasta de sua preferência.

2. No terminal, navegue até a pasta do projeto e instale as dependências:

   ```bash
   composer install

3. Com o servidor embutido do PHP:

    php -S localhost:8000 -t public

4. Abra o navegador e acesse as rotas:

http://localhost:8000/ola – página com mensagem genérica.

http://localhost:8000/ola/seunome – página com saudação personalizada.