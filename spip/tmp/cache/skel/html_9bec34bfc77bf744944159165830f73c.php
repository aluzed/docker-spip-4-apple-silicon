<?php

/*
 * Squelette : ../plugins-dist/compagnon/compagnon/accueil.html
 * Date :      Tue, 08 Apr 2025 10:03:32 GMT
 * Compile :   Sun, 20 Apr 2025 10:01:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/compagnon/compagnon/accueil.html
// Temps de compilation total: 0.244 ms
//

function html_9bec34bfc77bf744944159165830f73c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'fermer', null),true)) ?'' :' ')))))!=='' ?
		($t1 . (	'
' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'titre'] = (_T('compagnon:c_accueil_bienvenue',(array('nom' => (interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'nom', null)))))))))) .
	'
' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'action'] = (invalideur_session($Cache, generer_action_auteur('compagnon',(	'compris/' .
			(interdire_scripts(invalideur_session($Cache, ($Pile[0]['id'] ?? null))))),(invalideur_session($Cache, parametre_url(self(),'fermer','oui')))))))) .
	'
' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fermer'] = (filtre_balise_svg_dist(chemin_image((string)'fermer-16.svg'),_T('public|spip|ecrire:bouton_fermer'),'close')))) .
	'
' .
	retablir_echappements_modeles(boite_ouvrir((	(($t3 = strval((filtre_balise_svg_dist(chemin_image((string)'compagnon-picto-xx.svg'),'','picto-compagnon'))))!=='' ?
				($t3 . ' ') :
				'') .
		(table_valeur($Pile["vars"]??[], (string)'titre', null)) .
		(bouton_action((table_valeur($Pile["vars"]??[], (string)'fermer', null)),(table_valeur($Pile["vars"]??[], (string)'action', null)),'btn_link ajax'))), 'compagnon')) .
	'

<p>' .
	_T('compagnon:c_accueil_texte') .
	'</p>
<p>' .
	_T('compagnon:c_accueil_texte_revenir') .
	'</p>

' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_all', null),true)) ?'' :' ')))))!=='' ?
			($t2 . (	'
<div class="compagnon_helper">
	<p>' .
		_T('compagnon:bouton_tout_compris_explication') .
		'</p>
	' .
		retablir_echappements_modeles(bouton_action(_T('compagnon:bouton_tout_compris'),(invalideur_session($Cache, generer_action_auteur('compagnon','compris/all',(invalideur_session($Cache, parametre_url(self(),'_all','oui')))))),'ajax')) .
		'
</div>')) :
			'') .
	'
' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_all', null),true)) ?' ' :'')))))!=='' ?
			($t2 . '<script> ajaxReload(\'contenu\');</script>') :
			'') .
	'

' .
	retablir_echappements_modeles(boite_pied()) .
	'
	<span class="target" data-target="#bando1_menu_accueil"></span>
	' .
	retablir_echappements_modeles(bouton_action((filtre_ok_aleatoire_dist('')),(invalideur_session($Cache, generer_action_auteur('compagnon',(	'compris/' .
			(interdire_scripts(invalideur_session($Cache, ($Pile[0]['id'] ?? null))))),(invalideur_session($Cache, parametre_url(self(),'fermer','oui')))))),'ajax')) .
	'
' .
	retablir_echappements_modeles(boite_fermer()) .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_9bec34bfc77bf744944159165830f73c', $Cache, $page, '../plugins-dist/compagnon/compagnon/accueil.html');
}
