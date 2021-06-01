<?php

namespace App\Models;

class BacklogModel {
	private $ID;
	private $issues;
	private $projectID;
	
	public function __construct($ID, $issues, $projectID) {
		$this->ID = $ID;
		$this->issues = $issues;
		$this->projectID = $projectID;
	}
	
	/**
	 * @return mixed
	 */
	public function getID() {
		return $this->ID;
	}

	/**
	 * @return mixed
	 */
	public function getIssues() {
		return $this->issues;
	}

	/**
	 * @return mixed
	 */
	public function getProjectID() {
		return $this->projectID;
	}

	/**
	 * @param mixed $ID
	 */
	public function setID($ID) {
		$this->ID = $ID;
	}

	/**
	 * @param mixed $issues
	 */
	public function setIssues($issues) {
		$this->issues = $issues;
	}

	/**
	 * @param mixed $projectID
	 */
	public function setProjectID($projectID) {
		$this->projectID = $projectID;
	}
	
	public function jsonSerialize() {
		$vars = get_object_vars($this);
		
		return $vars;
	}
}

