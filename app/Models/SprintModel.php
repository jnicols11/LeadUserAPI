<?php

namespace App\Models;

class SprintModel {
	private $ID;
	private $name;
	private $issues;
	private $deadline;
	private $teamID;
	private $projectID;
	
	public function __construct($ID, $name, $issues, $deadline, $teamID, $projectID) {
		$this->ID = $ID;
		$this->name = $name;
		$this->deadline = $deadline;
		$this->teamID = $teamID;
		$this->projectID = $projectID;
	}
	
	// Getters and Setters
	/**
	 * @return mixed
	 */
	public function getID() {
		return $this->ID;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
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
	public function getDeadline() {
		return $this->deadline;
	}

	/**
	 * @return mixed
	 */
	public function getTeamID() {
		return $this->teamID;
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
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param mixed $issues
	 */
	public function setIssues($issues) {
		$this->issues = $issues;
	}

	/**
	 * @param mixed $deadline
	 */
	public function setDeadline($deadline) {
		$this->deadline = $deadline;
	}

	/**
	 * @param mixed $teamID
	 */
	public function setTeamID($teamID) {
		$this->teamID = $teamID;
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

