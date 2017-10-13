<?php
	class db{
		/*properties*/
		private $dbhost = 'localhost';
		private $dbuser = 'root';
		private $dbpass = '122333';
		private $dbname = 'slimapp';

		/*connect*/
		public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
	}