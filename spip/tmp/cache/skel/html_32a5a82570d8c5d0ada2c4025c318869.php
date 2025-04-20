<?php

/*
 * Squelette : squelettes-dist/formulaires/recherche.html
 * Date :      Fri, 14 Feb 2025 09:42:36 GMT
 * Compile :   Sun, 20 Apr 2025 10:58:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes-dist/formulaires/recherche.html
// Temps de compilation total: 0.057 ms
//

function html_32a5a82570d8c5d0ada2c4025c318869($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_recherche' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
		(' ' . $t1) :
		'') .
'" id="formulaire_' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_champ', null),true))) .
'">
<form action="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
'" method="get"><div class="editer-groupe">
	' .
retablir_echappements_modeles(interdire_scripts(form_hidden(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true)))) .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'lang', null),true)))))!=='' ?
		('<input type="hidden" name="lang" value="' . $t1 . '" />') :
		'') .
'
	<label for="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_champ', null),true))) .
'">' .
_T('public|spip|ecrire:info_rechercher_02') .
'</label>
	<input type="' .
retablir_echappements_modeles((' ' ? 'search':'text')) .
'" class="search text" size="10" name="recherche" id="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_champ', null),true))) .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'recherche', null),true)))))!=='' ?
		(' value="' . $t1 . '"') :
		'') .
' accesskey="4" autocapitalize="off" autocorrect="off"
	/><input type="submit" class="btn submit" value="&gt;&gt;" title="' .
_T('public|spip|ecrire:info_rechercher') .
'" />
</div></form>
</div>
');

	return analyse_resultat_skel('html_32a5a82570d8c5d0ada2c4025c318869', $Cache, $page, 'squelettes-dist/formulaires/recherche.html');
}
