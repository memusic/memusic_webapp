<?php

if ( !defined( "root" ) ) die;

if (
	( $order_no = $loader->secure->get( "get", "on", "string", [ "strict" => true, "strict_regex" => "[a-zA-Z0-9_]", "min_length" => 5 ] ) ) &&
	( $og = $loader->secure->get( "get", "og", "in_array", [ "values" => $loader->pay->all_ogs ] ) )
){

	$receipt = $loader->db->_select([
		"table" => "_user_transaction",
		"where" => [
		    [ "order_no", "=", $order_no ],
		    [ "user_id", "=", $loader->visitor->user()->ID ],
				[ "funding", "=", "1" ]
	    ]
	]);


	if ( !empty( $receipt ) ){

		$paid = $loader->pay->og_check_result( $og, reset( $receipt ) );
		$loader->ui->set_page_data([
			"amount"    => $receipt[0]["amount"],
			"completed" => $this->loader->admin->get_setting( "og_approved", 1 ) && $paid ? 1 : $receipt[0]["completed"],
			"paid"      => $paid
		]);

	}

}

if ( empty( $receipt ) )
$loader->ui->page_type = "404";

$loader->ui->includes = [];

$loader->ui->set_title( "pay_result" );

?>
