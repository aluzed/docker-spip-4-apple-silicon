<?php

/*
 * Squelette : squelettes-dist/inclure/nav.html
 * Date :      Fri, 14 Feb 2025 09:42:36 GMT
 * Compile :   Sun, 20 Apr 2025 10:58:56 GMT
 * Boucles :   _nav
 */ 

function BOUCLE_navhtml_47be8151d51b0109e67495b6638ab409(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_nav';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+rubriques.titre AS num",
		"CASE ( 0+rubriques.titre ) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"rubriques.titre",
		"rubriques.id_rubrique",
		"rubriques.lang");
		$command['orderby'] = array('sinum, num', 'rubriques.titre');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', 0));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/nav.html','html_47be8151d51b0109e67495b6638ab409','_nav',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_nav']['compteur_boucle'] = 0;
	$Numrows['_nav']['command'] = $command;
	$Numrows['_nav']['total'] = @intval($iter->count());
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_nav']['compteur_boucle']++;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<li class="nav-item' .
(($t1 = strval(retablir_echappements_modeles((calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '') ? 'on' : ''))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles((((($Numrows['_nav']['compteur_boucle'] ?? 0) == '1')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'first') :
		'') .
(($t1 = strval(retablir_echappements_modeles((((($Numrows['_nav']['compteur_boucle'] ?? 0) == (($Numrows['_nav']['total'] ?? 0)))) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'last') :
		'') .
'"><a href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true)))) .
'">' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</a></li>
		');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nav @ squelettes-dist/inclure/nav.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/inclure/nav.html
// Temps de compilation total: 0.301 ms
//

function html_47be8151d51b0109e67495b6638ab409($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_navhtml_47be8151d51b0109e67495b6638ab409($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<nav class="nav clearfix' .
		(($t3 = strval(retablir_echappements_modeles((((($Numrows['_nav']['total'] ?? 0) == '1')) ?' ' :''))))!=='' ?
				(' ' . $t3 . 'none') :
				'') .
		'" id="nav" role="navigation">
	<ul>
		') . $t1 . '
	</ul>
</nav>
') :
		'');

	return analyse_resultat_skel('html_47be8151d51b0109e67495b6638ab409', $Cache, $page, 'squelettes-dist/inclure/nav.html');
}
