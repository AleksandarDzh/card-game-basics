<?php

use PHPUnit\Framework\TestCase;
use Src\Card;

class CardTest extends TestCase
{	
	function testHumanReadableRepresentation()
	{
		$queenCard = new Card('hearts', 12);
		$this->assertSame('Queen of Hearts', (string) $queenCard);

		$aceCard = new Card('spades', 1);
		$this->assertSame('Ace of Spades', (string) $aceCard);

		$tenCard = new Card('clubs', 10);
		$this->assertSame('10 of Clubs', (string) $tenCard);
	}

	function testIsFaceCard()
	{
		$faceCard = new Card('hearts', 12);
		$this->assertTrue($faceCard->isFaceCard());

		$numeralCard = new Card('spades', 2);
		$this->assertFalse($numeralCard->isFaceCard());
	}

	function testIsHigherThan()
	{
		$lowerCard = new Card('spades', 1);
		$higherCard = new Card('hearts', 12);

		$this->assertTrue(
			$higherCard->isHigherThan($lowerCard)
		);

		$this->assertFalse(
			$lowerCard->isHigherThan($higherCard)
		);
	}

	function testIsLowerThan()
	{
		$lowerCard = new Card('spades', 1);
		$higherCard = new Card('hearts', 12);

		$this->assertFalse(
			$higherCard->isLowerThan($lowerCard)
		);

		$this->assertTrue(
			$lowerCard->isLowerThan($higherCard)
		);
	}

	function testIsEqualsTo()
	{
		$lowerCard = new Card('spades', 1);
		$higherCard = new Card('hearts', 12);

		$this->assertFalse(
			$higherCard->isEqualTo($lowerCard)
		);

		$this->assertFalse(
			$lowerCard->isEqualTo($higherCard)
		);

		$equalCard = new Card('clubs', 1);
		$this->assertTrue(
			$lowerCard->isEqualTo($equalCard)
		);
	}
}