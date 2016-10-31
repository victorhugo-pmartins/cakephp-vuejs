<?php
App::uses('AppController', 'Controller');

/**
 * Tasks Controller
 *
 * @property Task $Task
 */
class TasksController extends AppController {

	public $components = array('RequestHandler');

	public function index() {
		$result = $this->Task->find('all', array('order'=>array('Task.sequence'=>'asc')));
		$tasks = array();
		foreach ($result as $task) {
			$tasks[] = $task["Task"];
		}
		$this->set(array(
			'tasks' => $tasks,
			'_serialize' => array('tasks')
		));
	}

	public function view($id) {
		$tasks = $this->Task->findById($id);
		$this->set(array(
			'task' => $tasks['Task'],
			'_serialize' => array('task')
		));
	}

	public function add() {
		$this->Task->create();
		if ($this->Task->save($this->request->data)) {
			$message = 'Saved';
		} else {
			$message = 'Error';
		}
		$this->set(array(
			'message' => $message,
			'_serialize' => array('message')
		));
	}

	public function edit($id) {
		$this->Task->id = $id;
		if ($this->Task->save($this->request->data)) {
			$message = 'Saved';
		} else {
			$message = 'Error';
		}
		$this->set(array(
			'message' => $message,
			'_serialize' => array('message')
		));
	}

	public function delete($id) {
		if ($this->Task->delete($id)) {
			$message = 'Deleted';
		} else {
			$message = 'Error';
		}
		$this->set(array(
			'message' => $message,
			'_serialize' => array('message')
		));
	}
}