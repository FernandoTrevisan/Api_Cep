<?php

use App\controller\enderecoController;


$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch ($uri)
{


   

        case '/endereco/by-cep';
        EnderecoController::getLogradouroByCep();
        break;


   

        case '/logradouro/by-bairro';
        EnderecoController::getlogradouroByBairroAndCidade();
        break;
  

        
        case '/cidade/by-uf';
        EnderecoController::getCidadesByUF();
        break;
   
        

       
        case '/bairro/by-cidade';
        EnderecoController::getBairrosByIdCidade();
        break;

        default;
        http_response_code(403);
        break;

}


