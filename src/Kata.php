<?php
namespace Kata;

class Kata
{
    private const JOKER = 'J';

    public function validate(string $card1, string $card2, string $card3): bool
    {
        if ($this->thereIsJoker($card1, $card2, $card3) && $this->twoAreEqual($card1, $card2, $card3)) {
            return true;
        }

        if ($this->allAreDifferent($card1, $card2, $card3)) {
            return true;
        }

        return $this->allAreEqual($card1, $card2, $card3);
    }

    private function allAreEqual(string $card1, string $card2, string $card3): bool
    {
        return $card1 === $card2 && $card1 === $card3;
    }

    private function twoAreEqual(string $card1, string $card2, string $card3): bool
    {
        return $card1 === $card2 || $card1 === $card3 || $card2 === $card3;
    }

    private function allAreDifferent(string $card1, string $card2, string $card3): bool
    {
        return $card1 !== $card2 && $card1 !== $card3 && $card2 !== $card3;
    }

    private function thereIsJoker(string $card1, string $card2, string $card3): bool
    {
        return $card1 === self::JOKER || $card2 === self::JOKER || $card3 === self::JOKER;
    }
}
