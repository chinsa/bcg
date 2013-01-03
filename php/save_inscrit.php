<?php

	// get fields from request
	$firstname = $_REQUEST['firstName'];
	$lastname = $_REQUEST['lastName'];
	$civilite = $_REQUEST['civilite'];
	$email = $_REQUEST['email'];
	$addressPointRemise = $_REQUEST['addressPointRemise'];
	$localisation = $_REQUEST['localisation'];
	$address = $_REQUEST['address'];
	$boitePostale = $_REQUEST['boitePostale'];
	$postal = $_REQUEST['postal'];
	$cedex = $_REQUEST['cedex'];
	$city = $_REQUEST['city'];
	$nationality = $_REQUEST['nationality'];
	$naissance = date('Y-m-d', strtotime($_REQUEST['naissance']));
	$sex = $_REQUEST['sex'];
	$profession = $_REQUEST['profession'];
	$competences1 = $_REQUEST['competences1'];
	if($competences1 == "nothing"){
		$competences1 =="non";
	}
	$competences2 = $_REQUEST['competences2'];
	if($competences2 == "nothing"){
		$competences2 =="non";
	}
	$competences3 = $_REQUEST['competences3'];
	if($competences3 == "nothing"){
		$competences3 =="non";
	}
	$competences = $_REQUEST['competences'];
	
	$competencesSupp = 0;
	if (isset($_REQUEST['competencesSupp']) && $_REQUEST['competencesSupp'] == "1") {
		$competencesSupp = 1;
	}
	$emailTournois = 0;//return0IfNull($_REQUEST['emailTournois']);
	if (isset($_REQUEST['emailTournois']) && $_REQUEST['emailTournois'] == "1") {
		$emailTournois = 1;
	}
	$emailBenevoles = 0;//return0IfNull($_REQUEST['emailBenevoles']);
	if (isset($_REQUEST['emailBenevoles']) && $_REQUEST['emailBenevoles'] == "1") {
		$emailBenevoles = 1;
	}
	$tel1 = $_REQUEST['tel1'];
	$tel2 = $_REQUEST['tel2'];
	$gymnase = $_REQUEST['gymnase'];
	$accepteOtherGym = 0;//return0IfNull($_REQUEST['accepteOtherGym']);
	if (isset($_REQUEST['accepteOtherGym']) && $_REQUEST['accepteOtherGym'] == "1") {
		$accepteOtherGym = 1;
	}
	$noneedBadMag = 0;//return0IfNull($_REQUEST['noneedBadMag']);
	if (isset($_REQUEST['noneedBadMag']) && $_REQUEST['noneedBadMag'] == "1") {
		$noneedBadMag = 1;
	}
	$insurance = $_REQUEST['insurance'];
	$licence = $_REQUEST['licence'];
	$veutCours = 0;//return0IfNull($_REQUEST['veutCours']);
	if (isset($_REQUEST['veutCours']) && $_REQUEST['veutCours'] == "1") {
		$veutCours = 1;
	}
	$veutInterclub = 0;//return0IfNull($_REQUEST['veutInterclub']);
	if (isset($_REQUEST['veutInterclub']) && $_REQUEST['veutInterclub'] == "1") {
		$veutInterclub = 1;
	}
	$veutTournoi = 0;//return0IfNull($_REQUEST['veutTournoi']);
	if (isset($_REQUEST['veutTournoi']) && $_REQUEST['veutTournoi'] == "1") {
		$veutTournoi = 1;
	}
	$niveau = $_REQUEST['niveau'];
	$classment = $_REQUEST['classment' ];	
	
	
	include 'conn.php';
	
	/*'inscrits_civilite', 'inscrits_nom', 'inscrits_prenom', 'inscrits_date_attente', 'inscrits_gymnase', 'inscrits_accepte_autre_gymnase', 'inscrits_insurance', 'inscrits_licence', 'inscrits_email', 'inscrits_email_tournois', 
	 * 'inscrits_email_benevoles', 'inscrits_naissance', 'inscrits_sexe', 'inscrits_adresse_point_remise', 'inscrits_adresse_localisation', 'inscrits_adresse', 'inscrits_boite_postale', 'inscrits_postal', 'inscrits_cedex', 
	 * 'inscrits_ville', 'inscrits_tel1', 'inscrits_tel2', 'inscrits_profession', 'inscrits_competences_predefinis_1', 'inscrits_competences_predefinis_2', 'inscrits_competences_predefinis_3', 'inscrits_competences', 
	 * 'inscrits_competences_supp', 'inscrits_veut_cours', 'inscrits_veut_interclub', 'inscrits_veut_tournoi', 'inscrits_no_need_magazine', 'inscrits_niveau', 'inscrits_classement', 'inscrits_nationalite'*/
	
	/*$sql = "INSERT INTO inscrits (inscrits_civilite, inscrits_prenom, inscrits_nom, inscrits_email, inscrits_date_attente, inscrits_gymnase, inscrits_accepte_autre_gymnase, inscrits_insurance, inscrits_statut, inscrits_licence, inscrits_email_tournois, 
		inscrits_email_benevoles, inscrits_naissance, inscrits_sexe, inscrits_adresse_point_remise, inscrits_adresse_localisation, inscrits_adresse,inscrits_boite_postale,inscrits_postal,inscrits_cedex,inscrits_ville,
		inscrits_tel1,inscrits_tel2,inscrits_profession,inscrits_competences_predefinis_1,inscrits_competences_predefinis_2,inscrits_competences_predefinis_3,inscrits_competences,inscrits_competences_supp,inscrits_veut_cours,inscrits_veut_interclub,
		inscrits_veut_tournoi,inscrits_no_need_magazine,inscrits_niveau,inscrits_classement,inscrits_nationalite) 
		VALUES('$civilite','$firstname','$lastname','$email', NOW(), '$gymnase', '$accepteOtherGym', '$insurance', '$liste-attente','$licence', '$emailTournois', '$emailBenevoles', '$naissance', '$sex', '$addressPointRemise', '$localisation'
		, '$address', '$boitePostale', '$postal', '$cedex', '$city', '$tel1', '$tel2', '$profession', '$competences1', '$competences2', '$competences3', '$competences', '$competencesSupp', '$veutCours', '$veutInterclub', '$veutTournoi', 
		$noneedBadMag', '$niveau', '$classment', '$nationality')";*/
	
	$sql = "INSERT INTO inscrits_2013_2014 (inscrits_civilite, inscrits_prenom, inscrits_nom, inscrits_email, inscrits_date_attente, inscrits_gymnase, inscrits_accepte_autre_gymnase, inscrits_insurance,  
		inscrits_licence, inscrits_email_tournois, inscrits_email_benevoles, inscrits_naissance, inscrits_sexe, inscrits_adresse_point_remise, inscrits_adresse_localisation, inscrits_adresse,inscrits_boite_postale,
		inscrits_postal,inscrits_cedex,inscrits_ville,inscrits_tel1,inscrits_tel2,inscrits_profession,inscrits_competences_predefinis_1,inscrits_competences_predefinis_2,inscrits_competences_predefinis_3,
		inscrits_competences,inscrits_competences_supp,inscrits_veut_cours,inscrits_veut_interclub,inscrits_veut_tournoi,inscrits_no_need_magazine,inscrits_niveau,inscrits_classement,inscrits_nationalite) 
		VALUES('$civilite','$firstname','$lastname','$email', NOW(), '$gymnase', '$accepteOtherGym', '$insurance','$licence', '$emailTournois', '$emailBenevoles', '$naissance', '$sex', '$addressPointRemise', 
		'$localisation', '$address', '$boitePostale', '$postal', '$cedex', '$city', '$tel1', '$tel2', '$profession', '$competences1', '$competences2', '$competences3', '$competences', '$competencesSupp', '$veutCours', 
		'$veutInterclub', '$veutTournoi', '$noneedBadMag', '$niveau', '$classment', '$nationality')";	
	
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
	
	
	/*$result = mysql_query($sql);
	
	$id = mysql_insert_id(); 
	$success = false;
	if($id != null){
		$success = true;
	}
	
	if ($result){
		echo json_encode(array('success'=>$success, 'id'=>$id, 'age'=> 17));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}*/
?>