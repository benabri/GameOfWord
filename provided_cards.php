<?php header('Content-Type: text/html; charset=UTF-8');
 ?>
	<head>
		<title>Importation de cartes créées par des contributeurs d'Innovalangues ou des collègues</title>
	</head>
	<body>
<?php
error_reporting(E_ALL);//error_reporting(0); désactiver
ini_set('display_errors', '1');
require('models/card.class.php');
?>
	<h2>Importing English cards</h2>
<?php
	$nb = 0;
	$tmpObj = new Card("en", NULL, "A2", "Nom", "1", "Phone", array("Talk","Mobile","Ring","Call","Hand","Distance","Signal"), array("Communication","Technologie")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "B1", "Nom", "1", "Orchid", array("Flower","Plant","Rare","Tropical","Humid","Leaf"), array("Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "B1", "Nom", "1", "Water", array("Liquid","Sea","Lake","Transparent","Tasteless","Spring"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A1", "Nom", "1", "Coffee", array("Drink","Black","Espresso","Bean","Arabica","Robusta"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A2", "Nom propre", "1", "Beatles", array("Band","Rock","Submarine","Lucy","Abbey Road","Let it be"), array("Musique")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A2", "Nom", "1", "Computer", array("Digital","Mouse","Monitor","Tablet","Program","Data"), array("Technologie")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A2", "Nom", "1", "Chair", array("Table","Desk","Office","Sit","Rocking chair","Furniture"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "B1", "Nom", "1", "Brain", array("Head","Think","Cortex","Grey cells"), array("Science")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A1", "Nom", "1", "Actor", array("Movie","Play","Film","Theatre","Character","Perform"), array("Profession","Art")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A2", "Nom", "1", "Judge", array("Law"," Justice"," Trial"," Court"," Arbitrate"), array("Profession","Law")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A2", "Nom", "1", "Editor", array("Journal","Book","Redactor","Publish","Revisor"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A2", "Nom", "1", "Web developer", array("Computer"," Internet"," Application"," Geek"," Nerd"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A2", "Nom", "1", "Coach", array("Training","Mentor","Advisor","Sport"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A1", "Nom", "1", "Room", array("House","Home","Bed","Sleep","Desk","Cupboard"), array("Lieu","Vie quotidienne")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A1", "Nom", "1", "Ball", array("Sphere","Round","Sport","Play","Inflate"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A1", "Nom", "1", "Pear", array("Fruit","Apple","Green","Tree","Song"), array("Végétal","Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A1", "Nom", "1", "Apple", array("Fruit","Computer","Pear","Green","Red","Tree"), array("Végétal","Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A1", "Nom", "1", "Key", array("Open","Door","USB","Car","Code"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A1", "Nom", "1", "Car", array("Automobile","Vehicle","Motor","Wheel","Road","Drive"), array("Objet","Transport")); $tmpObj->store();$nb++;
	$tmpObj = new Card("en", NULL, "A1", "Nom", "1", "Potato", array("vegetable","Fries","Mashed","plant tuber"), array("Végétal","Alimentation")); $tmpObj->store();$nb++;
	echo "<p><strong>$nb</strong> cards imported</p>";
?>
	<h2>Importación de cartas en Castellano</h2>
<?php
	$nb = 0; 
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Habitación", array("Casa"," Cama"," Escritorio"," Dormir"," Armario"," Noche"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Director", array("Jefe","Mandatario","Número uno"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Juez", array("Ley","Justicia","Abogado"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Paro", array("Trabajo","Desempleo"), array("Économie")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "", "Nom", "1", "Aumento", array("Subida","Descenso"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Ingeniero", array("Diplomado","Profesión","Técnico"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Adjectif", "1", "Joven", array("Chico","Muchacho","Viejo"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Adjectif", "1", "Viejo", array("Anciano","Antiguo","Joven"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Banco", array("Dinero","Ganar"), array("Économie")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Frambuesa", array("Fruta"), array("Végétal","Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Limón", array("Fruta","Amarillo"), array("Végétal","Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "B1", "Nom", "1", "Cerebro", array("Cortex","Pensar","Cabeza"), array("Science")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Cajera", array("Mercado","Tienda","Comercio"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Actor", array("Película","Cine","Interpretar","Jugar","Teatro","Protagonista"), array("Profession","Art")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "", "Adverbe", "1", "Realmente", array("Verdaderamente","Ciertamente"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Carpintero", array("Madera","Ebanista"), array("Profession")); $tmpObj->store();$nb++;

	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Químico", array("Química","Física"), array("Profession","Science")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Entrenador", array("Preparador","Equipo","Deporte"), array("Sport","Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Bailador", array("Bailarín","Danza"), array("Profession","Art")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Diseňador", array("Creador","Dibujante"), array("Profession","Art")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Economista", array("Economía","Dinero"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Editor", array("Redactor","Libro"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Educador", array("Educación","Profesor","Maestro"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Electricista", array("Electricidad","Corriente","Tensión"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Agricultor", array("Agricultura","Tierra","Campesino"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Bombero", array("Fuego","Apagar","Urgencias"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Estudiante", array("Profesor","Estudios","Diploma"), array("Éducation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Periodista", array("Actualidad","Noticias","Informaciones"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Librero", array("Libro","Lecture","Biblioteca"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "B1", "Nom", "1", "Microbiologista", array("Biología","Vida","Naturaleza"), array("Profession","Science")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Músico", array("Musica","Instrumento"), array("Art")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Fotógrafo", array("Fotografía","Cámara"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Físico", array("Física","Cuerpo"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Oficial de policía", array("Policía","Criminales"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Psicólogo", array("Psicologia","Mente"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Arbitro", array("Juez","Intermediario"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Reportero", array("Periodista"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Secretaria", array("Oficina","Asistente","Empleada"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Político", array("Política","Gobernante"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Inspector", array("Vigilar","Inspeccionar"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Veterinario", array("Médico","Animales"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Programador", array("Geek","Informático","Informática"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "B1", "Nom", "1", "Escritor", array("Bolígrafo","Lápiz","Libro"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "B1", "Nom", "1", "Zoólogo", array("Zoología","Animal"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Médico", array("Medicina","Hospital","Enfermo"), array("Profession","Santé")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "B1", "Nom", "1", "Anestesista", array("Anestesia","Operación","Hospital"), array("Profession","Santé")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Enfermera", array("Curar","Médico","Hospital"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "B1", "Nom", "1", "Comadrona", array("Nacimiento","Bebé","Parto"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "B1", "Nom", "1", "Cirujano", array("Cirujía","Estética","Operación"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Traductor", array("Lengua"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Nom", "1", "Barbero", array("Barba","Peluquero"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Adverbe", "1", "Prudentemente", array("Prudencia","Cuidado","Cautela"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Adverbe", "1", "Correctamente", array("Correcto","Falso"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "B1", "Adverbe", "1", "Apasionadamente", array("Pasión"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Adverbe", "1", "Fácilmente", array("Fácil","Difícil"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adjectif", "1", "Rápido", array("Lento"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Adverbe", "1", "Tranquilamente", array("Tranquilo","Nervioso"), array("Caractère")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Adverbe", "1", "Pacientemente", array("Paciente","Impaciente","Tranquilamente"), array("Caractère")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Adverbe", "1", "Rápidamente", array("Rápido","Lento"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Adverbe", "1", "Silenciosamente", array("Silencio","Ruido"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "B1", "Adjectif", "1", "Extranjero", array("Fuera","Internacional","Nacional"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adverbe", "1", "Aquí", array("Acá","Allí"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adverbe", "1", "Abajo", array("Bajo","Arriba"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adverbe", "1", "Lejos", array("Cerca","Distancia"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Casa", array("Aapartamento","Familia","Piso"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adverbe", "1", "Dentro", array("Fuera","Internacional"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adverbe", "1", "Ahora", array("Actualmente","Hoy"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adverbe", "1", "Fuera", array("Exterior","Dentro"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adverbe", "1", "Exterior", array("Interior","Fuera"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A2", "Pronom", "1", "Alguien", array("Nadie","Persona","Individuo"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adverbe", "1", "Allí", array("Ahí","Aquí"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Nom", "1", "Metro", array("Subterráneo","Transporte"), array("Technologie","Transport")); $tmpObj->store();$nb++;
	$tmpObj = new Card("es", NULL, "A1", "Adverbe", "1", "Superior", array("Inferior","Arriba"), array("Lieu")); $tmpObj->store();$nb++;
	echo "<p><strong>$nb</strong> cards imported</p>";
?>

	<h2>Importation des cartes françaises</h2>
<?php
	$nb=0;
	$tmpObj = new Card("fr", NULL, "A1", "Nom", "1", "Dessin", array("Crayon","Feuille","Papier","Fusain","Illustration","Bulle"), array("Art")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Saucisson", array("Saucisse sèche","Cochon","Gras","Charcuterie","Rosette","Apéritif"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Verbe", "1", "Tranquilliser", array("Calme","Stress","Douleur","Soulagement","Sécurité","Apaiser"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Chevreuil", array("Bois","Mammifère","Herbivore","Gibier","Ruminant","Cervidé"), array("Animaux")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A1", "Nom", "1", "Chocolat", array("Cacao","Barre","Sucre","Lait","Carré","Diabète","Hyperglycémie"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Télévision", array("Regarder","Film","Série","Journal","Publicité","Antenne","Satellite"), array("Divertissement")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A1", "Nom", "1", "Baguette", array("Pain","Boulanger","Farine","Mie","Magique","Céréales"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Cadenas", array("Clé","Fermer","Porte","Serrure","Verrou"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Bronzage", array("Soleil","Plage","Peau","Crème solaire","Brûlure","Cancer"), array("Vacances")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A1", "Nom", "1", "Poire", array("Fruit","Vert","Pomme","Arbre","Sucré"), array("Alimentation","Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Doctoresse", array("Femme","Santé","Malade","Hôpital","Thèse"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Forge", array("Marteau","Feu","Enclume","Métal","Chauffer"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A1", "Nom", "1", "Pomme de terre", array("Légume","Frite","Purée","Chips","Tubercule"), array("Alimentation","Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom propre", "1", "Astérix", array("Bande dessinée","Obélix","Potion magique","Gaulois","Romain"), array("Personnage")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Poney", array("Animal","Cheval","Petit","Mammifère","Sabot","Licorne"), array("Animaux")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Ballon", array("Rond","Football","Sport","Jouer","Gonfler"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Adjectif", "1", "Moussant", array("Bulle","Bain","Nettoyer","Émulsionnant","Écumant"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Jeux vidéo", array("Console","Ordinateur","Jouer","Playstation","Addiction"), array("Divertissement","Jeu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Rouille", array("Fer","Couleur","Oxydation","Métal","Sauce"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Tarot", array("Carte","Atout","Bout","Excuse","Chien"), array("Divertissement","Jeu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Salade", array("Légume","Vert","Plante","Feuille","Composée"), array("Alimentation","Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Mante", array("Insecte","Vert","Pattes","Religieuse","Femelle","Mâle"), array("Animaux")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A1", "Nom", "1", "Chat", array("Animal","Miauler","Griffe","Félin","Compagnie","Mammifère"), array("Animaux")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Surveillant", array("Personne","Prison","Regarder","Garde"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C2", "Nom", "1", "Expéditionnaire", array("Exportateur","Chargé","Marchandise","Envoyer","Militaire"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Plante", array("Végétal","Vert","Arbre","Feuille"), array("Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Aulne", array("Arbre","Végétal","Vert","Espèce","Bois"), array("Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom propre", "1", "Mercredi des cendres", array("Jour","Fête","Semaine","Feu","Chandeleur","Mardi Gras"), array("Religion")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Corymbe", array("Végétal","Fleur","Botanique","Inflorescence","Astéracées"), array("Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom propre", "1", "Aleijadinho", array("Architecte","Brésil","Rococo","Église","Baroque"), array("Personnage")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom propre", "1", "Kansas City", array("Ville","Missouri","États-Unis","Film","Eminem"), array("Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom propre", "1", "Bram Van Velde", array("Peintre","Pays-Bas","Abstrait","Tachisme","École de Paris"), array("Personnage")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Maillet", array("Outils","Marteau","Masse","Thor","Sculpture"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Ramille", array("Arbre","Végétal","Bois","Branche","brindille"), array("Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Oligo-élément", array("Minéral","Nutriment","Vitamines","Cuivre","Fer"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Joyaux", array("Bijoux","Couronne","Précieux","Or","Argent"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A1", "Adjectif", "1", "Long", array("Court","Centimètre","Grand","Saut"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A1", "Nom", "1", "Zéro", array("Chiffre","Numéro","Nombre","Nul","Rien","Mathématiques"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Terreur", array("Peur","Horreur","Frayeur","Panique","Effroi","Révolution Française"), array("Sens")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Tunique", array("Vêtement","Chemise","Long","Tissus","Oignon"), array("Vêtement","Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Rédacteur", array("Journaliste","Métier","Presse","Écrire","Texte"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Contenant", array("Verre","Boite","Bol","Contenir","Récipient","Cabas"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Clé", array("Ouvrir","Porte","USB","Voiture","Passe-partout","Code"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Ouvrier", array("Travailleur","Travailler","Journalier","Artisan","Salarié","Prolétariat"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A1", "Nom", "1", "Salutation", array("Salut","Bonjour","Bonsoir","Ça va","Formule","Politesse"), array("Savoir-vivre")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Expression idiomatique", "1", "Donner du fil à retordre", array("Difficulté","Problème","Gêne","Peine","Embarras","Tourment"), array("Expression")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Silence", array("Bruit","Son","Calme","Entourage","Se taire","Tapage","Vacarme"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Espion", array("Renseignement","Agent","Espionnage","Surveillance","Informateur","Mouchard"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Feuille", array("Arbre","École","Stylo","Dessiner","Écrire","Recopier"), array("Objet","Végétal")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom propre", "1", "Monopoly", array("Plateau","Société","Jeu","Investissement","Rue","Argent"), array("Jeu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Embouteillage", array("Voiture","Route","Klaxon","Bouchon","Incident","Ralentissement"), array("Vie quotidienne")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Choucroute", array("Choux","Alsace","Saucisse","Lard","Choux fermenté"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Lunettes", array("Yeux","Vue","Verres","Lentilles","Myopie","Ophtalmologue"), array("Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Test", array("Examen","Diplôme","Apprentissage","Évaluation","Épreuve","Expérimentation"), array("Éducation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Téléphone", array("Allo","Appeler","SMS","Sonner","Mobile","Décrocher","Raccrocher","Coup de fil","Réseau"), array("Technologie")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Douche", array("Cheveux","Shampoing","Lavage","Frotter","Savonner","Rincer"), array("Vie quotidienne")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Tournoi", array("Match","Joueur","Compétition","Champion","Élimination","Équipier"), array("Sport")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Boulangerie", array("Boulanger","Pain","Acheter","Fromage","Farine","Pâtisserie","Viennoiserie"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A1", "Nom", "1", "La Poste", array("Lettre","Timbre","Facteur","Boîte aux lettres","Courrier","Affranchir"), array("Communication")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Chien", array("Animal","Maison","Fidèle","Chiot","Mordre","Aboyer","Rage"), array("Animaux")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Ordinateur", array("Travail","Informatique","Souris","Clavier","Bureautique","Algorithme"), array("Technologie","Objet")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Voiture", array("Rouler","Feu","Conduire","Volant","Véhicule","Bagnole","Transport","Déplacement"), array("Technologie","Vie quotidienne")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Nom", "1", "Élevage", array("Animal","Ferme","Nourrir","Engraisser","Agriculture","Agronomie"), array("Animaux")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "A2", "Nom", "1", "Appartement", array("Maison","Habiter","Dormir","Chambre","Immeuble","Domicile","Logement","Location","Pied-à-terre","Agence immobilière"), array("Vie quotidienne","Lieu")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Monoréacteur", array("Avion","Moyen de transport","Pilote","Aile","Réacteur","Moteur","Aéronef"), array("Technologie")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B1", "Adjectif", "1", "Impoli", array("Mal élevé","Grossier","Rude","Désobligeant","Incivil","Malotru"), array("Savoir-vivre")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Ban", array("Mariage","Publication","Mairie","Exil","Proclamation","Acclamation"), array("Droit")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Allaitement", array("Alimentation","Maternité","Seins","Nourriture","Nourrisson","Téter","Lactation","Glande mammaire"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Polenta", array("Galette","Mais","Semoule","Farine","Savoie","Val d'Aoste"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Adjectif", "1", "Cynique", array("Gentil","Immoral","Impudent","Effronté","Préceptes de la nature","Anticonformisme"), array("Caractère")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Aligot", array("Auvergne","Purée","Plat","Spécialité culinaire","Tome","Gastronomie"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom propre", "1", "Herbert George Wells", array("Auteur","Écrivain","Grande Bretagne","Science-fiction","La Guerre des mondes","La Machine à explorer le temps"), array("Littérature")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Formol", array("Solution","Laboratoire","Composé organique","conservation","Tissus","Cancérigène"), array("Science")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Bouclier", array("Arme","Métal","Arme ancienne","Se défendre","Attaque","Police","Anti-émeute"), array("Militaire")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Addiction", array("Drogue","Besoin","Dépendance","Se poudrer le nez","Stupéfiant","Toxicomane","Réhabilitation"), array("Santé")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Adjectif", "1", "Kaléidoscopique", array("Optique","Polychromie","Variable","Incertain","Transitoire","Éphémère"), array("Science")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "C1", "Nom", "1", "Injure", array("Gros mot","Grossièreté","Juron","Insulte","Offense","Agression","Irrespect"), array("Savoir-vivre")); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Adjectif", "1", "Patriarcal", array("Famille","Père","Chef","Autorité","Système","Féodal"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("fr", NULL, "B2", "Nom", "1", "Édifice", array("Bâtiment","Construire","Architecte","Pierre","Monument","Bâtisse"), array()); $tmpObj->store();$nb++;
	echo "<p><strong>$nb</strong> cards imported</p>";
?>

	<h2>Importazione delle carte da gioco in italiano</h2>
<?php
	$nb=0;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Oceano", array("Grande","Mare","Sale","Atlantico","Pacifico"), array("Environnement")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Bancomat", array("Automatico","Prelievo","Sportello","carta di credito","Banca"), array("Banque")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Adjectif", "1", "Bilingue", array("Parlare","Lingua","Due","Tradurre","Diverse"), array("Culture","Communication")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B2", "Expression idiomatique", "1", "Legge del Taglione", array("Occhio","Dente","Vendetta","Danno","Uccidere"), array("Vengeance")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Corso", array("Classe","Insegnante","Lingua","Seguire","Università"), array("Éducation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom propre", "1", "Alpi", array("Montagne","Neve","Italia","Francia","Sci"), array("Environnement")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Universo", array("Big Bang","Spazio","Galassia","Infinito","Pianeta"), array("Science")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Cellulare", array("Telefono","Mobile","Parlare","SMS","Chiamare"), array("Technologie")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Mistero", array("Segreto","Giallo","Rivelare","Oscuro","Nascondere"), array()); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Euro", array("Moneta","Europa","Cambio","Pagare","Soldi"), array("Banque","Commerce")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Bistecca", array("Carne","Cotta","Ristorante","Al sangue","Mucca"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Sveglia", array("Orlogio","Mattina","Telefono","Ora","Alzarsi"), array("Vie quotidienne","Objets")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Influenza", array("Febbre","Malattia","Termometro","Tosse","Antibiotico"), array("Santé")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Bandito", array("Rubare","Criminale","Sardegna","Vendetta","Organizzazione"), array("Crime")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Mafia", array("Mafioso","Sicilia","Criminale","Rito","Boss"), array("Crime")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Siccità", array("Caldo","Acqua","Secco","Agricoltura","Problema"), array("Environnement")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Laurea", array("Università","Master","Esame","Profession","Lavoro"), array("Etudes")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Municipio", array("Comune","Amministrazione","Palazzo","Sindaco","Città"), array("Collectivité")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Groviera", array("Svizzera","Buco","Formaggio","Emmenthal","Mangiare"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Resto", array("Soldi","Moneta","Rimanere","Avanzare","Pagare"), array("Commerce")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Sacerdote", array("Prete","Cardinale","Parroco","Vescovo","Religione"), array("Religion")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Pranzo", array("Colazione","Cena","Mangiare","Invitare","Mezzogiorno"), array("Vie quotidienne")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Fungo", array("Veleno","Commestibile","Mangiare","Bosco","Cucinare"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B2", "Nom", "1", "Inquinamento", array("Aria","Macchina","Industria","Smog","Ambiente"), array("Environnement")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom propre", "1", "Nutella", array("Cioccolato","Merenda","Ferrero","Crêpe","Mangiare"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom propre", "1", "Tatuaggio", array("Corpo","colore","Disegno","Pelle","Permanente"), array("Art")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Art", array("Opera","Scuola","Colori","Museo","Dipingere"), array("Art")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Traffico", array("Macchine","Inquinamento","Città","Problema","Rumore"), array("Ville")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Volcano", array("Etna","Vesuvio","Uscire","Fuoco","Cenere"), array("Environnement","Nature")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Ingegnere", array("Edifici","Costruire","Lavoro","Laurea","Università"), array("Profession")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Cinema", array("Art","Film","Vedere","Telecamera","Attore"), array("Divertissement","Art")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Stuzzicadente", array("Legno","Dente","Alimentation","Johnny Stecchino","Film"), array("Hygiène")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "B1", "Nom", "1", "Concerto", array("Musica","Cantante","Strumenti","Ascoltare","Teatro"), array("Divertissement")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Arancio", array("Albero","Fruita","Arancione","Clementine","Pianta"), array("Alimentation")); $tmpObj->store();$nb++;
	$tmpObj = new Card("it", NULL, "A2", "Nom", "1", "Anniversario", array("Ricorrenza","Compleanno","Matrimonio","Auguri","Celebrare"), array("Société")); $tmpObj->store();$nb++;
	echo "<p><strong>$nb</strong> cards imported</p>";
?>
	</body>
</html>