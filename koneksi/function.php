<?php
function title($title = NULL){
	$app_title = "Sistem Pengelolaan Buku";
	if($title == NULL) return $app_title;
	else return $app_title . ' - ' . $title;
}

function set_flash_message($tipe, $pesan){
	$_SESSION['flash_message'] = [
		'tipe' => $tipe,
		'pesan' => $pesan,
	];
}

function check_flash_message($tipe){
	if (isset($_SESSION['flash_message'])) {
		if($_SESSION['flash_message']['tipe'] == $tipe) return TRUE;
		else return FALSE;
	}
}

function get_flash_message(){
	$pesan = $_SESSION['flash_message']['pesan'];
	unset($_SESSION['flash_message']);
	return $pesan;
}

?>