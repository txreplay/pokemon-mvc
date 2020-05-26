<?php
	abstract class cont{

		function __construct(){
			$ma_classe = new ReflectionClass( $this );
			$mon_model = "_".$ma_classe->name;
			require_once( "model/model.interface.php" );
			require_once( "model/_model.php" );
			require_once( "model/$mon_model.php" );
			$this->model = new $mon_model();
		}

		protected function view( $view , $data = array() ) {
			ob_start();
			include( "view/".$view.".php" );
			$buffer = ob_get_clean();
			return $buffer;
		}

	}