<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bcrypt
 *
 * @author JOAO
 */
class bcrypt {
    //put your code here
    protected static $_saltPrefix = '2a';
    // int
    protected static $defaltcost = 8;
    //limit lenght
    protected static $saltLength = 22;
    // hash
    function hash ($string, $cost = null){
        if (empty($cost)){
            $cost = self::defaltcost;
        }
        //salt
        $salt = self::generateRandonSalt();
        // hash da string
        $hashString = self::_generateHashString((int)$cost,$salt);
        //retorne
        return crypt($string, $hashString);
        
    }
    // o check
   function check($string, $hash){
       return (crypt($string,$hash)=== $hash);
   }
   
   function generateRandomSalt(){
       $seed = uniqid(mt_rand(),true);
       
       $salt = base64_encode($seed);
       $salt = str_replace('+', '.', $salt);
       
       return substr($salt,0,  self::$_saltLenght);
   }
   
   function _generateHashString($cost, $salt){
       return sprintf('$%s$%02d$%s$', self::$_saltPrefix, $cost, $salt);
   }
}
