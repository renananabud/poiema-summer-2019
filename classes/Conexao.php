<?php

	/**
	 *  @author Guilherme Adriel
	 *  Conexao com o banco de dados
	 * 
	 */
	class Conexao extends PDO {
		protected $host;
		protected $user;
		protected $pass;
		protected $db;

		public function __construct($database = '') {
			if(empty($database))
				$database = 'poiem162_user';

			$this->host     = 'localhost';
			//$this->user     = 'root';
			//$this->pass     = '';
			//$this->db       = 'poiema';

			$this->user     = 'poiem162_user';
			$this->pass     = 'p013m@2019';
			$this->db       = 'poiem162_admin';
			try {
				//code...
			
				$conn = "mysql:host={$this->host};dbname={$this->db}";
				parent::__construct($conn, $this->user, $this->pass, array(
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
				));
				$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->exec('SET NAMES utf8');
			} catch (\Throwable $th) {
				throw $th;
			}

		}

		function execUpdate($table, $whereUpdate, $dados, $hasBind = true){

			try {
				$fields      = "";
				$updateDados = "";
				foreach ($dados as $key => $value) {
					$setUpdate = ($hasBind) ? str_replace(":", "", $key) . " = " . $key : $key . " = '". $value."'";
					$updateDados .= ($updateDados != "") ? ",".$setUpdate  : $setUpdate ;
				}

				$string = "UPDATE $table SET $updateDados WHERE $whereUpdate";
				$qry = $this->prepare($string);
				foreach ($dados as $key => &$value) {
					$qry->bindParam($key, $value);
				}
				$qry->execute();
				return true;
			} catch (PDOException $e) {
				return false;
			}
			
		}
	}