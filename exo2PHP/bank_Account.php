<?php

declare(strict_types=1);  // ?????


class Bank_Account
{    /** @var string */
    private  $_holder;

    /** @var int */
    private  $_balance;

    /** @var int */
    private  $_interest_rate;

    /** @var string */
    private  $_currency;

    
//    ***** partie set  *********
    public function set_holder($newHolder){        
        $this->_holder = $newHolder;
    }
    public function set_balance($newBalance){        
        $this->_balance = $newBalance;
    }
    public function set_interest_rate($newInterest_rate){        
        $this->_interest_rate = $newInterest_rate;
    }
    public function set_currency($newCurrency){        
        $this->_currency = '&nbsp;'.$newCurrency;
    }
       
//    ***** partie get  ******** 
    public function get_holder(){        
        return $this-> _holder;
    }
    public function get_balance(){        
        return $this-> _balance;
    }
    public function get_interest_rate(){        
        return $this-> _interest_rate;
    }
    public function get_currency(){        
        return $this-> _currency;
    }


    /**
     * Default constructor
     */
    public function __construct($newHolder,$newBalance,$newInterest_rate,$newCurrency)
    {
        $this -> set_holder($newHolder);
        $this -> set_balance($newBalance);
        $this -> set_interest_rate($newInterest_rate);
        $this -> set_currency($newCurrency);
        // $this -> get_attributes();
    }

    /**
     * @param int $montant
     */
    public function Credit(int $montant)
    {
      $this ->_balance += $montant;
    }

    /**
     * @param int $montant
     */
    public function Debit(int $montant)
    {
        $this -> _balance -= $montant;
    }

}
