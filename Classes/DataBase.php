<?php
Class database {
    private $servername = "localhost";
    private $username = "root";
    private $database = "registro-alunos";

    private function getServerName() {
        return $this->servername;
    }

    
    private function getUserName() {
        return $this->username;
    }

    private function getDataBase() {
        return $this->database;
    }

    //----CONECTAR-NO-BANCO-DE-DADOS--------------------
    private function connect(){
        try{
            $db = new PDO("mysql:host=".$this->getServerName().";dbname=".$this->getDataBase(), $this->getUserName());

            
            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
        return ($db);
    }
    //----INSERIR-ALUNOS--------------------------------
    public function insert($nome, $email, $telefone, $curso){                
        $conexao=$this->connect();
        $sqlInsert = "INSERT INTO alunos (nome, email, telefone, curso) VALUES ('$nome', '$email', '$telefone', '$curso')";
        $stmt=$conexao->prepare($sqlInsert);
        $stmt->execute();

        $rs = $conexao->lastInsertId() or die(print_r($stmt->errorInfo(), true));

        return $rs;
    }
    //----EDITAR-ALUNOS--------------------------------
    
    public function edit($id, $nome, $email, $telefone, $curso){
        $conexao=$this->connect();
        $sqlEdit = "UPDATE alunos SET nome='$nome', email='$email', telefone='$telefone', curso='$curso' WHERE id=$id";
        $stmt=$conexao->prepare($sqlEdit);
        $stmt->execute();
    }
    //----DELETAR-ALUNOS--------------------------------
    public function delete($id){
        $sqlDelete = "DELETE FROM alunos WHERE id =$id"; 
        $query=$this->connect()->prepare($sqlDelete);
        $query->execute();
    }
    //----LISTAR-ALUNOS--------------------------------
    public function listar() {
        $conexao=$this->connect();
        $sqlListar = "SELECT id, nome, email, telefone, curso FROM alunos";
        $stmt=$conexao->prepare($sqlListar);
        $stmt->execute();

        foreach($stmt->fetchAll() as $k=>$row)  {
        echo "<tr>" .
        "<td>" . $row['nome'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['telefone'] . "</td>
        <td>" . $row['curso'] . "</td>
        <td> <a href='../Students/Edit/index.php?id=" . $row["id"] . "&nome=".$row["nome"]."&email=".$row["email"]."&telefone=".$row["telefone"]."&curso=".$row["curso"]."'><button class='btnEdit'>Edit</button></a>&nbsp;<a href='../Students/Delete/Delete.php?id=" . $row["id"] . "'><button class='btnDelete'>Delete</button></a></td></tr>";
        
        }
    }
}

?>