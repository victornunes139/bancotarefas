<?php
namespace app\controllers;
use app\core\Controller;
use app\models\ActivityModel;

class ActivityController extends Controller {

	public function index() {
		$activityModel = new ActivityModel();

		$data["activity"] = $activityModel->list();
		$data['view'] = "CRUD/Index";
		$this->load("template", $data);
	}

	public function addForm() {
		$data['view'] = "CRUD/Create";
		$this->load("template", $data);
	}

	public function add() {
		$activityModel = new ActivityModel();
		$name = $_POST['name'];
		$description = $_POST['description'];
		$dateatime = $_POST['dateatime'];
		$priority_id = $_POST['priority_id'];
		$status_id = $_POST['status_id'];
		$erro = $activityModel->validation($name, $description, $dateatime, $priority_id, $status_id);
		if (count($erro) > 0) {
			$array_values = array($name, $description);
			$data['values'] = $array_values;
			$data['view'] = "CRUD/Create";
			$data['erro'] = $erro;
			$this->load("template", $data);
		} else {
			$activityModel->insert($name, $description, $dateatime, $priority_id, $status_id);
			header("location:" . URL_BASE . "Activity" . "?msgAdd=success");
		}
	}

	public function editForm($id) {
		$var = null;
		$activity = new ActivityModel();
		$data["activity"] = $activity->getActivityModel($id);
		$data["priority"] = $activity->getPriority($var);
		$data["status"] = $activity->getStatus($var);
		$data['view'] = "CRUD/Edit";
		$this->load("template", $data);
	}

	public function edit() {
		$activityModel = new ActivityModel();
		$id = $_POST['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$dateatime = $_POST['dateatime'];
		$priority_id = $_POST['priority_id'];
		$status_id = $_POST['status_id'];
		$activityModel->edit($id, $name, $description, $dateatime, $priority_id, $status_id);
		header("location:" . URL_BASE . "Activity" . "?msgEdit=success");
	}

	public function deleteAction($id) {
		$activity = new ActivityModel();
		$activity->deleteProcess($id);
		header("location:" . URL_BASE . "Activity" . "?msgDelete=success");
		exit;
	}

	public function details($id) {
		$activity = new ActivityModel();
		$data["activity"] = $activity->getActivityModel($id);
		$data["priority"] = $activity->getPriority($data["activity"]->priority_id);
		$data["status"] = $activity->getStatus($data["activity"]->status_id);
		$data['view'] = "CRUD/Details";
		$this->load("template", $data);
	}

}