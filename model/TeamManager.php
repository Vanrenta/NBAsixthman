<?php 

require_once('model/Manager.php');

class TeamManager extends Manager{

	public function getTeam($postId){
		$db = $this->dbConnect();

		$team = $db->prepare('SELECT * FROM teams WHERE id=?');
		$team->execute(array($postId));

		return $team;
	}

	public function getTeams(){
		$db = $this->dbConnect();

		$teams = $db->query('SELECT * from teams ORDER BY city ASC');

		return $teams;
	}

	public function addTeam($franchise, $city, $creationDate){
		$db = $this->dbConnect();

		$team = $db->prepare('INSERT INTO teams(franchise, city, date_creation) VALUES (?, ?, ?)');
		$team->execute(array($franchise, $city, $creationDate));
	}

}