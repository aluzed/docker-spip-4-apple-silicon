<?php

/*
 * Squelette : ../plugins-dist/compagnon/compagnon/_boite.html
 * Date :      Tue, 08 Apr 2025 10:03:32 GMT
 * Compile :   Sun, 20 Apr 2025 10:01:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/compagnon/compagnon/_boite.html
// Temps de compilation total: 0.092 ms
//

function html_1ab60e6b2decba08cb9601454164c6a2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'fermer', null),true)) ?'' :' ')))))!=='' ?
		($t1 . (	'
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
		(interdire_scripts(table_valeur($Pile[0]??[], (string)'titre', null))) .
		(bouton_action((table_valeur($Pile["vars"]??[], (string)'fermer', null)),(table_valeur($Pile["vars"]??[], (string)'action', null)),'btn_link ajax'))), 'compagnon')) .
	'
' .
	retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'texte', null))) .
	retablir_echappements_modeles(boite_pied()) .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'target', null), ''),true)))))!=='' ?
			('<span class="target" data-target="' . $t2 . '"></span>') :
			'') .
	'
	' .
	retablir_echappements_modeles(bouton_action((filtre_ok_aleatoire_dist('')),(table_valeur($Pile["vars"]??[], (string)'action', null)),'ajax')) .
	'
' .
	retablir_echappements_modeles(boite_fermer()) .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_1ab60e6b2decba08cb9601454164c6a2', $Cache, $page, '../plugins-dist/compagnon/compagnon/_boite.html');
}
