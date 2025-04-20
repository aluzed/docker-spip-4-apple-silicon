<?php

/*
 * Squelette : ../prive/squelettes/top/dist.html
 * Date :      Tue, 08 Apr 2025 09:32:38 GMT
 * Compile :   Sun, 20 Apr 2025 10:01:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/dist.html
// Temps de compilation total: 0.005 ms
//

function html_94cd4adae3128b26cd08b8cb15dd8995($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- top -->';

	return analyse_resultat_skel('html_94cd4adae3128b26cd08b8cb15dd8995', $Cache, $page, '../prive/squelettes/top/dist.html');
}
