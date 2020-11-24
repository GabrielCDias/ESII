<?php
namespace controllers;

$separador = DIRECTORY_SEPARATOR;
$root = $_SERVER["DOCUMENT_ROOT"];

require_once($root.'../DAO/DAOProspect.php');

use DAO\Prospect;

/**
 * Esta classe serve para tratar as regras de negócio pertinentes à Classe Prospect
 * Seu escopo limita-se às funções da entidade Prospect
 * 
 * @author Gabriel Correa Dias
 */ 

 class ControllerProspect{

    /**
     * Recebe e trata os dados do prospect e envia a DAO
     * gravar no banco de dados
     * 
     * @param string $nome Nome do Prospect
     * @param string $email E-mail do Prospect
     * @param string $celular Celular do Prospect
     * @param string $facebook Facebook do Prospect
     * @param string $whatsapp Whatsapp do Usuário
     * @return TRUE|Excepiton Retorna TRUE caso a inclusão tenha sido bem sucedida
     * ou usa Exception caso não tenha.
    */

    public function incluirProspect($nome, $email, $celular, $facebook, $whatsapp){
        $daoProspect = new DAOProspect();
    
        try{
            $daoProspect->incluirProspect($nome, $email, $celular, $facebook, $whatsapp)
        }catch((\Exception $e){
            throw new \Exception($e->getMessage());
        }
    
    }

    /**
     * Atualiza os dados do prospect e envia a DAO
     * gravar no banco de dados
     * 
     * @param string $nome Novo nome para o Prospect
     * @param string $email Novo email para o Prospect
     * @param string $celular Novo celular para o prospect
     * @param string $facebook Novo endereço de facebook para o Prospect
     * @param string $whatsapp Novo número de whatsapp para o Prospect
     * @param string $codProspect Código do Prospect que deve ser alterado
     * @return TRUE|Excepiton Retorna TRUE caso a inclusão tenha sido bem sucedida
     * ou usa Exception caso não tenha.
    */
    
    public function atualizarProspect($nome, $email, $celular, $facebook, $whatsapp, $codProspect){
        $daoProspect = new DAOProspect();
    
        try{
            $daoProspect->atualizarProspect($nome, $email, $celular, $facebook, $whatsapp, $codProspectp)
        }catch((\Exception $e){
            throw new \Exception($e->getMessage());
        }
    
    }
    
    /**
     * Exclui dados do prospect
     * 
     * @param string $codProspect Código do Prospect que deve ser excluído
     * @return TRUE|Excepiton Retorna TRUE caso a inclusão tenha sido bem sucedida
     * ou usa Exception caso não tenha.
    */


    public function  excluirProspect($codProspect){
        $daoProspect = new DAOProspect();
    
        try{
            $daoProspect->excluirProspect($codProspect)
        }catch((\Exception $e){
            throw new \Exception($e->getMessage());
        }
    
    }
    
    /**
    * Busca prospects do banco de dados
    * @param string $email Email do Prospect que deve ser retornado. Este parâmetro é opcional
    * @return Array[Prospect] Se informado email, retorna somente o prospect relacionado.
    * Senão, retornará todos os prospects do banco de dados
    */

    public function  buscarProspects($email=null){
        $daoProspect = new DAOProspect();
    
        try{
            $daoProspect->buscarProspects($email=null)
        }catch((\Exception $e){
            throw new \Exception($e->getMessage());
        }
    
    }

 }

?>