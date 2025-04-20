<?php

/*
 * Squelette : squelettes-dist/inclure/header.html
 * Date :      Fri, 14 Feb 2025 09:42:36 GMT
 * Compile :   Sun, 20 Apr 2025 10:58:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes-dist/inclure/header.html
// Temps de compilation total: 1.182 ms
//

function html_2c5d4d7300862d16b80942a292dfb979($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<header class="clearfix header" role="banner">
	' .
retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'home', null), 'non'),true) == 'oui') ? (	'<h1 class="spip_logo_site">' .
	(filtrer('image_graver',filtrer('image_reduire',quete_html_logo(quete_logo('id_syndic', 'ON', "'0'", ''), '', ''),'224','96'))) .
	(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
	'</h1>
	'):(	'<strong class="h1 spip_logo_site"><a rel="start home" href="' .
	(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
	'/" title="' .
	_T('public|spip|ecrire:accueil_site') .
	'">' .
	(filtrer('image_graver',filtrer('image_reduire',quete_html_logo(quete_logo('id_syndic', 'ON', "'0'", ''), '', ''),'224','96'))) .
	(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
	'</a></strong>
	')))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
		('<p id="slogan">' . $t1 . '</p>') :
		'') .
'
</header>');

	return analyse_resultat_skel('html_2c5d4d7300862d16b80942a292dfb979', $Cache, $page, 'squelettes-dist/inclure/header.html');
}
