<?php

if ( !defined( "root" ) ) die;

$langs = $this->loader->admin->get_setting( "langs", null, null, true );

if ( empty( $langs ) )
	$this->set_error( "Re-install MeMusic script" );

if ( !in_array( $this->ps["code"], array_keys( $langs ), true ) )
	$this->set_error( "This language code does not exists" );

unset( $langs[ $this->ps["code"] ] );
$langs = json_encode( $langs );

$this->loader->admin->save_setting( "langs", $langs );

$this->set_response( "Removed" );

?>