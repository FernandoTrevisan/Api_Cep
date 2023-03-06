<?php

namespace app\Model;

use app\DAO\enderecoDAO;
use Exception;

class EnderecoModel extends Model
{
    public $id_logradouro,$tipo,$descricao,$id_cidade,
            $uf,$complemento,$descricao_sem_numero,
            $descricao_cidade,$codigo_cidade_ibge,$descricao_bairro;

            public $arr_cidades;

            
            
            public function getlogradouroBycep(int $cep)
            {

                try
                {
                    $dao = new enderecoDAO();

                    return $dao ->selectBycep($cep);
                
                } catch(Exception $e) {

                    throw $e;


            }
}

public function getcepByLogradouro($logradouro)
{

    try
    {
        $dao = new enderecoDAO();
        $this ->rowns = $dao ->selectCepByLogradouro($logradouro);


    } catch(Exception $e) {

        echo $e ->getMessage();

    }




}

public function getBairrosByIdCidade(int $id_cidade)
{
    try
    {
        $dao = new enderecoDAO();
        $this ->rows = $dao ->selectBairroByIdCidade($id_cidade);

    } catch(Exception $e) {

        echo $e ->getMessage();



    }


    

 }

}