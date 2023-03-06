<?php

//oi
namespace App\Controller;

use App\Model\{EnderecoModel, CidadeModel};
use Exception;

class EnderecoController extends Controller
{
    public static function getCepByLogradouro(): void
    {

    }

    public static function getLogradouroByBairroAndCidade(): void
    {

    }

    public static function getLogradouroByCep(): void 
    {

    }

    public static function getBairrosByIdCidade() : void 
    {

    }

    public static function getCidadesByUF() : void
    {

    }
}




/*

<?php 

namespace app\controller;

include 'controller.php';

class EderecoController extends controller
{


    public static function teste()
    {
        //var_dump("Querid@s Alun@s");
        //parent:: getResponseAsJSON("Querid@s Alun@s");
       
        $cidades =['Jau','Bariri','Itapui','DC'];
        parent:: getResponseAsJSON($cidades);

    }

}

*/