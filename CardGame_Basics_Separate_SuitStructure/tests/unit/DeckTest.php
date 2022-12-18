<?php

use PHPUnit\Framework\TestCase;
use Src\Card;
use Src\Deck;
use Src\Suits\Suit;

class DeckTest extends TestCase
{
	function testCount()
	{
		$deck = new Deck();
		$this->assertSame(52, $deck->count());
	}

	function testDrawCount()
	{ 
		$deck = new Deck();
		$this->assertCount(10, $deck->draw(10));
		$this->assertSame(42, $deck->count());
	}

	function testDrawReturnedCards()
	{
		$deck = new Deck();
		$suitSpadesCardsOnly = $deck->draw(13);
		$this->assertEquals(
			$suitSpadesCardsOnly,
			Suit::factory('spades')->take()
		);
	}

	function testShuffle()
	{
		$deck = new Deck();
		$cards = $deck->take();
		$deck->shuffle();
		$this->assertNotEquals($cards, $deck->take());
	}
}