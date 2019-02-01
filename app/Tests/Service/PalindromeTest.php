<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 2/1/19
 * Time: 6:14 PM
 */

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\Palindrome;

/**
 * Tests unitaire de la classe Plindrome
 *
 * Class PalindromeTest
 * @package App\Tests\Service
 */
class PalindromeTest extends TestCase
{
    /**
     *
     */
    public function testIsAPalindrome()
    {
        $isPalindrome = "Esope reste ici et se repose";
        $this->assertEquals(true, Palindrome::isPalindrome($isPalindrome));
    }

    /**
     *
     */
    public function testNotAPalindrome()
    {
        $notPalindrome = "raharosons";
        $this->assertEquals(false, Palindrome::isPalindrome($notPalindrome));
    }
}