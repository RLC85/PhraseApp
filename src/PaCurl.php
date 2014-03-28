<?php

namespace PhraseApp;

class PaCurl {
	protected $url;
	protected $type;
	protected $protocol;
	protected $curl;
	protected $parameters;
	
	public function exectue() {
		$reponse = curl_exec( $this->curl );
		
		if( $curlResponse == 'Invalid auth_token' ) {
			throw new \RuntimeException('The PhraseApp request was terminated prematurely due to an invalid auth_token.');
		}
		
		return $response;
	}
	
	public function getParameters( $parameters = array() ) {
		if( !is_array( $parameters ) ) {
			throw new \InvalidArgumentException(class_name($this) . '::getParameters() requires parameters to be passed as an array ' . gettype( $parameters ) . ' given.');
		}
		return sprintf('%s?%s', $this->url, http_build_query($paramters) );
	}
	
	public function getParameters( $parameters = array() ) {
		if( !is_array( $parameters ) ) {
			throw new \InvalidArgumentException(class_name($this) . '::postParameters() requires parameters to be passed as an array ' . gettype( $parameters ) . ' given.');
		}
		return http_build_query($paramters);
	}
	
	public function init() {
		$this->curl =  curl_init();
	}
	
	public function get( $parameters = array() ) {
		$this->init();
		curl_setopt_array($this->curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL            => $this->url
		));
		
		if( !empty( $paramters ) ) {
			curl_setopt($this->curl, CURLOPT_URL, $this->getParameters( $parameters ) );
		}
		return $this->execute();
	}
	
	public function post() {
		$this->init();
		curl_setopt_array($this->curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL            => $this->url,
			CURLOPT_POST           => 1
		));
		if( !empty( $paramters ) ) {
			curl_setopt( $curlHandler, CURLOPT_POSTFIELDS, $this->postParameters( $parameters ) );
		}
		
		return $this->execute();
	}
	
	public function delete() {
		$this->init();
		curl_setopt_array($this->curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL            => $this->url,
			CURLOPT_CUSTOMREQUEST  => 'DELETE'
		));
	}
	
	public function put() {
		$this->init();
		curl_setopt_array($this->curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL            => $this->url,
			CURLOPT_PUT            => 1
		));
	}
}