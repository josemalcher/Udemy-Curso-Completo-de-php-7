<?php

class Usuario
{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setIdusuario($idusuario): void
    {
        $this->idusuario = $idusuario;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($deslogin): void
    {
        $this->deslogin = $deslogin;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($dessenha): void
    {
        $this->dessenha = $dessenha;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($dtcadastro): void
    {
        $this->dtcadastro = $dtcadastro;
    }

    /* ---  Métodos  ---- */
    public function loadById($id)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID", array(":ID" => $id));

        //if(isset($result[0]) > 0){
        if (count($results) > 0) {
            $row = $results[0];
            $this->setIdusuario($row['id_usuario']);
            $this->setDeslogin($row['login']);
            $this->setDessenha($row['senha']);
            $this->setDtcadastro(new DateTime($row['cadastro']));

        }
    }

    public static function getList()
    {
        $sql = new SQL();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY login");
    }

    public static function search($login)
    {
        $sql = new SQL();
        return $sql->select("SELECT * FROM tb_usuarios WHERE login LIKE :SEARCH ORDER BY login", array(':SEARCH' => "%" . $login . "%"));
    }

    public function login($login, $senha)
    {
        $sql = new SQL();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE login = :LOGIN AND senha = :SENHA", array(
            ":LOGIN" => $login,
            ":SENHA" => $senha
        ));
        if(count($result) > 0){
            $row = $result[0];
            $this->setIdusuario($row['id_usuario']);
            $this->setDeslogin($row['login']);
            $this->setDessenha($row['senha']);
            $this->setDtcadastro(new DateTime($row['cadastro']));
        }else{
            throw new Exception("Login e/ou senha inválidos");
        }
    }


    public function __toString()
    {
        return json_encode(array(
            "id_usuario" => $this->getIdusuario(),
            "login" => $this->getDeslogin(),
            "senha" => $this->getDessenha(),
            "cadastro" => $this->getDtcadastro()->format('d/m/Y'),
        ));
    }


}