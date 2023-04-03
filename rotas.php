<?php

use App\controller\EnderecoController;


$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch ($url)
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

        case '/cep/by-logradouro';
        EnderecoController::getCepByLogradouro();
        break;
        

        default;
        http_response_code(403);
        break;

}

/*                              <<<Rotas>>>

http://localhost:8000/endereco/by-cep?cep=17210580

http://localhost:8000/logradouro/by-bairro?id_cidade=4874&bairro=Jardim América

http://localhost:8000/cep/by-logradouro?logradouro=Rua Raphael de Almeida Lei

http://localhost:8000/cidade/by-uf?uf=SP

http://localhost:8000/bairro/by-cidade?id=4874

*/