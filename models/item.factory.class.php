<?php
require_once('./sys/constants.php');
require_once('./models/card.class.php');
require_once('./sys/db.class.php');//useless (called by Card)
class ItemFactory //a quick and dirty class…
{	//…to encapsulate some "complicated" frequent queries
	const ANY = 1;
	const CARD_NOT_ME = 2;
	const VALID_RECORDING_NOT_ME = 3;
	const LIMBO_RECORDING_ME_IF_POSSIBLE = 4;
	private $db;
	private $user_id;//(int)for now the items are selected based on the user
	private $lang = self::ANY;//(string iso639-1) language played in
	private $themes = array();//(array(int))the themes sought after
	private $query;
	//we don't use the level and that's a shame…

	/**
	 * Constructors setters and that kind of stuff
	 */
	public function __construct($userId, $langue, $theme = false){
		$this->db = db::getInstance();
		$this->user_id = $userId;
		if(is_string($langue)){
			$this->lang = $langue;
		}
		else{
			throw new Exception($langue." is not a string.");
		}
		if(is_array($theme)){
			$this->themes = $theme;
		}
	}

	private function generate_query($queryType){
		$res = true;
		switch ($queryType) {
			case self::CARD_NOT_ME:
				$this->query = "SELECT `cartes`.`idCarte` as `zeId` FROM `cartes` WHERE
						`cartes`.`langue`='$this->lang'
						AND `cartes`.`idDruide` != '$this->user_id' 
						AND `cartes`.`idCarte` NOT IN (
							SELECT `enregistrement`.`carteID` as`cardId` FROM `enregistrement` WHERE `enregistrement`.`idOracle`='$this->user_id'
							UNION SELECT `enregistrement`.`carteID` as`cardId` FROM `arbitrage`,`enregistrement` WHERE `arbitrage`.`enregistrementID` = `enregistrement`.`enregistrementID` AND `arbitrage`.`idDruide`='$this->user_id'
							UNION SELECT `enregistrement`.`carteID` as`cardId` FROM `parties`,`enregistrement` WHERE `parties`.`enregistrementID` = `enregistrement`.`enregistrementID` AND `parties`.`idDevin`='$this->user_id'
						) ORDER BY RAND() LIMIT 1;";
				break;
			case self::LIMBO_RECORDING_ME_IF_POSSIBLE:
				$this->query = "SELECT `enregistrement`.*, IF(
						`cartes`.`idDruide` = '$this->user_id'
						OR `enregistrement`.`idOracle`= '$this->user_id'
						OR `cartes`.`idCarte` IN (
							SELECT `enregistrement`.`carteID` FROM `enregistrement`,`arbitrage` WHERE `enregistrement`.`enregistrementID`=`arbitrage`.`enregistrementID` AND `arbitrage`.`idDruide` = '$this->user_id'
							UNION SELECT `enregistrement`.`carteID` FROM `enregistrement`,`parties` WHERE `enregistrement`.`enregistrementID`=`parties`.`enregistrementID` AND `parties`.`idDevin` = '$this->user_id'
					),1,0) as `poids`
					FROM `enregistrement`,`cartes` WHERE
						`enregistrement`.`idOracle` != '$this->user_id'
						AND `enregistrement`.`validation` = 'limbo'
						AND `enregistrement`.`carteID` = `cartes`.`idCarte`
						AND `cartes`.`langue` = '$this->lang'
					ORDER BY `poids` DESC, RAND() LIMIT 1";

				break;
			case self::VALID_RECORDING_NOT_ME:
				$this->query = "SELECT `enregistrement`.* FROM `enregistrement`,`cartes` WHERE
						`cartes`.`langue`='$this->lang'
						AND `cartes`.`idCarte` = `enregistrement`.`carteID`
						AND `cartes`.`idDruide` != '$this->user_id'
						AND `enregistrement`.`validation` = 'valid'
						AND `enregistrement`.`idOracle` != '$this->user_id' 
						AND `enregistrement`.`carteID` NOT IN (
							SELECT `enregistrement`.`carteID` as`cardId` FROM `arbitrage`,`enregistrement` WHERE `arbitrage`.`enregistrementID` = `enregistrement`.`enregistrementID` AND `arbitrage`.`idDruide`='$this->user_id'
							UNION SELECT `enregistrement`.`carteID` as`cardId` FROM `parties`,`enregistrement` WHERE `parties`.`enregistrementID` = `enregistrement`.`enregistrementID` AND `parties`.`idDevin`='$this->user_id'
						) ORDER BY RAND() LIMIT 1;";
				break;
			default:
				$res = false;
				break;
		}
		return true;
	}

	//returns a card object if the query yields 1 result and the number
	//of result otherwise, this should only be 0
	public function get_card($queryType){
		if($this->generate_query($queryType)){
			$this->db->query($this->query);
			$res = $this->db->affected_rows();
			if($res == 1){
				$res = new Card($this->db->fetch_object()->zeId);
			}
		}
		else{
			throw new Exception("Not a proper query type '$queryType'.");
		}
		return $res;
	}

	public function get_recording($queryType){
		if($this->generate_query($queryType)){
			$this->db->query($this->query);
			$res = $this->db->affected_rows();
			if($res == 1){
				$res = $this->db->fetch_object();
			}
		}
		else{
			throw new Exception("Not a proper query type '$queryType'.");
		}
		return $res;
	}
}
?>