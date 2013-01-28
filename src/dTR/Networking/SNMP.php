<?php

/*
 * dTR-SNMP is an SNMP Wrapper library
 * 
 * @author Mike Mackintosh
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public Licence
 * @copyright (c) 2013 - Mike Mackintosh
 * @version 0.7.9
 * @package dTR
 */

namespace dTR\Networking;

/**
 * dTR-SNMP is a wrapper class for SNMP functionality
 * 
 * @author Mike Mackintosh
 *
 */
class SNMP{
	
	public function __construct(){
		
		
		
	}
	
}


/**
 * dTR-SSH Exceptions
 * @author Mike Mackintosh
 *
 */
final class SNMPFailedToConnectException extends \Exception
{
	/**
	 * Sets the error message
	 *
	 * @todo Add logger output
	 */
	public function __construct($host, $port)
	{
		$message = "Failed to connect to host '{$host}' on port {$port}\n";

		// Call the parent constructor
		parent::__construct($message);
	}
}

/**
 * @author Mike Mackintosh
 *
 */
final class SNMPFailedToAuthenticate extends \Exception
{
	/**
	 * Sets the error message
	 *
	 * @todo Add logger output
	 */
	public function __construct($host, $username, $type)
	{
		$message = "Failed to authenticate '{$username}' by '{$type}' on host '{$host}'\n";

		// Call the parent constructor
		parent::__construct($message);
	}
}
