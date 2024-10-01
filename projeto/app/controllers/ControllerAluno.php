<?php

namespace app\controllers;

use app\database\builder\SelectQuery;

class ControllerAluno extends Base
{
    public function lista($request, $response)
    {
        try {
            $alunos = (array) SelectQuery::select()
                ->from('aluno') #tabela
                ->fetchAll();
            $TemplateData = [
                'titulo' => 'Lista de Alunos',
                'alunos' => $alunos
            ];
            return $this->getTwig()
                ->render($response, $this->setView('listaaluno'), $TemplateData)
                ->withHeader('Content-Type', 'text/html')
                ->withStatus(200);
        } catch (\Exception $e) {
            throw new \Exception("Restrição: " . $e->getMessage(), 1);
        }
    }
    public function cadastro($request, $response)
    {
        $TemplateData = [
            'acao' => 'c',
            'titulo' => 'Lista de Alunos'
        ];
    }
    public function alterar($request, $response, $args)
    {

        $TemplateData = [
            'acao' => 'e',
            'titulo' => 'Lista de Alunos'
        ];
    }
}
