<?php
namespace PhraseApp\PaRequest;

use PhraseApp\PaUser;
use PhraseApp\PaResponse\PaResponseInterface;
use PhraseApp\PaResponse\PaAuthorizationResponse;

class PaAuthorizationRequest extends PaRequest {
	protected $baseUrl = 'https://phraseapp.com/api/v1/sessions';
	
	public function __construct( PaUser $user){
		$this->url = 
		$this->request_parameters = array(
			'username' => '',
			'password' => ''
		);
		
		parent:__constuct($user);
	}
	
	public function login(){
		$this->request_type = 'post';
		$this->request_parameters['username'] = $this->user->username;
		$this->request_parameters['password'] = $this->user->password;
		
		return new PaAuthorizationResponse( $this->getResponse() );
	}
}