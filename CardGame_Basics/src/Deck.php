<?php

namespace Src;

class Deck
{
	/**
	 * remaining cards in the deck
	 * @var array
	 */
	public array $cards = array();
	
	private const SUITS = array(
		'clubs',
		'diamonds',
		'hearts',
		'spades'
	);

	function __construct()
	{
		$this->cards = $this->fillCards();
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
		foreach (self::SUITS as $suit)
		{
			foreach (Card::getRanks() as $rank)
			{
				$cardsDeck[] = new Card($suit, $rank);
			}
		}
		return $cardsDeck;
	}
}