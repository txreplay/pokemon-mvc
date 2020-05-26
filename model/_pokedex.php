<?php
	class _pokedex extends _model implements model{
		public function liste() {
			$sql = "SELECT 
						`id`, 
						`numero`, 
						`nom`, 
						`vu`, 
						`capture` 
					FROM 
						`pokemon` 
					WHERE 1";

			if(!($result = $this->db->query( $sql ))){
				return RETOUR_ERR;
			}
			$output = array();
			while( $row = $result->fetch_assoc()){
				$output[] = $row;
			}
			return $output;
		}

		public function combat( $id ) {
			$sql = "SELECT 
						`id`, 
						`numero`, 
						`nom`, 
						`vu`, 
						`capture`
					FROM 
						`pokemon` 
					WHERE `id` = ". (int) $id.";";
					
			if(!($result = $this->db->query( $sql ))){
				return RETOUR_ERR;
			}
			return $result->fetch_assoc();
		}

	}