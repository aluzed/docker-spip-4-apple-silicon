<?php

/*
 * Squelette : squelettes-dist/inclure/head.html
 * Date :      Fri, 14 Feb 2025 09:42:36 GMT
 * Compile :   Sun, 20 Apr 2025 10:58:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes-dist/inclure/head.html
// Temps de compilation total: 0.179 ms
//

function html_1f682c8b8de245238371014b674d2deb($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
	Head standard de toutes les pages ;
	les elements specifiques (title, description) figurent dans chaque squelette
 
') :
		'') .
'
<meta http-equiv="Content-Type" content="text/html; charset=' .
retablir_echappements_modeles(interdire_scripts($GLOBALS['meta']['charset'])) .
'" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Lien vers le flux RSS du site ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(generer_url_public('backend', '')))))!=='' ?
		((	'<link rel="alternate" type="application/rss+xml" title="' .
	_T('public|spip|ecrire:syndiquer_site') .
	'" href="') . $t1 . '" />') :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' 
      On appelle les feuilles de style 
      dans l\'ordre de la methode daisy http://daisy.tetue.net/img/daisy-nomenclature.png   

      1. Base CSS http://tinytypo.tetue.net/ ') :
		'') .
'   
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/reset.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/clear.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/font.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/links.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/typo.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/media.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/form.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/grid.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/layout.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' 2. Style SPIP et ses plugins ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/spip.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
retablir_echappements_modeles(pipeline('insert_head_css','<!-- insert_head_css -->')) .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' 3. Vos feuilles de style pour l\'habillage du site a) theme, b) variante, c) specifique ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/theme.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/variante.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(direction_css(find_in_path((string)'css/perso.css'))))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
	Balise permettant aux plugins d\'inserer des appels javascript ;
	4. C\'est ici que SPIP va inserer l\'appel de la librairie jQuery
	5. Et appeler a la fin compacte_head pour agreger et compacter tout le head dans des fichiers statiques si l\'option est cochee dans Configuration
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Filtre: insert_head_css_conditionnel"); ?'.'>'. pipeline('insert_head','<!-- insert_head -->')) .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' 6. Vos scripts ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(find_in_path((string)'js/script.js')))))!=='' ?
		('<script src="' . $t1 . '" type="text/javascript"></script>') :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Fierement fabrique avec SPIP ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(header_silencieux(spip_version()))))!=='' ?
		('<meta name="generator" content="SPIP ' . $t1 . '" />') :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Favicon ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(find_in_path((string)'favicon.ico'))))!=='' ?
		('<link rel="icon" type="image/x-icon" href="' . $t1 . (	'" />
' .
	(($t2 = strval(retablir_echappements_modeles(find_in_path((string)'favicon.ico'))))!=='' ?
			('<link rel="shortcut icon" type="image/x-icon" href="' . $t2 . '" />') :
			''))) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' meta robots ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'robots', null),true)))))!=='' ?
		('<meta name="robots" content="' . $t1 . '" />') :
		'') .
'
');

	return analyse_resultat_skel('html_1f682c8b8de245238371014b674d2deb', $Cache, $page, 'squelettes-dist/inclure/head.html');
}
