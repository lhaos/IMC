<?php
	class Imc{
		private $nome;
		private $gen;
		private $date_nasc;
		private $peso;
		private $alt;

		public function __construct(){}

		public function __destruct(){
			unset($this->nome);
			unset($this->gen);
			unset($this->date_nasc);
			unset($this->peso);
			unset($this->alt);
			unset($this);
		}

		public function __get($var){
			return $this->$var;
		}

		public function __set($var, $val){
			$this->$var = $val;
		}

		function altFormat(){
			$valAlt = $this->alt;
			$valAlt = substr($valAlt, 0, 4);
			$valAlt = substr_replace($valAlt, '.', 1, 1);
			$finalAlt = (float) $valAlt;
			return $finalAlt;
		}

		function pesoFormat(){
			$valPeso = $this->peso;
			$valPeso = substr($valPeso, 0, 5);
			$finalPeso = (float) $valPeso;
			return $finalPeso;
		}

		public function calc_imc(){
			$calc = $this->pesoFormat() / ($this->altFormat() * $this->altFormat());
			$result = number_format($calc, 1, ',', ' ');
			return $result;
		}
		

	}//close class