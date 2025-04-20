<?php

/*
 * Squelette : squelettes-dist/inclure/navsub.html
 * Date :      Fri, 14 Feb 2025 09:42:36 GMT
 * Compile :   Sun, 20 Apr 2025 10:58:56 GMT
 * Boucles :   _test_expose, _re, _sous_rubriques, _rubriques, _secteur
 */ 

function BOUCLE_test_exposehtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_test_expose';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_parent'], '','bigint NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/navsub.html','html_cd9b72f6ec3a1b1e6ea51e5300d40fe9','_test_expose',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= retablir_echappements_modeles((calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '') ? ' ' : ''));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_test_expose @ squelettes-dist/inclure/navsub.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rehtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_sous_rubriques']) ? $Numrows['_sous_rubriques'] : array());
	$t0 = (($t1 = BOUCLE_sous_rubriqueshtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<ul>
				' . $t1 . '
			</ul>
			') :
		'');
	$Numrows['_sous_rubriques'] = ($save_numrows);
	return $t0;
}


function BOUCLE_sous_rubriqueshtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sous_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_parent",
		"rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"CASE ( 0+rubriques.titre ) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"rubriques.date",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('sinum, num', 'rubriques.date DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'], '','bigint NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/navsub.html','html_cd9b72f6ec3a1b1e6ea51e5300d40fe9','_sous_rubriques',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (($t1 = BOUCLE_test_exposehtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
				<li><a href="' .
		retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true)))) .
		'"' .
		(($t3 = strval(retablir_echappements_modeles((calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '') ? 'on' : ''))))!=='' ?
				(' class="' . $t3 . '"') :
				'') .
		'>' .
		retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
		'</a>' .
		BOUCLE_rehtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9($Cache, $Pile, $doublons, $Numrows, $SP) .
		'	</li>
				')) :
		'');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sous_rubriques @ squelettes-dist/inclure/navsub.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rubriqueshtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"CASE ( 0+rubriques.titre ) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('sinum, num', 'rubriques.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'], '','bigint NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/navsub.html','html_cd9b72f6ec3a1b1e6ea51e5300d40fe9','_rubriques',13,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<li>
			<a href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true)))) .
'"' .
(($t1 = strval(retablir_echappements_modeles((calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '') ? 'on' : ''))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
'>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</a>
			' .
(($t1 = BOUCLE_sous_rubriqueshtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<ul>
				' . $t1 . '
			</ul>
			') :
		'') .
'
		</li>
	');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rubriques @ squelettes-dist/inclure/navsub.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_secteurhtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval(($Pile[0]['id_rubrique'] ?? null))))
		return '';
	include_spip('inc/rubriques');
	$hierarchie = calcul_hierarchie_in($id_rubrique,true);
	if (!$hierarchie) return "";
	
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_secteur';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie)");
	$command['where'] = 
			array(
			array('=', 'rubriques.id_parent', 0), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/navsub.html','html_cd9b72f6ec3a1b1e6ea51e5300d40fe9','_secteur',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .
(($t1 = BOUCLE_rubriqueshtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="menu menu_rubriques">
	<h2>' .
		retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
		'</h2>
	<ul>
	') . $t1 . '

	</ul>
</div>
') :
		'') .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_secteur @ squelettes-dist/inclure/navsub.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/inclure/navsub.html
// Temps de compilation total: 0.396 ms
//

function html_cd9b72f6ec3a1b1e6ea51e5300d40fe9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
	Sous-navigation, ouverte sur la hierarchie courante

	On fait un plan, et, quand on avance vers une rubrique,
	on l\'affiche si son parent est expose ou est la racine du site.
	
') :
		'') .
'
' .
BOUCLE_secteurhtml_cd9b72f6ec3a1b1e6ea51e5300d40fe9($Cache, $Pile, $doublons, $Numrows, $SP));

	return analyse_resultat_skel('html_cd9b72f6ec3a1b1e6ea51e5300d40fe9', $Cache, $page, 'squelettes-dist/inclure/navsub.html');
}
