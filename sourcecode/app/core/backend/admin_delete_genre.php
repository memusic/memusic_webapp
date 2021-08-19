<?php

if ( !defined( "root" ) ) die;

$genre = $loader->genre->select(["ID"=>$this->ps["ID"],"deleted"=>true]);

if ( empty( $genre ) ) $this->set_error( "invalid_ID", true );

$loader->db->query("DELETE FROM _m_genres WHERE ID = '{$genre["ID"]}' AND deleted > 0 ");
$this->set_response( "done" );

?>