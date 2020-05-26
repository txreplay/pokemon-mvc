<?php
	class pokedex extends cont implements controller{
		public function liste() {
			$data['pokedex'] = $this->model->liste( );
			return $this->view( 'liste' , $data );
		}

		public function combat() {
			$id = $_REQUEST['id'];
			$data = $this->model->combat( $id );
			$data['resultat_capt'] = rand (0 ,100);
			return $this->view( 'combat' , $data );
		}
	}