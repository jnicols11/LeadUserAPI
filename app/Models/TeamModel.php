<?php

namespace App\Models;

class TeamModel {
	private $ID;
	private $name;
	private $leader;
	private $members;
	private $projectID;
	
	public function __construct($ID, $name, $leader, $members, $projectID) {
		$this->ID = $ID;
		$this->name = $name;
		$this->leader = $leader;
		$this->members = $members;
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
	public function getLeader() {
		return $this->leader;
	}

	/**
	 * @return mixed
	 */
	public function getMembers() {
		return $this->members;
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
	 * @param mixed $leader
	 */
	public function setLeader($leader) {
		$this->leader = $leader;
	}

	/**
	 * @param mixed $members
	 */
	public function setMembers($members) {
		$this->members = $members;
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

