<?php

namespace app\controllers;

use app\database\builder\SelectQuery;


class ControllerCliente extends Base



{
    #importa a lista de clientes do banco de dados
    public function lista($request, $response)
    {
        try {
            $adotantes = (array) SelectQuery::select()
                ->from('adotantes')
                ->fetchAll();
            $TemplateData = [
                'titulo' => 'Módulo: Adotantes',
                'adotantes' => $adotantes
            ];
            #renderiza a página de clientes
            return $this->getTwig()
                ->render($response, $this->setView('cliente'), $TemplateData)
                ->withHeader('Content-Type', 'text/html')
                ->withStatus(200);
        } catch (\Exception $e) {
            throw new \Exception("Restrição: " . $e->getMessage(), 1);
        }
    }
    
    
    
    
    
    
    
    

}