<?php
namespace Tests\Unit;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateNewInstance(): void
    {
        $kata = new Kata();

        $this->assertInstanceOf(Kata::class, $kata);
    }

    /**
     * @test
     */
    public function shouldReturnTrueIfAllCardsAreEqual(): void
    {
        $kata = new Kata();
        $cards = ['H', 'H', 'H'];

        $response = $kata->validate($cards);

        $this->assertTrue($response);
    }

    /**
     * @test
     */
    public function shouldReturnTrueIfAllCardsAreDifferent(): void
    {
        $kata = new Kata();
        $cards = ['C', 'S', 'H'];

        $response = $kata->validate($cards);

        $this->assertTrue($response);
    }

    /**
     * @test
     */
    public function shouldReturnTrueIfTwoAreDifferentAndOneIsJoker(): void
    {
        $kata = new Kata();
        $cards = ['C', 'S', 'J'];

        $response = $kata->validate($cards);

        $this->assertTrue($response);
    }

    /**
     * @test
     */
    public function shouldReturnTrueIfTwoAreEqualAndOneIsJoker(): void
    {
        $kata = new Kata();
        $cards = ['S', 'S', 'J'];

        $response = $kata->validate($cards);

        $this->assertTrue($response);
    }

    /**
     * @test
     */
    public function shouldReturnFalseIfTwoAreEqualAndOneIsCannon(): void
    {
        $kata = new Kata();
        $cards = ['H', 'H', 'C'];

        $response = $kata->validate($cards);

        $this->assertFalse($response);
    }

    /**
     * @test
     */
    public function shouldReturnFalseIfTwoAreEqualAndOneIsHorse(): void
    {
        $kata = new Kata();
        $cards = ['S', 'S', 'H'];

        $response = $kata->validate($cards);

        $this->assertFalse($response);
    }
}
