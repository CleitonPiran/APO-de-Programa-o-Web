<?php
class usePDO{
	private $dbname = "banco_apo";
	private $servername = "localhost";
	private $username = "root";
	private $password = "";

	private function connection(){
		try{
			$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $conn;
		}
		catch (PDOException $e){
			echo"Connection Failed: ".$e->getMessage();
			exit();
		}
	}

	private function createTablePessoas(){
		try{
			$cnx = $this->connection();
			$sql = "CREATE TABLE IF NOT EXISTS pessoas(
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				nome VARCHAR(50) NOT NULL,
				idade INT(3) NOT NULL,
				email VARCHAR(50) NOT NULL,
				senha VARCHAR(64) NOT NULL)";

			$cnx->exec($sql);

			return $cnx;
		}
		catch (PDOException $e){
			echo "Falha ao criar Tabela: ".$e->getMessage();
			exit();
		}
	}

	private function createTableFornecedores() {
        try {
            $cnx = $this->connection();

            $sql = "CREATE TABLE IF NOT EXISTS fornecedores(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fornecedor VARCHAR(50) NOT NULL,
                telefone VARCHAR(15) NOT NULL,
                cidade VARCHAR(50) NOT NULL,
            	produtoforn VARCHAR(50) NOT NULL)";
            $cnx->exec($sql);

            return $cnx;
        } catch (PDOException $e) {
            echo "Falha ao criar Tabela Fornecedores: " . $e->getMessage();
            exit();
        }
    }

    private function createTableProdutos() {
        try {
            $cnx = $this->connection();

            $sql = "CREATE TABLE IF NOT EXISTS produtos(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                produto VARCHAR(50) NOT NULL,
                valor DECIMAL(10, 2) NOT NULL,
                fornproduto VARCHAR(50) NOT NULL)";
            $cnx->exec($sql);

            return $cnx;
        } catch (PDOException $e) {
            echo "Falha ao criar Tabela Produtos: " . $e->getMessage();
            exit();
        }
    }


	function execSQL($sql, $params = []){
	try{
		$this-> createTablePessoas();
		$this->createTableFornecedores();
		$this->createTableProdutos();

		$cnx = $this->connection();

		$stmt = $cnx->prepare($sql);
        $stmt->execute($params);

		return $stmt;
	}
	catch(PDOException $e){
		echo "Falha ao executar SQL: ".$e->getMessage();
		exit();
		}
	}
}
?>