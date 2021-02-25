<?php

declare(strict_types=1);  // ?????


class Bank_Account
{
    /** @var string */
    private  $_holder;

    /** @var int */
    private  $_balance;

    /** @var int */
    private  $_interest_rate;

    /** @var string */
    private  $_currency;


    //    ***** partie set  *********
    public function set_holder($newHolder)
    {
        $this->_holder = $newHolder;
    }
    public function set_balance($newBalance)
    {
        $this->_balance = $newBalance;
    }
    public function set_interest_rate($newInterest_rate)
    {
        $this->_interest_rate = $newInterest_rate;
    }
    public function set_currency($newCurrency)
    {
        $this->_currency = '&nbsp;' . $newCurrency;
    }

    //    ***** partie get  ******** 
    public function get_holder()
    {
        return $this->_holder;
    }
    public function get_balance()
    {
        return $this->_balance;
    }
    public function get_interest_rate()
    {
        return $this->_interest_rate;
    }
    public function get_currency()
    {
        return $this->_currency;
    }


    /**
     * Default constructor
     */
    public function __construct($newHolder, $newBalance, $newInterest_rate, $newCurrency)
    {
        $this->set_holder($newHolder);
        $this->set_balance($newBalance);
        $this->set_interest_rate($newInterest_rate);
        $this->set_currency($newCurrency);
        // $this -> get_attributes();
    }

    /**
     * @param int $montant
     */
    public function Credit(int $montant)
    {
        $this->_balance += $montant;
    }

    /**
     * @param int $montant
     */
    public function Debit(int $montant)
    {
        $this->_balance -= $montant;
    }

    //  ***** afficahge OK1 attributs par varDump
    public function test()
    {
        //affichage des attributs vardump
        var_dump(get_object_vars($this));
    }

    public function liste()
    {
        foreach ($this as $attr => $val) {
            echo $attr, ' => ', $val;
        }
    }
}

//  //******  création new compte pour test    */
// $my_Cpte = new Bank_Account('Chère petite Madame', 100000, 6.7, '€');


// **** OK1 affichage des attributs par vardump avec leurs valeurs
//$my_Cpte->test();


// *** external call OK2
//echo "la classe de _my_Cpte est " . get_class($my_Cpte) ."<br>";

//*   *** PAS OK    */
// echo "var_dump(_class_attributes)";
// $class_attributes = get_object_vars($my_Cpte);
// var_dump($class_attributes);

/*   *** PAS OK  renvoie vide !!  */
// $class_vars = get_class_vars(get_class($my_Cpte));
// echo "essai get_class_vars(get_class())" . "<br>";
// foreach ($class_vars as $name => $value) {
//     echo "essai " . $name . ": " . $value . "\n";
// }
// echo "sortie get_class_vars(get_class())" . "<br>";


//  **** OK3 ** ceci affiche la liste des méthodes de la classe Bank_Account
// $class_methods = get_class_methods('Bank_Account');
// foreach ($class_methods as $method_name) {
//     echo $method_name . "<br>";
// }
// ou
//$class_methods = get_class_methods(new myclass());

//echo "sortie de bank-account <br>";
