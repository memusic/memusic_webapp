<?php
header( "Content-Type: application/javascript; charset=utf-8" );
?>
var $_texts = {

	add_to_playlist: '<?php $loader->lorem->eturn( "add_to_playlist", ["uc"=>true,"eol_br"=>true] ); ?>',
	add_to_playlist_tip: '<?php $loader->lorem->eturn( "add_to_playlist_tip", ["uc"=>true,"eol_br"=>true] ); ?>',
	perform: '<?php $loader->lorem->eturn( "perform", ["uc"=>true,"eol_br"=>true] ); ?>',
	create_new_playlist: '<?php $loader->lorem->eturn( "create_new_playlist", ["uc"=>true,"eol_br"=>true] ); ?>',
	item_price: '<?php $loader->lorem->eturn( "item_price", ["uc"=>true,"eol_br"=>true] ); ?>',
	item_name: '<?php $loader->lorem->eturn( "item_name", ["uc"=>true,"eol_br"=>true] ); ?>',
	add_funds: '<?php $loader->lorem->eturn( "add_funds", ["uc"=>true,"eol_br"=>true] ); ?>',
	account_funt: '<?php $loader->lorem->eturn( "account_funt", ["uc"=>true,"eol_br"=>true] ); ?>',
	confirm: '<?php $loader->lorem->eturn( "confirm", ["uc"=>true,"eol_br"=>true] ); ?>',
	members_only: '<?php $loader->lorem->eturn( "members_only", ["uc"=>true,"eol_br"=>true] ); ?>',
	members_only_tip: '<?php $loader->lorem->eturn( "members_only_tip", ["uc"=>true,"eol_br"=>true] ); ?>',
	signup: '<?php $loader->lorem->eturn( "signup", ["uc"=>true,"eol_br"=>true] ); ?>',
	login: '<?php $loader->lorem->eturn( "login", ["uc"=>true,"eol_br"=>true] ); ?>',
	wait: '<?php $loader->lorem->eturn( "wait", ["uc"=>true,"eol_br"=>true] ); ?>',
	cancel: '<?php $loader->lorem->eturn( "cancel", ["uc"=>true,"eol_br"=>true] ); ?>',
	loading: '<?php $loader->lorem->eturn( "loading", ["uc"=>true,"eol_br"=>true] ); ?>',
	play: '<?php $loader->lorem->eturn( "play", ["uc"=>true,"eol_br"=>true] ); ?>',
	purchase: '<?php $loader->lorem->eturn( "purchase", ["uc"=>true,"eol_br"=>true] ); ?>',
	add_funds: '<?php $loader->lorem->eturn( "add_funds", ["uc"=>true,"eol_br"=>true] ); ?>',
	pause: '<?php $loader->lorem->eturn( "pause", ["uc"=>true,"eol_br"=>true] ); ?>',
	download: '<?php $loader->lorem->eturn( "download", ["uc"=>true,"eol_br"=>true] ); ?>',
	download_tip: '<?php $loader->lorem->eturn( "download_tip", ["eol_br"=>true] ); ?>',
	get_links: '<?php $loader->lorem->eturn( "get_links", ["eol_br"=>true] ); ?>',
	download_links: '<?php $loader->lorem->eturn( "download_links", ["eol_br"=>true] ); ?>',
	download_links_tip: '<?php $loader->lorem->eturn( "download_links_tip", ["eol_br"=>true] ); ?>',
	liked: '<?php $loader->lorem->eturn( "liked", ["uc"=>true,"eol_br"=>true ] ); ?>',
	reposted: '<?php $loader->lorem->eturn( "reposted", ["uc"=>true,"eol_br"=>true ] ); ?>',
	no_source: '<?php $loader->lorem->eturn( "no_source", ["uc"=>true,"eol_br"=>true ] ); ?>',
	purchase_to_hear: '<?php $loader->lorem->eturn( "purchase_to_hear", ["uc"=>true,"eol_br"=>true ] ); ?>',
	not_purchased: '<?php $loader->lorem->eturn( "not_purchased", ["uc"=>true,"eol_br"=>true ] ); ?>',
	add_fund_title: '<?php $loader->lorem->eturn( "add_fund_title", ["eol_br"=>true] ); ?>',
	dep_amount: '<?php $loader->lorem->eturn( "dep_amount", ["eol_br"=>true] ); ?>',
	dep_amount_tip: '<?php $loader->lorem->eturn( "dep_amount_tip", ["eol_br"=>true] ); ?>',
	pay_method: '<?php $loader->lorem->eturn( "pay_method", ["eol_br"=>true] ); ?>',
	paypal: '<?php $loader->lorem->eturn( "paypal", ["eol_br"=>true] ); ?>',
	stripe: '<?php $loader->lorem->eturn( "stripe", ["eol_br"=>true] ); ?>',
	no_pay_method: '<?php $loader->lorem->eturn( "no_pay_method", ["eol_br"=>true] ); ?>',
	bank_tf: '<?php $loader->lorem->eturn( "bank_tf", ["eol_br"=>true] ); ?>',
	remove_playlist: '<?php $loader->lorem->eturn( "remove_playlist", ["eol_br"=>true] ); ?>',
	confirm_action: '<?php $loader->lorem->eturn( "confirm_action", ["eol_br"=>true] ); ?>',
	remove: '<?php $loader->lorem->eturn( "remove", ["uc"=>true,"eol_br"=>true]  ); ?>',
	removed: '<?php $loader->lorem->eturn( "removed", ["uc"=>true,"eol_br"=>true]  ); ?>',
	upload_progress: '<?php $loader->lorem->eturn( "upload_progress", ["eol_br"=>true] ); ?>',
	title: '<?php $loader->lorem->eturn( "title", ["uc"=>true,"eol_br"=>true] ); ?>',
	artist: '<?php $loader->lorem->eturn( "artist", ["uc"=>true,"eol_br"=>true] ); ?>',
	featured_artists: '<?php $loader->lorem->eturn( "featured_artists", ["uc"=>true,"eol_br"=>true] ); ?>',
	featured_artists_tip: '<?php $loader->lorem->eturn( "featured_artists_tip", ["uc"=>true,"eol_br"=>true] ); ?>',
	album_type: '<?php $loader->lorem->eturn( "album_type", ["uc"=>true,"eol_br"=>true] ); ?>',
	album_title: '<?php $loader->lorem->eturn( "album_title", ["uc"=>true,"eol_br"=>true] ); ?>',
	album_artist: '<?php $loader->lorem->eturn( "album_artist", ["uc"=>true,"eol_br"=>true] ); ?>',
	album_order: '<?php $loader->lorem->eturn( "album_order", ["uc"=>true,"eol_br"=>true] ); ?>',
	genre: '<?php $loader->lorem->eturn( "genre", ["uc"=>true,"eol_br"=>true] ); ?>',
	description: '<?php $loader->lorem->eturn( "description", ["uc"=>true,"eol_br"=>true] ); ?>',
	lyrics: '<?php $loader->lorem->eturn( "lyrics", ["uc"=>true,"eol_br"=>true] ); ?>',
	file: '<?php $loader->lorem->eturn( "file", ["uc"=>true,"eol_br"=>true] ); ?>',
	spotify_id: '<?php $loader->lorem->eturn( "spotify_id", ["uc"=>true,"eol_br"=>true] ); ?>',
	price: '<?php $loader->lorem->eturn( "price", ["uc"=>true,"eol_br"=>true] ); ?>',
	detail: '<?php $loader->lorem->eturn( "detail", ["uc"=>true,"eol_br"=>true] ); ?>',
	sources: '<?php $loader->lorem->eturn( "sources", ["uc"=>true,"eol_br"=>true] ); ?>',
	save: '<?php $loader->lorem->eturn( "save", ["uc"=>true,"eol_br"=>true] ); ?>',
	release: '<?php $loader->lorem->eturn( "release", ["uc"=>true,"eol_br"=>true] ); ?>',
	upload_edit_a_title: '<?php $loader->lorem->eturn( "upload_edit_a_title", ["uc"=>true,"eol_br"=>true] ); ?>',
	upload_edit_t_title: '<?php $loader->lorem->eturn( "upload_edit_t_title", ["uc"=>true,"eol_br"=>true] ); ?>',
	currency: '<?php echo $loader->admin->get_setting( "currency", ["eol_br"=>true] ); ?>',
	click_to_select: '<?php $loader->lorem->eturn( "click_to_select", ["uc"=>true,"eol_br"=>true] ); ?>',

};

var $_config = {
	spotify_upload_e: <?php echo $loader->admin->get_setting( 'spotify_upload_e', 1, [ 0, 1 ] ) ? 1 : 0; ?>,
	can_sell: <?php echo $loader->visitor->user()->has_access( "group", "sell" ) ? 1 : 0 ?>,
	chunk: <?php echo $loader->admin->get_setting( 'chunk', 1, [ 0, 1 ] ) ? 1 : 0; ?>,
	upload_max_size: '<?php echo $loader->admin->get_setting( 'max_size', 20 ); ?>',
	upload_max_par_ups: '<?php echo $loader->admin->get_setting( 'max_par_ups', 2 ); ?>',
	chunk_size: '<?php echo $loader->admin->get_setting( 'chunk_size', 2 ); ?>',
	pg_op: <?php echo $loader->admin->get_setting( 'pg_op', 0 ) ? "true" : "false"; ?>,
	pg_pp: <?php echo $loader->admin->get_setting( 'pg_pp', 0 ) ? "true" : "false"; ?>,
	pg_st: <?php echo $loader->admin->get_setting( 'pg_st', 0 ) ? "true" : "false"; ?>,
	pg_kk: <?php echo $loader->admin->get_setting( 'pg_kk', 0 ) ? "true" : "false"; ?>,
	pg_ps: <?php echo $loader->admin->get_setting( 'pg_ps', 0 ) ? "true" : "false"; ?>,
	pg_kk_mode: <?php echo $loader->admin->get_setting( 'pg_kk_mode', "sandbox" ) == "sandbox" ? "true" : "false"; ?>,
	pg_st_key: '<?php echo $loader->admin->get_setting( "pg_st_k1", "" ); ?>',
	pg_kk_key: '<?php echo $loader->admin->get_setting( "pg_kk_k1", "" ); ?>',
}
<?php die; ?>
