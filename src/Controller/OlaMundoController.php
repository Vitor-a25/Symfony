<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;

class OlaMundoController extends AbstractController
{
    /**
     * Rota para /ola (sem nome) - exibe mensagem genérica
     */
    #[Route('/ola', name: 'saudacao_padrao')]
    public function saudacaoPadrao(): Response
    {
        $mensagem = 'Olá! Por favor, informe seu nome na URL: /ola/SeuNome';
        $data = (new DateTime())->format('d/m/Y H:i:s');

        return $this->render('saudacao/index.html.twig', [
            'mensagem' => $mensagem,
            'data' => $data,
        ]);
    }

    /**
     * Rota para /ola/{nome} - exibe saudação personalizada
     */
    #[Route('/ola/{nome}', name: 'saudacao_personalizada')]
    public function saudacaoPersonalizada(string $nome): Response
    {
        $mensagem = "Olá, $nome! Seja bem-vindo(a) ao Symfony.";
        $data = (new DateTime())->format('d/m/Y H:i:s');

        return $this->render('saudacao/index.html.twig', [
            'mensagem' => $mensagem,
            'data' => $data,
        ]);
    }
}