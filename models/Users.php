<?php

use Base\Users as BaseUsers;

/**
 * Skeleton subclass for representing a row from the 'users' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Users extends BaseUsers
{
	function setPassword($Hash,$User){
		$User->setPasswordHash($Hash);
	}
	function login($User,$PW){
		$hash = $User->getPasswordHash();
		if(password_verify($PW,$hash)){
			return true;
		}
		return false;
	}
}
