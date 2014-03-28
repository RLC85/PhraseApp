<?php

namespace PhraseApp\PaRequest;

use PhraseApp\PaResponse\PaResponseInterface;
use PhraseApp\PaCurl;
use PhraseApp\PaUser;
use \InvalidArgumentException;

class PaRequest implements PaRequestInterface {
	
	public function __construct( PaUser $user){
		$this->user = $user;
		$this->curl = new PaCurl();
	}
	
	protected function request() {
		if( empty( $this->user ) || get_class($this->user) !== 'PhraseApp\PaUser' ) {
			throw new InvalidArgumentException('PhraseApp\PaRequest\\' . get_class($this) . '::$user must be set to instance of PhraseApp\PaUser' . gettype($this->user) . ' given.');
		}
	}
	
	protected function getResponse(){
		$call = $this->request_type;
		return $this->curl->$call();
	}
}