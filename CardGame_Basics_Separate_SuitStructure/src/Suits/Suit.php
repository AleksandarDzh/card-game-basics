<?php

namespace Src\Suits;

use Src\Card;
class Suit
{
	const SUITS = array(
		'clubs',
		'diamonds',
		'hearts',
		'spades'
	);	

	static function factory(string $suit)
	{
		$suit = strtolower($suit);
		switch ($suit)
		{
			case 'clubs':
				return new Clubs;
			case 'diamonds':
				return new Diamonds;
			case 'hearts':
				return new Hearts;
			case 'spades':
				return new Spades;
			default:
				throw new \Exception("Wrong Suit ({$suit})!");
		}
	}

	/**
	 * Returns the card for a suit
	 * @param  array|null $ranks - if no specific ranks are provided, will take all cards
	 */
	function take(array $ranks = null): array
	{
		$ranks = $ranks ?? Card::getRanks();
		$cards = array();
		foreach ($ranks as $rank)
		{
			$cards[] = $this->takeCard($rank);
		}
		return $cards;
	}

	function takeCard(int $rank): Card
	{
		return (new Card($this, $rank));
	}
}