<?php

	require_once("../db/gerenciador_de_conexao.php");
	require_once("../model/LoginDTO.php");
	require_once("../model/SessionDTO.php");
	require_once("../utils/BCrypt.php");

	class LoginDAO {
		private $conn;

		function __construct() {
			$this->conn = GerenciadoraDeConexoes::obter_conexao();
		}

		function authenticate($login) {
			$meu_comando = $this->conn->query("SELECT CODIGO, USERNAME, PASSWORD, NIVEL, NOME FROM USUARIOS WHERE ((USERNAME = '" . $login->get_username() . "' OR EMAIL = '" . $login->get_username() . "') AND ATIVO = 1)");

			if($linha = $meu_comando->fetch(PDO::FETCH_ASSOC)) {
				if (BCrypt::check($login->get_password(), $linha["PASSWORD"])) {
					return new sessionDTO($linha["CODIGO"], $linha["NIVEL"], $linha["NOME"]);
				}
			}

			return new SessionDTO(-1, -1, -1, -1);
		}
	}

?>