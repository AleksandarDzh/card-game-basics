<?php

use PHPUnit\Framework\TestCase;
use Src\Card;
use Src\Deck;

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
		$expected = array(
			new Card('spades', 12),
			new Card('spades', 13)
		);
		$this->assertEquals($expected, (new Deck)->draw(2));
	}

	function testShuffle()
	{
		$deck = new Deck();
		$cards = $deck->cards;
		$deck->shuffle();
		$this->assertNotEquals($cards, $deck->cards);
	}
}