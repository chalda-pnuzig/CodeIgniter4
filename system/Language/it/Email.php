<?php
/**
 * Email language strings.
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
	'mustBeArray'          => 'Il metodo di convalida della email deve passare un array.',
	'invalidAddress'       => 'Indirizzo email non valido: {0}',
	'attachmentMissing'    => 'Impossibile trovare il seguente allegato: {0}',
	'attachmentUnreadable' => 'Impossibile aprire l\'allegato: {0}',
	'noFrom'               => 'Non si può inviare una email senza l\'intestazione "From".',
	'noRecipients'         => 'Devi includere almeno uno dei seguenti destinatari: To, Cc, o Bcc',
	'sendFailurePHPMail'   => 'Impossibile inviare email utilizzando PHP mail(). Il tuo server potrebbe non essere configurato per inviare email utilizzando questo metodo.',
	'sendFailureSendmail'  => 'Impossibile inviare email utilizzando PHP Sendmail.  Il tuo server potrebbe non essere configurato per inviare email utilizzando questo metodo.',
	'sendFailureSmtp'      => 'Impossibile inviare email utilizzando PHP SMTP. Il tuo server potrebbe non essere configurato per inviare email utilizzando questo metodo.',
	'sent'                 => 'Il tuo messaggio è stato inviato con successo utilizzando il seguente protocollo: {0, string}',
	'noSocket'             => 'Impossibile aprire un socket su Sendmail. Si prega di verificare le impostazioni.',
	'noHostname'           => 'Non hai specificato un nome host SMTP.',
	'SMTPError'            => 'È stato rilevato il seguente errore SMTP: {0}',
	'noSMTPAuth'           => 'Errore: è necessario assegnare un nome utente e una password SMTP.',
	'failedSMTPLogin'      => 'Impossibile inviare il comando AUTH LOGIN. Errore: {0}',
	'SMTPAuthUsername'     => 'Impossibile autenticare il nome utente. Errore: {0}',
	'SMTPAuthPassword'     => 'Impossibile autenticare la password. Errore: {0}',
	'SMTPDataFailure'      => 'Impossibile inviare dati: {0}',
	'exitStatus'           => 'Exit status code: {0}',
];
