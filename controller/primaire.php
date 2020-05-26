<?php 

	class primaire {
		const ERREUR_CLASS_PAS_TROUVEE = -1000;
		const ERREUR_FICHIER_CLASS_PAS_TROUVEE = -1001;
		const ERREUR_METHOD_PAS_TROUVEE = -1002;

		private $routing = array(
			'liste' => array( 
				'class' => 'pokedex' , 
				'method' => 'liste' 
			),
			'combat' => array( 
				'class' => 'pokedex' , 
				'method' => 'combat' 
			),
		);

		private $defaultFeature = 'liste';

		public function __construct(){
			$action = null;

			if(isset($_REQUEST['pkmn'])){
				$action = $_REQUEST['pkmn'];
			}

			if( isset( $this->routing[$action] )){
				$vraiAction = $action;

			} else {
				$vraiAction = $this->defaultFeature;
			}

			if( $this->instantiateController( $vraiAction ) <  0 ){
				echo "ça marche pas ! Erreur : ";
				echo $this->instantiateController( $vraiAction );
			}
		}

		private function instantiateController( $pointeurRouting ){
			$class = $this->routing[$pointeurRouting]['class'];

			$targetClass = 'controller/'. $class .'.php';

			if(!file_exists( $targetClass )){
				return self::ERREUR_FICHIER_CLASS_PAS_TROUVEE;
			}

			include( $targetClass );

			if( !class_exists( $class )){
				return self::ERREUR_CLASS_PAS_TROUVEE;
			}

			$method = $this->routing[$pointeurRouting]['method'];

			$page = new $class();

			if( !method_exists( $page , $method )){
				return self::ERREUR_METHOD_PAS_TROUVEE;
			}

			echo $page->$method();
			
			return true;
		}
	}

 ?>