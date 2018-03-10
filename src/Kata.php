<?php
namespace Kata;

class Kata
{
    private const JOKER = 'J';

    public function validate(array $cards): bool
    {
        $numberOfDifferentCards = \count(array_unique($cards));

        if ($numberOfDifferentCards > 2 || $numberOfDifferentCards === 1) return true;

        return $numberOfDifferentCards === 2 && \in_array(self::JOKER, $cards, true);
    }
}
