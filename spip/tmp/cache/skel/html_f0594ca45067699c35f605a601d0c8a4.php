<?php

/*
 * Squelette : ../prive/style_prive.css.html
 * Date :      Tue, 08 Apr 2025 09:32:38 GMT
 * Compile :   Sun, 20 Apr 2025 10:01:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/style_prive.css.html
// Temps de compilation total: 0.091 ms
//

function html_f0594ca45067699c35f605a601d0c8a4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<style>/*
	Ce squelette definit les styles de l\'espace prive

	Note: l\'entete "Vary:" sert a repousser l\'entete par
	defaut "Vary: Cookie,Accept-Encoding", qui est (un peu)
	genant en cas de "rotation du cookie de session" apres
	un changement d\'IP (effet de clignotement).
*/') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fond'] = (substr(find_in_theme('style_prive.css.html'),(strlen((defined('_DIR_RACINE')?constant('_DIR_RACINE'):''))),(intval('-5')))))) .
'
' .
retablir_echappements_modeles(recuperer_fond( (table_valeur($Pile["vars"]??[], (string)'fond', null)) , array_merge($Pile[0],array()), array('compil'=>array('../prive/style_prive.css.html','html_f0594ca45067699c35f605a601d0c8a4','',2,$GLOBALS['spip_lang'])), _request('connect') ?? '')));

	return analyse_resultat_skel('html_f0594ca45067699c35f605a601d0c8a4', $Cache, $page, '../prive/style_prive.css.html');
}
