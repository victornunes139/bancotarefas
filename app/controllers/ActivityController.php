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

	public function addform() {
		$data['view'] = "CRUD/Create";
		$this->load("template", $data);
	}

	public function add() {
		$activityModel = new ActivityModel();
		$name = $_POST['name'];
		$description = $_POST['description'];
		$dateatime = $_POST['dateatime'];
		$priority = $_POST['priority'];
		$status = $_POST['status'];
		$activityModel->insert($name, $description, $dateatime, $priority, $status);
		header("location:" . URL_BASE . "Activity");
	}
}