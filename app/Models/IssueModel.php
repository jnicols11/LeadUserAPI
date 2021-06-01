<?php

namespace App\Models;

class IssueModel {
	private $ID;
	private $customID;
	private $name;
	private $desc;
	private $priority;
	private $status;
	private $backlogID;
	private $sprintID;
	private $userID;
	
	// constructor
	public function __construct($ID, $customID, $name, $priority, $status, $backlogID) {
		$this->ID = $ID;
		$this->customID = $customID;
		$this->name = $name;
		$this->priority = $priority;
		$this->status = $status;
		$this->backlogID = $backlogID;
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
	public function getCustomID() {
		return $this->customID;
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
	public function getPriority() {
		return $this->priority;
	}

	/**
	 * @return mixed
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @return mixed
	 */
	public function getBacklogID() {
		return $this->backlogID;
	}

	/**
	 * @return mixed
	 */
	public function getSprintID() {
		return $this->sprintID;
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
	 * @param mixed $customID
	 */
	public function setCustomID($customID) {
		$this->customID = $customID;
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
	 * @param mixed $priority
	 */
	public function setPriority($priority) {
		$this->priority = $priority;
	}

	/**
	 * @param mixed $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @param mixed $backlogID
	 */
	public function setBacklogID($backlogID) {
		$this->backlogID = $backlogID;
	}

	/**
	 * @param mixed $sprintID
	 */
	public function setSprintID($sprintID) {
		$this->sprintID = $sprintID;
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

