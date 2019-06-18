<?php
	
	// configuration site
	include "controleurs/config.php";
	

/*--------------------------------------------------------------------*/

	// creation objet

	include "models/bdd.class.php";
	$bddAcess = new BddAccess();
	$pdo = $bddAcess->connect($host, $dbuser, $dbmdp);

	include "controleurs/general.class.php";
	$general = new General();

	include "controleurs/session.class.php";
	Session::startSession();


/*--------------------------------------------------------------------*/

	// vues

	include "vues/header.php";

	if(!isset($_GET["page"])){
		include("vues/accueil.php");
	}
	else {

		switch($_GET["page"]){

			case "cat":
        		include("vues/categorie.php");
        		break;
    
    		case "article":
        		include("vues/article.php");
        		break;

        	case "artBlogger";
        		include("vues/articleBlogger.php");
        		break;

        	case "addArt";
        		include("vues/newArticle.php");
        		break;
        
    		case "connexion":
        		include("vues/connexion.php");
        		break;
        
    		case "inscription":
        		include("vues/inscription.php");
        		break;

        	case "compte":
        		include("vues/compteBlogger.php");
				break;
    
    		default:
        		include("vues/accueil.php");
       			break;		
		}
	}

	include "vues/footer.php";

?>