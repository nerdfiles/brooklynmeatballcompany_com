<?php

	$file = dirname(__FILE__);
	$file = substr($file, 0, stripos($file, "wp-content") );
	require( $file . "/wp-load.php");

	$upload_dir = wp_upload_dir();
	$current_user = get_current_user_id();
	
	$jwl_url = $upload_dir['basedir'] . '/ultimate-tinymce/imgmgr/'.$current_user.'/images/';
	$jwl_url2 = $_SERVER['DOCUMENT_ROOT'];
	$jwl_url3 = str_replace($jwl_url2,'',$jwl_url);
	
	$jwl_url_2 = $upload_dir['basedir'] . '/ultimate-tinymce/imgmgr/'.$current_user.'/files/';
	$jwl_url2_2 = $_SERVER['DOCUMENT_ROOT'];
	$jwl_url3_2 = str_replace($jwl_url2_2,'',$jwl_url_2);

//Site root dir
define('DIR_ROOT',		$_SERVER['DOCUMENT_ROOT']);
//Images dir (root relative)
define('DIR_IMAGES',	$jwl_url3);
//Files dir (root relative)
define('DIR_FILES',		$jwl_url3_2);


//Width and height of resized image
define('WIDTH_TO_LINK', 500);
define('HEIGHT_TO_LINK', 500);

//Additional attributes class and rel
define('CLASS_LINK', 'lightview');
define('REL_LINK', 'lightbox');

?>