<?php

namespace App\Tests\Kata\CodeWars;

use App\Kata\CodeWars\Telepathy;
use PHPUnit\Framework\TestCase;

class TelepathyTest extends TestCase
{
    private Telepathy $telepathy;
    protected function setUp(): void
    {
        $this->telepathy = new Telepathy();
    }

    protected function tearDown(): void
    {
        unset($this->telepathy);
    }

    public function testPutInArrayKey(): void
    {
        $arrayIn = ['1:YES', '2:No'];
        $this->assertSame([1 => true, 2 > false], $this->telepathy->putInArrayKey($arrayIn));
    }

    public function testCleanArray()
    {
        $this->assertFalse(str_contains($this->telepathy->cleanString('| bonjour | hello |'), '|'));
        $this->assertFalse(str_contains($this->telepathy->cleanString('| bonjour 1 : true | hello 2 : false |'), ' '));
        $this->assertFalse(str_contains($this->telepathy->cleanString('| Card 1 : true | Card 2 : false |'), 'Card'));
    }
    public function testCut(): void
    {
        $this->assertSame(['bonjour', 'hello'], $this->telepathy->cut('bonjour;hello'));
    }
    public function testBasic()
    {
        $this->assertSame(47, $this->telepathy->magicShow("| Card 1: Yes | Card 2: Yes | Card 3: Yes | Card 4: Yes | Card 5: No | Card 6: Yes |"), "Test #1");
        $this->assertSame(46, $this->telepathy->magicShow("| Card 1: No | Card 2: Yes | Card 3: Yes | Card 4: Yes | Card 5: No | Card 6: Yes |"), "Test #2");
        $this->assertSame(55, $this->telepathy->magicShow("| Card 1: Yes | Card 2: Yes | Card 3: Yes | Card 4: No | Card 5: Yes | Card 6: Yes |"), "Test #3");
        $this->assertSame(38, $this->telepathy->magicShow("| Card 1: No | Card 2: Yes | Card 3: Yes | Card 4: No | Card 5: No | Card 6: Yes |"), "Test #4");
    }
}