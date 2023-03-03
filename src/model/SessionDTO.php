<?php

	class SessionDTO {
		private $codigo;
		private $nivel;
		private $username;

        public function __construct($codigo, $nivel, $username){
            $this->codigo = $codigo;
            $this->nivel  = $nivel;
			$this->username = $username;
        }

		public function get_codigo() {
			return $this->codigo;
		}

		public function set_codigo($value) {
			$this->codigo = $value;
		}

		public function get_nivel() {
			return $this->nivel;
		}

		public function set_nivel($value) {
			$this->nivel = $value;
		}

		public function set_username($value) {
			$this->username = $value;
		}

		public function get_username(){
			return $this->username;
		}
	}

?>