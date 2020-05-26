<?php
	abstract class _model{

		function __construct(){
			global $mysqli;
			$this->db = &$mysqli;
		}

	}