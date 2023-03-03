<?php

	class LoginDTO {
		private $username;
		private $password;

		public function get_username() {
			return $this->username;
		}

		public function set_username($x) {
			$this->username = $x;
		}

		public function get_password() {
			return $this->password;
		}

		public function set_password($x) {
			$this->password = $x;
		}
	}

?>