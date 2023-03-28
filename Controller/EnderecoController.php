<?php


namespace App\Controller;

use App\Model\{EnderecoModel, CidadeModel};
use Exception;

class EnderecoController extends Controller
{
   
   /* <"!Teste!">   (*--°°--*)

    public static function teste()
    {
        //var_dump("Querid@s Alun@s");
        //parent:: getResponseAsJSON("Querid@s Alun@s");
       
        $cidades =['Jau','Bariri','Itapui','DC'];
        parent:: getResponseAsJSON($cidades);

    }

    */

    public static function getCepByLogradouro(): void  // *-* 
    {
        try
        {
            $logradouro = $_GET['logradouro'];

            $model = new EnderecoModel();
            $model->getCepByLogradouro($logradouro);

            parent::getResponseAsJSON($model->rows);
        }
        catch (Exception $e)
        {
            parent::getResponseAsJSON($e);
        }
    }

    public static function getLogradouroByBairroAndCidade(): void
    {

        try
        {
            $bairro =
            parent :: getStringFromUrl(
                isset($_GET['bairro']) ? $_GET['bairro'] : null,
                'bairro');

            $id_cidade = parent ::getIntFromUrl(
                isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null,
                'cep');    

                $model = new EnderecoModel();
                
                $model->getLogradouroByBairroAndCidade($bairro, $id_cidade);

                parent ::getExceptionAsJSON($model->rows);

        } catch (Exception $e){

            parent ::getExceptionAsJSON($e);

        }

    }

    public static function getLogradouroByCep(): void 
    {

        try
        {
            $cep = parent ::getIntFromUrl(
                isset ($_GET['cep']) ? $_GET('cep') : null);

                $model = new EnderecoModel();             

                parent::getResponseAsJSON($model->getLogradouroByCep($cep));

        } catch (Exception $e) {

            parent ::getExceptionAsJSON($e);
        }



    }

    public static function getBairrosByIdCidade() : void 
    {
        try
        {
            $id_cidade = parent::getIntFromUrl(isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null);

            $model = new EnderecoModel();
            $model->getBairrosByIdCidade($id_cidade);

            parent::getResponseAsJSON($model->rows);
        }
        catch (Exception $e)
        {
            parent::getExceptionAsJSON($e);
        }



    }

    public static function getCidadesByUF() : void
    {

        try
        {
            $uf = $_GET['uf'];

            $model = new CidadeModel();
            $model->getCidadeByUf($uf);

            parent ::getResponseAsJSON($model->rows);

        } catch (Exception $e) {

            parent ::getExceptionAsJSON($e);

        }

    }
}




