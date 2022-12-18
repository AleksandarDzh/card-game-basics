<?php

use PHPUnit\Framework\TestCase;
use Src\Card;
use Src\Suits\Suit;

class CardTest extends TestCase
{	
	function testHumanReadableRepresentation()
	{
		$queenCard = Suit::factory('hearts');
		$this->assertSame('Queen of Hearts', (string) $queenCard->takeCard(12));
		
		$suitSpades = Suit::factory('spades');
		$this->assertSame('Ace of Spades', (string) $suitSpades->takeCard(1));

		$suitClubs = Suit::factory('clubs');
		$this->assertSame('10 of Clubs', (string) $suitClubs->takeCard(10));
	}

	function testIsFaceCard()
	{
		$suitHearts = Suit::factory('hearts');
		$faceCard = $suitHearts->takeCard(12);
		$this->assertTrue($faceCard->isFaceCard());

		$suitSpades = Suit::factory('spades');
		$numeralCard = $suitSpades->takeCard(2);
		$this->assertFalse($numeralCard->isFaceCard());
	}

	/**
	 * @dataProvider isHigherThanTestCases
	 */
	function testIsHigherThan(Card $card1, Card $card2, bool $expected)
	{
		$this->assertEquals(
			$expected,
			$card1->isHigherThan($card2)
		);
	}

	function isHigherThanTestCases(): array
	{
		$clubs =  Suit::factory('clubs')->take();
		$diamonds = Suit::factory('diamonds')->take();

		return array(
			array($clubs[1], $diamonds[0], true),
			array($clubs[0], $diamonds[1], false),
			array($clubs[1], $diamonds[1], false),
		);
	}

	/**
	 * @dataProvider isLowerThanTestCases
	 */
	function testIsLowerThan(Card $card1, Card $card2, bool $expected)
	{
		$this->assertEquals(
			$expected,
			$card1->isLowerThan($card2)
		);
	}

	function isLowerThanTestCases(): array
	{
		$clubs =  Suit::factory('clubs')->take();
		$diamonds = Suit::factory('diamonds')->take();

		return array(
			array($clubs[1], $diamonds[0], false),
			array($clubs[0], $diamonds[1], true),
			array($clubs[1], $diamonds[1], false),
		);
	}

	/**
	 * @dataProvider equalToTestCases
	 */
	function testIsEqualTo(Card $card1, Card $card2, bool $expected)
	{
		$this->assertEquals(
			$expected,
			$card1->isEqualTo($card2)
		);
	}

	function equalToTestCases(): array
	{
		$clubs =  Suit::factory('clubs')->take();
		$diamonds = Suit::factory('diamonds')->take();

		return array(
			array($clubs[1], $diamonds[0], false),
			array($clubs[0], $diamonds[1], false),
			array($clubs[1], $diamonds[1], true),
		);
	}

}