<?php

namespace Src;

use Src\Suits\Suit;

class Deck
{
	/**
	 * remaining cards in the deck
	 * @var array
	 */
	public array $cards = array();

	function __construct()
	{
		$this->cards = $this->fillCards();
	}

	function take(): array
	{
		return $this->cards;
	}

	function count(): int
	{
		return count($this->cards);
	}

	function shuffle()
	{
		shuffle($this->cards);
	}

	function draw(int $n): array
	{
		return array_splice($this->cards, -$n);
	}

	/**
	 * Fills all cards of all suits in the deck
	 *
	 */
	private function fillCards(): array
	{
		$cardsDeck = array();
		foreach (Suit::SUITS as $suit)
		{
			$suitObject = Suit::factory($suit);
			$suitCards = $suitObject->take(Card::getRanks());
			$cardsDeck = array_merge($cardsDeck, $suitCards);
		}
		return $cardsDeck;
	}
}