<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher; //include this line
use Cake\ORM\Entity;
class User extends Entity
{
	 protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
	
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

 
    protected $_hidden = [
        'password'
    ];
}
 

  
