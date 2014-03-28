<?php

namespace PhraseApp;

class PaUser {
	protected $username;
	protected $password;
	protected $auth_token;
	protected $project_auth_token;
	
	/**
	 * setUsername
	 * Sets the Username of the User class
	 * @param string $username
	 */
	public function setUsername($username) {
		$this->username = $username;
	}
	
	/**
	 * getUsername
	 * returns the username of the User class
	 * @return string
	 */
	public function getUsername() {
		return $this->username;
	}
	
	/**
	 * setPassword
	 * Sets the password for the User class
	 * @param string $password
	 */
	public function setPassword($password) {
		$this->password = $password;
	}
	
	/**
	 * getPassword
	 * gets the password string from the user class
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 * setAuthToken
	 * sets the AuthToken of the User class
	 * @param string $auth_token
	 */
	public function setAuthToken($auth_token) {
		$this->auth_token = $auth_token;
	}
	
	/**
	 * getAuthToken
	 * returns the auth_token of the User class
	 * @return string
	 */
	public function getAuthToken() {
		return $this->auth_token;
	}
	
	/**
	 * setProjectAuthToken
	 * sets the project_auth_token of the User class
	 * @param string $project_auth_token
	 */
	public function setProjectAuthToken($project_auth_token) {
		$this->projectAuthToken = $project_auth_token;
	}
	
	/**
	 * getProjectAuthToken
	 * returns the project_auth_token of the User class
	 * @return string
	 */
	public function getProjectAuthToken() {
		return $this->project_auth_token;
	}
}