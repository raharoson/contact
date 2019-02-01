<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 2/1/19
 * Time: 1:27 PM
 */

namespace App\Service;

/**
 * Trait Palindrome
 * @package App\Service
 */
trait Palindrome
{
    /** Verifie si une chaine est palindrome
     * @param $string
     * @return bool
     */
    public static function isPalindrome($string)
    {
        $stringLower = strtolower(str_replace(" ", "", $string));

        $comp = (strrev($stringLower) === $stringLower);

        if (!$comp){

             return false;
        }

        return true;
    }
}