<?php


class boac{

	protected $DN = null;
	protected $PN = "DM";
	protected $PC = null;
	protected $CC = null;
	protected $api_addr = "";

	public function __construct( $loader, $data = [] ){

		$this->loader = $loader;
	
		$this->DN = !empty( $data["web_addr"] ) ? $data["web_addr"] : web_addr;
	

	}

	protected function __request( $action, $data ){

		$curl = curl_init( $this->api_addr . "?{$action}" );

		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $curl, CURLOPT_TIMEOUT, 10 );
	

	
		curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, false );
		curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );

		curl_setopt( $curl, CURLOPT_HTTPHEADER, array (
			"PN: {$this->PN}",
			"DN: {$this->DN}",
			"PC: {$this->PC}",
			"CC: {$this->CC}",
			"SC: " . md5( $this->DN . $this->PC )
		) );

		if ( !empty( $data["posts"] ) ){
			curl_setopt( $curl, CURLOPT_POST, true );
			curl_setopt( $curl, CURLOPT_POSTFIELDS, $data["posts"] );
		}

		$response = curl_exec( $curl );
		curl_close( $curl );

		$sta  = null;
		$data = null;
		try {
			$data_sta = json_decode( $response, 1 );
			$data = $data_sta["data"];
			$sta  = $data_sta["sta"];
		} catch( Exception $err ){};

		return [
			"sta"  => $sta ? true : false,
			"data" => $data
		];

	}
	public function get_cc( $admin_email = null, $version = null ){

		return $this->__request( "get_cc", [ "posts" => [ "admin_email" => $admin_email, "version" => $version ] ] );

	}
	public function utube( $artist_name, $title ){

		return $this->__request( "dm_utube", [ "posts" => [ "artist_name" => $artist_name, "title" => $title ] ] );

	}

}

?>
