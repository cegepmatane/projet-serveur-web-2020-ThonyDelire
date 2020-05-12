<?php

include "connexion.php"; // copie-colle le code qui est dans connexion
// prepare l'objet $basededonnees pour qu'on puisse parler à la base de données

$MESSAGE_SQL_LISTE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom FROM voiture";
//echo $MESSAGE_SQL_LISTE_VOITURE;

$requeteListeVoiture = $basededonnees->prepare($MESSAGE_SQL_LISTE_VOITURE);
$requeteListeVoiture->execute();
$listeVoitures = $requeteListeVoiture->fetchAll();
//print_r($listeVoitures);
?>
<xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

<channel>
	<title>Liste des voitures</title>
	<atom:link href="http://localhost/journal/feed/" rel="self" type="application/rss+xml" />
	<link>http://localhost/voiture-referencement/</link>
	<description>Les meilleurs voitures de l'annee</description>
	<lastBuildDate>Mon, 18 Mar 2019 14:27:41 +0000	</lastBuildDate>
	<language>fr-CA</language>
	<sy:updatePeriod> hourly	</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>
	<generator>Programmation manuelle</generator>
<?php 

	foreach($listeVoitures as $voiture)
	{
	?>
	<item>
		<title><?=$voiture['titre']?></title>
		<link>http://localhost/voiture-referencement/voiture.php?voiture=<?=$voiture['id']?></link>
		<pubDate>Mon, 18 Mar 2019 14:27:41 +0000</pubDate>
		<category><![CDATA[Voiture]]></category>
		<guid isPermaLink="false">http://localhost/voiture-referencement/voiture.php?voiture=<?=$voiture['id']?></guid>
		<description><![CDATA[<?=$voiture['resume']; ?>]]></description>
		<content:encoded><![CDATA[<?=$voiture['resume']; ?>]]></content:encoded>
	</item>
	<?php
	}

?>
							
	</channel>
</rss>