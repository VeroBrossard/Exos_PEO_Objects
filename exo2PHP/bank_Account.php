<?php

declare(strict_types=1);  // ?????


class Bank_Account
{

    private  $holder;

    /** @var int */
    private  $balance;

    /** @var int */
    private  $interest_rate;

    /** @var string */
    private  $currency;

    
//    ***** partie set  *********
    public function set_holder($holder){        
        $this->holder = $holder;
    }
    public function set_balance($balance){        
        $this->balance = $balance;
    }
    public function set_interest_rate($interest_rate){        
        $this->interest_rate = $interest_rate;
    }
    public function set_currency($currency){        
        $this->currency = $currency;
    }
       
//    ***** partie get  ******** 
    public function get_holder(){        
        return $this-> holder;
    }
    public function get_balance(){        
        return $this-> balance;
    }
    public function get_interest_rate(){        
        return $this-> interest_rate;
    }
    public function get_currency(){        
        return $this-> currency;
    }


    /**
     * Default constructor
     */
    public function __construct($holder,$balance,$interest_rate,$currency)
    {
        $this -> set_holder($holder);
        $this -> set_balance($balance);
        $this -> set_interest_rate($interest_rate);
        $this -> set_currency($currency);
        // $this -> get_attributes();
    }

    /**
     * @param int $montant
     */
    public function Credit(int $montant)
    {
      $this -> balance += $montant;
    }

    /**
     * @param int $montant
     */
    public function Debit(int $montant)
    {
        $this -> balance -= $montant;
    }

}
