<?php

namespace PhraseApp\PaRequest;

interface PaRequestInterface {
	protected $user;
	protected $response;
	protected $request_type;
	protected $request_parameters;
	protected $curl;
}