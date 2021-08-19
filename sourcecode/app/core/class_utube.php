<?php

if ( !defined("root" ) ) die;

class utube {
	
	public function __construct( $loader ){
		
		$this->loader = $loader;
		$this->db = $loader->db;

	}

	public function find_track_full( $artist_name, $title ){
		
		$utube_data = $this->loader->boac->utube( $artist_name, $title );

		if ( !$utube_data["sta"] || empty( $utube_data["data"] ) ? true : $utube_data["data"] == "nada" ){
			return [0,"failed_to_find"];
		}
		
		return [ 1, json_decode( $utube_data["data"], 1 ) ];
		
	}
	
	public function download_track( $youtube_id ){
		
		
		
	}
	
}

?>