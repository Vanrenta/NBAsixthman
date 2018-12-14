<?php 

require_once('model/Manager.php');

class PlayerManager extends Manager{

	public function getPlayer($postId){
		$db = $this->dbConnect();

		$player = $db->prepare('SELECT id, lastname, firstname, team FROM players WHERE id=?');
		$player->execute(array($postId));

		return $player;
	}

	public function addPlayer($name, $firstname, $birthday, $team){
		$db = $this->dbConnect();

		$player = $db->prepare('INSERT INTO players(firstname, lastname, birthday, team) VALUES(?, ?, ?, ?)');
		$player->execute(array($firstname, $name, $birthday, $team));
	}

	public function searchPlayer($string){
		$db = $this->dbConnect();

		$player = $db->prepare('SELECT id, lastname, firstname FROM players WHERE lastname LIKE ?');
		$player->execute(array("%" . $string . "%"));

		return $player;
	}

}