<?php

namespace App\Tests\Kata\CodeWars;

use PHPUnit\Framework\TestCase;

class TelepathyTest extends TestCase
{
  public function testPutInArrayKey(): void
  {
    $arrayIn = ['1:YES', '2:No'];
    $this->assertSame([1 => true, 2 > false], putInArrayKey($arrayIn));
  }
  
  public function testCleanArray()
  {
    $this->assertFalse(str_contains(cleanString('| bonjour | hello |'), '|'));
    $this->assertFalse(str_contains(cleanString('| bonjour 1 : true | hello 2 : false |'), ' '));
    $this->assertFalse(str_contains(cleanString('| Card 1 : true | Card 2 : false |'), 'Card'));
  }
  public function testCut(): void
  {
    $this->assertSame(['bonjour', 'hello'], cut('bonjour;hello'));
  }
  public function testBasic()
  {
    $this->assertSame(47, magicShow("| Card 1: Yes | Card 2: Yes | Card 3: Yes | Card 4: Yes | Card 5: No | Card 6: Yes |"), "Test #1");
    $this->assertSame(46, magicShow("| Card 1: No | Card 2: Yes | Card 3: Yes | Card 4: Yes | Card 5: No | Card 6: Yes |"), "Test #2");
    $this->assertSame(55, magicShow("| Card 1: Yes | Card 2: Yes | Card 3: Yes | Card 4: No | Card 5: Yes | Card 6: Yes |"), "Test #3");
    $this->assertSame(38, magicShow("| Card 1: No | Card 2: Yes | Card 3: Yes | Card 4: No | Card 5: No | Card 6: Yes |"), "Test #4");
  }
}