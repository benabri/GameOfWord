<?php

class diviner_result
{
	private $mode = '';
	private $user = '';
	private $devin = '';
	private $oracle = '';
	private $userlvl = '';
	private $lang = '';
	private $devinName ='';
	
	private $previousSGDev = 0;
	private $previousSDev = 0;
	private $previousSGOracle = 0;
	private $previousSOracle = 0;
	private $pointsDev = 10;
	
	private $reussie = 'oui';

	public function set_mode($mode)
	{
		$this->mode = $mode;
	}

	public function process()
	{
		if ( $this->init() )
        {
            $this->score();;
            return $this->display();
        }
        return false;
	}

	private function init()
	
	{	
		include('./sys/load_iso.php');
		$db = db::getInstance();
		//Récupération des informaions de base: userid
		$this->user = user::getInstance();
		$this->devin = $this->user->id;
		$this->devinName = $this->user->username;
		$this->lang = $_SESSION["langDevin"];

		$sql = 'SELECT * FROM user_niveau WHERE userid=' . $this->devin;
		$result = $db->query($sql);
		$res = mysqli_fetch_assoc($result);
		$spoken_lang = explode(';',$res['spoken_lang']);
		$i=0;

		while ($i<count($spoken_lang)) {
			if(strcmp($iso[$this->lang],$spoken_lang[$i]) == 0){
				break;
			}
			$i++;
		}
		if($i!=count($spoken_lang)){
			$lang_lvl = explode(';',$res['niveau'])[$i];
		
			$sql = 'SELECT * FROM coeff_niveau_langue WHERE niveau_langue="' . $lang_lvl . '"';
			$result = $db->query($sql);
			$this->lang_lvl_pts = mysqli_fetch_assoc($result)['coeff'];
		}
		else{
			$this->lang_lvl_pts = 1; //par défaut
		}

		$this->userlvl = userlvl::getInstance();
		$this->points= $this->userlvl->get_points();
		$this->time = $this->userlvl->get_time();


		return true;
	}

	private function score()
	{
		if(!isset($_SESSION["motDeviner"]))
		{
			include('./sys/load_iso.php');
			require_once('./controllers/update_score_coeff.php');
			//connexion à la BD
			$db = db::getInstance();
			
			updateScoreDevinSucces($this->devin,$iso[$_SESSION["langDevin"]],$this->points);
			$pointsCoef = $this->points*$this->lang_lvl_pts;
			$_SESSION["pointsCoef"] = $pointsCoef;
			$db = db::getInstance();
			$sql = 'UPDATE parties 
					SET  reussie='.$db->escape((string) $this->reussie).'
					WHERE idDevin='.$this->devin.' ORDER BY tpsDevin DESC LIMIT 1 ';		
			$db->query($sql);


			//Récupération de enregistrementID
			$sql = 'SELECT enregistrementID FROM parties WHERE idDevin="'.$this->devin.'" ORDER BY tpsDevin DESC LIMIT 1 ';
	        $res1=$db->query($sql); 
	        $this->res2= mysqli_fetch_assoc($res1);
	        
	       // récupération de l'id de l'oracle et de la carte grâce à enregistrementID
			$sql = 'SELECT idOracle,carteID,OracleLang
	                    FROM enregistrement WHERE enregistrementID='.$this->res2['enregistrementID'].'';	
	        $res1=$db->query($sql); 
	        $res3= mysqli_fetch_assoc($res1);

	        
		updateScoreOracleDevinSucces($res3["idOracle"],$iso[$res3["OracleLang"]],$this->res2['enregistrementID']);
			$this->oracle=$res3["idOracle"];
			
			// récupération du contenu de la carte avec carteID
			require_once("./models/card.class.php");
			$carte = new Card($res3['carteID']);
	        $this->res= $carte->dirtify();

	        $_SESSION["motDeviner"] = true;//pour éviter de s'ajouter des points à l'infini avec des refresh

			return true;

		}
		else{
			header('Location: index.php?page.home.html');      
			return false;
		}
	}

	private function display()
	{
		$_SESSION["notif"]["notification_done"]["Devin"] = 'points';	 		
		include('./views/diviner.result.html');
        return true;
	}
}

?>
