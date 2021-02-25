<?php

declare(strict_types=1);


class Hero extends Character
{

    /** @var string */
    private  $_weapon;

    /** @var int */
    public  $_weaponDamages;

    /** @var string */
    public  $_shield;

    /** @var int */
    public $_ShieldValue;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * 
     */
    public function set_weapon($new_weapon)
    { {
            $this->_weapon = $new_weapon;
        }
    }
    public function set_name($new_weaponDamages)
    { {
            $this->_weaponDamages = $new_weaponDamages;
        }
    }
    public function set_health($new_shield)
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
    public function  get_attribute()
    {
        // TODO implement here
    }


    /**
     * 
     */
    public function return_infos()
    {
        // TODO implement here
    }

}
