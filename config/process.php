<?php

include_once 'connection.php';
include_once 'url.php';

session_start();

$data = $_POST;
if(!empty($data)){


    if($data["type"] === "create"){

        $nome = $data["nome"];
        $subcelula = $data["subcelula"];
        $patrimonio = $data["patrimonio"];
        $material = $data["material"];
        $cautela = $data["cautela"];
        $descricao = $data["descricao"];

        $query = "INSERT INTO equipamentos(nome, subcelula, patrimonio, material, cautela, descricao) VALUE(:nome, :subcelula, :patrimonio, :material, :cautela, :descricao)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":subcelula", $subcelula);
        $stmt->bindParam(":patrimonio", $patrimonio);
        $stmt->bindParam(":material", $material);
        $stmt->bindParam(":cautela", $cautela);
        $stmt->bindParam(":descricao", $descricao);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Cadastro criado com  com sucesso";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }
       

    }else if($data["type"] === "edit"){
        $nome = $data["nome"];
        $subcelula = $data["subcelula"];
        $patrimonio = $data["patrimonio"];
        $material = $data["material"];
        $cautela = $data["cautela"];
        $descricao = $data["descricao"];
        $id = $data["id"];
       

        $query = "UPDATE equipamentos SET nome = :nome, subcelula = :subcelula, patrimonio = :patrimonio, material = :material, descricao = :descricao, cautela = :cautela WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":subcelula", $subcelula);
        $stmt->bindParam(":patrimonio", $patrimonio);
        $stmt->bindParam(":material", $material);
        $stmt->bindParam(":cautela", $cautela);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":id", $id);
        
        try {
            $stmt->execute();
            $_SESSION["msg"] = "Cadastro atualizado com sucesso";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }else if($data["type"] === "delete"){
        $id = $data["id"];

        $query = "DELETE FROM equipamentos WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Cadastro deletado com sucesso";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    }
     header("Location:" . $BASE_URL . "../index.php");
}else{
    $id;
    if (!empty($_GET)) {
        $id = $_GET["id"];
    }

    if (!empty($id)) {

        $query = "SELECT * FROM equipamentos WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $equipamento = $stmt->fetch();
    } else {
        $equipamentos = [];

        $query = "SELECT *FROM equipamentos";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $equipamentos = $stmt->fetchAll();
    }


}


  