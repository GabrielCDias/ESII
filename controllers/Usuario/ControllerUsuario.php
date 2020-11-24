<?php
namespace controller;

$separador = DIRECTORY_SEPARATOR;
$root = $_SERVER["DOCUMENT_ROOT"];

require_once($root.'../DAO/DAOUsuario.php');

use DAO\Usuario;

/**
 * Esta classe serve para tratar as regras de negócio pertinentes à Classe Usuário
 * Seu escopo limita-se às funções da entidade Usuário
 * 
 * @author Gabriel Correa Dias
 */ 

 class ControllerUsuario{

    /**
     * Recebe dados de login, faz o devido tratamento e envia para a DAO executar
     * no banco de dados
     * @param string $login Login do usuário
     * @param string $senha senha do usuário
     * @return Usuario
     */

     public function fazerLogin($login, $senha){
        $daoUsuario = new DAOUsuario();

        try{
            $usuario = $daoUsuario->logar($login,$senha);
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }

        unset($daoUsuario);
        return $usuario;

     }

    /**
     * Recebe e trata os dados do usuário e envia a DAO
     * gravar no banco de dados
     * 
     * @param string $nome Nome do Usuário
     * @param string $email E-mail do Usuário
     * @param string $celular Celular do Usuário
     * @param string $login Login do Usuário
     * @param string $senha Senha do Usuário
     * @return TRUE|Excepiton Retorna TRUE caso a inclusão tenha sido bem sucedida
     * ou usa Exception caso não tenha.
    */

    public function salvarUsuario($nome, $email, $celular, $login, $senha){
        $daoUsuario = new DAOUsuario();

        try{
            $daoUsuario->incluirUsuario($nome, $email, $celular, $login, $senha)
        }catch((\Exception $e){
            throw new \Exception($e->getMessage());
        }

    }

 }

?>