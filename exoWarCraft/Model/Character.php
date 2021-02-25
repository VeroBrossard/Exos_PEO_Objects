<?php

declare(strict_types=1);


class Character
{

       /** @var string  */
       private $_name;

    /** @var int */
    private $_health;

    /** @var int */
    private $_rage;


    /**
     * setters
     */
    public function set_name($new_name)
    { {
            $this->_name = $new_name;
        }
    }
    public function set_health($new_health)
    { {
            $this->_health = $new_health;
        }
    }
    public function set_rage($new_rage)
    { {
            $this->_rage = $new_rage;
        }
    }
    /**
     * getters
     */
    public function get_name()
    { {
        return $this->_name ;
        }
    }
    public function get_health()
    {
        return $this->_health;
    }
    public function get_rage()
    {
        return $this->_rage;
    }
    /**
     * Default constructor
     */
    public function __Construct( $new_name, $new_health, $new_rage)
    {
        $this ->set_name($new_name);
        $this -> get_name();
        $this ->set_health($new_health);
        $this ->set_rage($new_rage);
        $this -> get_health();
        $this -> get_rage();

    }
 }
