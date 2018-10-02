<?php

namespace app\models;
use app\core\Model;

class ActivityModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function list() {
		$sql = "SELECT
   activities.name as activity_name,activities.id as activity_id,description,dateatime,priority_id,status_id,
   priorities.name as priority_name,
   statuss.name as status_name
FROM
   activities
INNER JOIN
   priorities ON activities.priority_id = priorities.id
INNER JOIN
   statuss ON activities.status_id = statuss.id";
		$query = $this->db->query($sql);
		return $query->fetchAll(\PDO::FETCH_OBJ);
	}

	public function insert($name, $description, $dateatime, $priority_id, $status_id) {
		$sql = "INSERT INTO activities SET name= :name, description= :description, dateatime= :dateatime, priority_id=:priority_id, status_id= :status_id";
		$query = $this->db->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':description', $description);
		$query->bindValue(':dateatime', $dateatime);
		$query->bindValue(':priority_id', $priority_id);
		$query->bindValue(':status_id', $status_id);
		$query->execute();

		return $this->db->lastInsertId();
	}

	public function getActivityModel($id) {
		$result = array();
		$sql = "SELECT * FROM activities WHERE id = :id";
		$query = $this->db->prepare($sql);
		$query->bindValue(':id', $id);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result = $query->fetch(\PDO::FETCH_OBJ);
		}

		return $result;

	}

	public function getPriority($priority_id) {
		if ($priority_id) {
			$result = array();
			$sql = "SELECT * FROM priorities WHERE id = :priority_id";
			$query = $this->db->prepare($sql);
			$query->bindValue(':priority_id', $priority_id);
			$query->execute();

			if ($query->rowCount() > 0) {
				$result = $query->fetch(\PDO::FETCH_OBJ);
			}
			return $result;
		} else {
			$sql = "SELECT * FROM priorities";
			$query = $this->db->query($sql);
			return $query->fetchAll(\PDO::FETCH_OBJ);
		}
	}

	public function getStatus($status_id) {
		if ($status_id) {
			$result = array();
			$sql = "SELECT * FROM statuss WHERE id = :status_id";
			$query = $this->db->prepare($sql);
			$query->bindValue(':status_id', $status_id);
			$query->execute();

			if ($query->rowCount() > 0) {
				$result = $query->fetch(\PDO::FETCH_OBJ);
			}
			return $result;
		} else {
			$sql = "SELECT * FROM statuss";
			$query = $this->db->query($sql);
			return $query->fetchAll(\PDO::FETCH_OBJ);
		}
	}

	public function edit($id, $name, $description, $dateatime, $priority_id, $status_id) {
		$sql = "UPDATE activities SET name= :name, description= :description, dateatime= :dateatime, priority_id=:priority_id, status_id= :status_id WHERE id = :id";
		$query = $this->db->prepare($sql);
		$query->bindValue(':id', $id);
		$query->bindValue(':name', $name);
		$query->bindValue(':description', $description);
		$query->bindValue(':dateatime', $dateatime);
		$query->bindValue(':priority_id', $priority_id);
		$query->bindValue(':status_id', $status_id);
		$query->execute();
	}

	public function deleteProcess($id) {
		$sql = "DELETE FROM activities WHERE id = :id";
		$query = $this->db->prepare($sql);
		$query->bindValue(':id', $id);
		$query->execute();
	}

}
