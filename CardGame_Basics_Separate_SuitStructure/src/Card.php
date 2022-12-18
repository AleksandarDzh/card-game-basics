<?php

namespace Src;
use Src\Suits\SuitInterface;

class Card
{
	public string $name;

	/**
	 * an integer from 1 to 13. ("ace" is 1, "king" is 13)
	 * @var integer
	 */
	public int $rank;

	/**
	 * representing the suit of the card
	 * @var string
	 */
	public string $suit;

	private const RANKS2NAMES = array(
		1 =>	'ace',
		2 =>	'2',
		3 =>	'3',
		4 =>	'4',
		5 =>	'5',
		6 =>	'6',
		7 =>	'7',
		8 =>	'8',
		9 =>	'9',
		10 =>	'10',
		11 =>	'jack',
		12 =>	'queen',
		13 =>	'king'
	);

	function __construct(SuitInterface $suit, int $rank)
	{
		$this->suit = $suit->type;
		$this->rank = $rank;
		$this->name = self::RANKS2NAMES[$rank] ?? 'Unknown';
	}

	function __toString(): string
	{
		return ucfirst($this->name) . ' of ' . $this->suit;
	}

	static function getRanks(): array
	{
		return array_keys(self::RANKS2NAMES);
	}

	function isFaceCard(): bool
	{
		return $this->rank > 10;
	}

	function isHigherThan(Card $card): bool
	{
		return $this->rank > $card->rank;
	}

	function isLowerThan(Card $card): bool
	{
		return $this->rank < $card->rank;
	}

	function isEqualTo(Card $card): bool
	{
		return $this->rank == $card->rank;
	}
}