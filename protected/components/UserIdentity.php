<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 */

    private $_user;
    private $_id;

	public function authenticate()
	{
       $this->_user = User::model()->findByAttributes(array('username'=>$this->username));
       if(!$this->_user){
           $this->errorCode = self::ERROR_USERNAME_INVALID;
       } elseif($this->_user->password !== crypt($this->password,$this->_user->password)){
           $this->errorCode = self::ERROR_PASSWORD_INVALID;
       }else {
           $this->_id = $this->_user->id;
           $this->setState('username', $this->_user->username);
           $this->errorCode = self::ERROR_NONE;
       }
       return !$this->errorCode;
	}

    public function getId(){
        return $this->_id;
    }
}