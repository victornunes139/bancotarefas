<?php

namespace app\models;
use app\core\Model;

class ActivityModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function list() {
		$sql = "SELECT * FROM activities";
		$query = $this->db->query($sql);
		return $query->fetchAll(\PDO::FETCH_OBJ);
	}

	public function insert($name, $description, $dateatime, $priority, $status) {
		$sql = "INSERT INTO activities SET name= :name, description= :description, dateatime= :dateatime, priority=:priority, status= :status";
		$query = $this->db->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':description', $description);
		$query->bindValue(':dateatime', $dateatime);
		$query->bindValue(':priority', $priority);
		$query->bindValue(':status', $status);
		$query->execute();

		return $this->db->lastInsertId();
	}

}
