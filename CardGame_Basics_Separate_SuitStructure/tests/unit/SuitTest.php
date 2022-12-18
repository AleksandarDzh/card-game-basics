<?php
namespace Src;

use PHPUnit\Framework\TestCase;
use Src\Suits\Suit;
use Src\Suits\SuitInterface;

class SuitTest extends TestCase
{
	function testFactoryPositiveCase()
	{
		$suit = Suit::factory('hearts');
		$this->assertTrue($suit instanceof SuitInterface);
		$this->assertSame('Hearts', $suit->type);
	}

	function testFactoryNegativeCase()
	{
		$this->expectExceptionMessage('Wrong Suit (aces)!');
		Suit::factory('aces');
	}

	function testCardTaking()
	{
		$suit = Suit::factory('hearts');
		$cards = $suit->take(array(1, 2, 3));

		$this->assertCount(3, $cards);

		$this->assertSame('Hearts', $cards[0]->suit);
		$this->assertSame('Hearts', $cards[1]->suit);
		$this->assertSame('Hearts', $cards[2]->suit);

		$this->assertSame('ace', $cards[0]->name);
		$this->assertSame('2', $cards[1]->name);
		$this->assertSame('3', $cards[2]->name);
	}
}