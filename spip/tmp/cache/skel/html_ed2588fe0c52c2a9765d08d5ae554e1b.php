<?php

/*
 * Squelette : squelettes-dist/sommaire.html
 * Date :      Fri, 14 Feb 2025 09:42:36 GMT
 * Compile :   Sun, 20 Apr 2025 10:58:56 GMT
 * Boucles :   _breves, _forums_liens, _syndic
 */ 

function BOUCLE_breveshtml_ed2588fe0c52c2a9765d08d5ae554e1b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {
	return '';
}


function BOUCLE_forums_lienshtml_ed2588fe0c52c2a9765d08d5ae554e1b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'forum';
		$command['id'] = '_forums_liens';
		$command['from'] = array('forum' => 'spip_forum');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("forum.date_heure",
		"forum.texte",
		"forum.auteur AS nom",
		"forum.id_forum",
		"forum.titre");
		$command['orderby'] = array('forum.date_heure DESC');
		$command['where'] = 
			array(
quete_condition_statut('forum.statut','publie,prop','publie',''));
		$command['join'] = array();
		$command['limit'] = '0,5';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes-dist/sommaire.html','html_ed2588fe0c52c2a9765d08d5ae554e1b','_forums_liens',49,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(couper(liens_nofollow(safehtml(propre(interdit_html($Pile[$SP]['texte']), $connect, $Pile[0]))),'80')))))!=='' ?
		((	'<li>' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['nom'], "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : '...')))))!=='' ?
			($t2 . '&nbsp;: ') :
			'') .
	'<a href="' .
	retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_forum'], 'forum', '', '', true)))) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(couper(attribut_html(liens_nofollow(safehtml(typo(interdit_html($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))),'80')))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>') . $t1 . '</a></li>') :
		'') .
'
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_forums_liens @ squelettes-dist/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_syndichtml_ed2588fe0c52c2a9765d08d5ae554e1b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic_articles';
		$command['id'] = '_syndic';
		$command['from'] = array('syndic_articles' => 'spip_syndic_articles','L1' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic_articles.date",
		"syndic_articles.url",
		"L1.url_site",
		"L1.nom_site",
		"syndic_articles.titre");
		$command['orderby'] = array('syndic_articles.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('L1.statut','publie,prop','publie',''), 
quete_condition_statut('syndic_articles.statut','publie,prop','publie',''), 
			array('<', 'TIMESTAMPDIFF(HOUR,syndic_articles.date,\'' . date('Y-m-d H:i:00') . '\')/24', "180"));
		$command['join'] = array('L1' => array('syndic_articles','id_syndic'));
		$command['limit'] = '0,5';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes-dist/sommaire.html','html_ed2588fe0c52c2a9765d08d5ae554e1b','_syndic',61,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<li>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))))))!=='' ?
		($t1 . ' &ndash; ') :
		'') .
'<a href="' .
retablir_echappements_modeles(vider_url($Pile[$SP]['url'])) .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(couper(attribut_html(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])),'80')))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
' class="spip_out">' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</a></li>
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_syndic @ squelettes-dist/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/sommaire.html
// Temps de compilation total: 29.412 ms
//

function html_ed2588fe0c52c2a9765d08d5ae554e1b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html>
<html dir="' .
retablir_echappements_modeles(lang_dir(($Pile[0]['lang'] ?? null), 'ltr','rtl')) .
'" lang="' .
retablir_echappements_modeles(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang'])) .
'" class="' .
retablir_echappements_modeles(lang_dir(($Pile[0]['lang'] ?? null), 'ltr','rtl')) .
(($t1 = strval(retablir_echappements_modeles(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang']))))!=='' ?
		(' ' . $t1) :
		'') .
' no-js">
<head>
	<script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
	<title>' .
retablir_echappements_modeles(interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(textebrut(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0]))))))!=='' ?
		(' - ' . $t1) :
		'') .
'</title>
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_html(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150'))))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_ed2588fe0c52c2a9765d08d5ae554e1b\',\'\',7,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
</head>

<body class="pas_surlignable page_sommaire">
<div class="page">

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'home\' => ' . argumenter_squelette('oui') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_ed2588fe0c52c2a9765d08d5ae554e1b\',\'\',13,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_ed2588fe0c52c2a9765d08d5ae554e1b\',\'\',14,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
	
	<main class="main" role="main">
		<div class="wrapper hfeed">
		<div class="content" id="content">
			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0])))))!=='' ?
		('<div class="chapo">' . $t1 . '</div>') :
		'') .
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/recents') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_ed2588fe0c52c2a9765d08d5ae554e1b\',\'\',20,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
		</div><!--.content-->
		</div><!--.wrapper-->
		
		<aside class="aside" role="complementary">
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navsub') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_ed2588fe0c52c2a9765d08d5ae554e1b\',\'\',25,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
			' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_RECHERCHE',
	array(),
	array('squelettes-dist/sommaire.html','html_ed2588fe0c52c2a9765d08d5ae554e1b','',26,$GLOBALS['spip_lang']))) .
'
			
			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Breves ') :
		'') .
'
			' .
(($t1 = BOUCLE_breveshtml_ed2588fe0c52c2a9765d08d5ae554e1b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_breves">
				<h2>' .
		_T('public|spip|ecrire:dernieres_breves') .
		'</h2>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
			
			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Liens des forums ') :
		'') .
'
			' .
(($t1 = BOUCLE_forums_lienshtml_ed2588fe0c52c2a9765d08d5ae554e1b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_comments">
				<h2>' .
		_T('public|spip|ecrire:derniers_commentaires') .
		'</h2>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
			
			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Sur le Web ') :
		'') .
'
			' .
(($t1 = BOUCLE_syndichtml_ed2588fe0c52c2a9765d08d5ae554e1b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu">
				<h2>' .
		_T('public|spip|ecrire:nouveautes_web') .
		'</h2>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
			
			' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_INSCRIPTION',
	array(),
	array('squelettes-dist/sommaire.html','html_ed2588fe0c52c2a9765d08d5ae554e1b','',37,$GLOBALS['spip_lang']))) .
'
		</aside><!--.aside-->
	</main><!--.main-->
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(retablir_echappements_modeles(self())) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_ed2588fe0c52c2a9765d08d5ae554e1b\',\'\',41,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
	
</div><!--.page-->
</body>
</html>
');

	return analyse_resultat_skel('html_ed2588fe0c52c2a9765d08d5ae554e1b', $Cache, $page, 'squelettes-dist/sommaire.html');
}
