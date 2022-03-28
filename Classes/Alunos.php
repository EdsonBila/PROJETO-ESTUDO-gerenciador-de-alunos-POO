<?php
include("DataBase.php");

Class alunos {
    private $nome;
    private $email;
    private $telefone;
    private $curso;

    //-----------------------------------------------------------------------
    public function __construct(string $nome, string $email, string $telefone, string $curso)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->curso = $curso;
        
        $db = new database();
        $db->insert($nome, $email, $telefone, $curso);
    }
    //-----------------------------------------------------------------------
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTelefone($telefone)
    {
        $this->nome = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    public function getCurso()
    {
        return $this->curso;
    }
    //---------------------------------------------------
}

?>