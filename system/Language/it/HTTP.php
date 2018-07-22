<?php
/**
 * HTTP language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2018 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
return [
	// CurlRequest
	'missingCurl'                => 'CURL deve essere attivato per poter utilizzare la classe CURLRequest.',
	'invalidSSLKey'              => 'Impossibile impostare la chiave SSL. {0} non è un file valido.',
	'sslCertNotFound'            => 'Il certificato SSL non è stato trovato in: {0}',
	'curlError'                  => '{0} : {1}',
	// IncomingRequest
	'invalidNegotiationType'     => '{0} non è un tipo di negoziazione valido. Deve essere uno tra: media, charset, encoding, language.',
	// Message
	'invalidHTTPProtocol'        => 'Versione di protocollo HTTP non valido. Deve essere uno tra: {0}',
	// Negotiate
	'emptySupportedNegotiations' => 'È necessario fornire un array di valori supportati a tutti i Negotiations.',
	// RedirectResponse
	'invalidRoute'               => '{0, string} non è una route valida.',
	// Response
	'missingResponseStatus'      => 'La risposta HTTP manca di uno status code',
	'invalidStatusCode'          => '{0, string} non è uno status code HTTP valido',
	'unknownStatusCode'          => 'Status code HTTP sconosciuto fornito senza messaggio: {0}',
	// URI
	'cannotParseURI'             => 'Impossibile analizzare l\'URI: {0}',
	'segmentOutOfRange'          => 'Il segmento URI richiesto è fuori intervallo: {0}',
	'invalidPort'                => 'Le porte devono essere comprese tra 0 e 65535. È stato inviato: {0}',
	'malformedQueryString'       => 'Le query strings potrebbero non includere URI fragments.',
	// Page Not Found
	'pageNotFound'               => 'Pagina non trovata',
	'emptyController'            => 'Nessun Controller specificato.',
	'controllerNotFound'         => 'Non è stato trovato il Controller o il suo metodo: {0}::{1}',
	'methodNotFound'             => 'Il metodo del Controller non è stato trovato: {0}',
	// CSRF
	'disallowedAction'           => 'L'azione richiesta non è consentita.',
	
	// Uploaded file moving
	'alreadyMoved'				 => 'Il file caricato è già stato spostato.',
	'invalidFile'				 => 'Il file originale non è un file valido.',
	'moveFailed'				 => 'Impossibile spostare il file {0} in {1} ({2})',
];
