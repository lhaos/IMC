<?php
	class Imc{
		
		private $nome;
		private $gen;
		private $date_nasc;
		private $peso;
		private $alt;
		protected $cat;
		
		public function __construct(){}

		public function __destruct(){
			unset($this->nome);
			unset($this->gen);
			unset($this->date_nasc);
			unset($this->peso);
			unset($this->alt);
			unset($this);
		}//fecha destruct

		public function __get($var){
			return $this->$var;
		}//fecha get magico

		public function __set($var, $val){
			$this->$var = $val;
		}//fecha set magico

		function altFormat(){
			$valAlt = $this->alt;
			$valAlt = substr($valAlt, 0, 4);
			$valAlt = substr_replace($valAlt, '.', 1, 1);
			$finalAlt = (float) $valAlt;
			return $finalAlt;
		}//fecha altFormat

		function pesoFormat(){
			$valPeso = $this->peso;
			$valPeso = substr($valPeso, 0, 5);
			$finalPeso = (float) $valPeso;
			return $finalPeso;
		}//fecha pesoFormat

		public function calc_imc(){
			$calc = $this->pesoFormat() / ($this->altFormat() * $this->altFormat());
			$result = number_format($calc, 1, ',', ' ');
			$this->cat = $result;
			return $result;
		}//fecha calc_imc
		
		public function informaCategoria(){
			if($this->cat < 18.5){
				return 'Abaixo do peso';
			}else if($this->cat >= 18.5 && $this->cat <= 24.9){
				return 'Peso normal';
			}else if($this->cat >= 25 && $this->cat <= 29.9){
				return 'Sobrepeso';
			}else if($this->cat >= 30 && $this->cat <= 34.9){
				return 'Obesidade Grau I';
			}else if($this->cat >= 35 && $this->cat <= 39.9 ){
				return 'Obesidade Grau II';
			}else{
				return 'Obesidade Grau III';
			}//fecha if-else
			
		}//fecha informaCategoria

	}//close class