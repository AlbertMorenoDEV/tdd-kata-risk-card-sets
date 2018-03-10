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

        $response = $kata->validate('H', 'H', 'H');

        $this->assertTrue($response);
    }

    /**
     * @test
     */
    public function shouldReturnTrueIfAllCardsAreDifferent(): void
    {
        $kata = new Kata();

        $response = $kata->validate('C', 'S', 'H');

        $this->assertTrue($response);
    }

    /**
     * @test
     */
    public function shouldReturnTrueIfTwoAreDifferentAndOneIsJoker(): void
    {
        $kata = new Kata();

        $response = $kata->validate('C', 'S', 'J');

        $this->assertTrue($response);
    }

    /**
     * @test
     */
    public function shouldReturnTrueIfTwoAreEqualAndOneIsJoker(): void
    {
        $kata = new Kata();

        $response = $kata->validate('S', 'S', 'J');

        $this->assertTrue($response);
    }

    /**
     * @test
     */
    public function shouldReturnFalseIfTwoAreEqualAndOneIsCannon(): void
    {
        $kata = new Kata();

        $response = $kata->validate('H', 'H', 'C');

        $this->assertFalse($response);
    }

    /**
     * @test
     */
    public function shouldReturnFalseIfTwoAreEqualAndOneIsHorse(): void
    {
        $kata = new Kata();

        $response = $kata->validate('S', 'S', 'H');

        $this->assertFalse($response);
    }
}
