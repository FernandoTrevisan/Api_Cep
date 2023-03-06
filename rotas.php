<?php

use App\controller\enderecoController;


$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch ($uri)
{


    /**
     * [ok] Exemplo de Acesso:
     * 
     */

        case '/endereco/by-cep';
        EnderecoController::getLogradouroByCep();
        break;


    /**
     * [ok] Exemplo de Acesso:
     * 
     */

        case '/logradouro/by-bairro';
        EnderecoController::getlogradouroByBairroAndCidade();
        break;
    /**
     * [ok] Exemplo de Acesso:
     * 
     */
        
        case '/cidade/by-uf';
        EnderecoController::getCidadesByUF();
        break;
    /**
     * [ok] Exemplo de Acesso:
     * 
     */

       
        case '/bairro/by-cidade';
        EnderecoController::getBairrosByIdCidade();
        break;

        default;
        http_response_code(403);
        break;

}


