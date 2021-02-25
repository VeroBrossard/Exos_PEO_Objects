<?php

declare(strict_types=1);


class Hero extends Character
{

    /** @var string */
    public  $_weapon;

    /** @var int */
    public  $_weaponDamages;

    /** @var string */
    public  $_shield;

    /** @var int */
    public $_ShieldValue;

    /**
     * Default constructor
     */
    public function __construct($new_weapon, $new_weaponDamages, $new_shield , $new_ShieldValue)
    {   
       parent :: __construct('Char2',400, 2000);
        $this ->set_name($new_weapon);
        $this -> get_name();
        $this ->set_name($new_weaponDamages);
        $this -> get_name();
        $this ->set_name($new_shield);
        $this -> get_name();
        $this ->set_name($new_ShieldValue);
        $this -> get_name();
        echo "new hero :" . parent:: get_health() . "<br>";
    }

    /**
     * 
     */
    public function set_weapon($new_weapon)
    { {
            $this->_weapon = $new_weapon;
        }
    }
    public function set_weaponDamages($new_weaponDamages)
    { {
            $this->_weaponDamages = $new_weaponDamages;
        }
    }
    public function set_shield($new_shield)
    { {
            $this->_shield = $new_shield;
        }
    }
    public function set_ShieldValue($new_ShieldValue)
    { {
            $this->_ShieldValue = $new_ShieldValue;
        }
    }

    /**
     * 
     */
    public function get_weapon()
    {
        return $this->_weapon;
    }
    public function get_weaponDamages()
    { {
        return $this->_weaponDamages ;
        }
    }
    public function get_shield()
    {
        return $this->_shield;
    }
    public function get_ShieldValue()
    {
        return $this->_ShieldValue;
    }


    /**
     * 
     */
    public function return_infos()
    {
        // TODO implement here
    }

}
