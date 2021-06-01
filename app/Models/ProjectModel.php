<?php

namespace App\Models;

class ProjectModel {
	private $ID;
	private $name;
	private $desc;
	private $backlog;
	private $sprints;
	private $teams;
	private $userID;
	
	public function __construct($ID, $name, $userID) {
		$this->ID = $ID;
		$this->name = $name;
		$this->userID = $userID;
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
	public function getName() {
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getDesc() {
		return $this->desc;
	}

	/**
	 * @return mixed
	 */
	public function getBacklog() {
		return $this->backlog;
	}

	/**
	 * @return mixed
	 */
	public function getSprints() {
		return $this->sprints;
	}

	/**
	 * @return mixed
	 */
	public function getTeams() {
		return $this->teams;
	}

	/**
	 * @return mixed
	 */
	public function getUserID() {
		return $this->userID;
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
	 * @param mixed $desc
	 */
	public function setDesc($desc) {
		$this->desc = $desc;
	}

	/**
	 * @param mixed $backlog
	 */
	public function setBacklog($backlog) {
		$this->backlog = $backlog;
	}

	/**
	 * @param mixed $sprints
	 */
	public function setSprints($sprints) {
		$this->sprints = $sprints;
	}

	/**
	 * @param mixed $teams
	 */
	public function setTeams($teams) {
		$this->teams = $teams;
	}

	/**
	 * @param mixed $userID
	 */
	public function setUserID($userID) {
		$this->userID = $userID;
	}
	
	public function jsonSerialize() {
		$vars = get_object_vars($this);
		
		return $vars;
	}
}

