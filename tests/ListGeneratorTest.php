<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once('ListGenerator.php');

final class ListGeneratorTest extends TestCase
{
    /**
     * @group OneToHundredList
     */
    public function testIfGenerateOneToHundredListMethodReturnsAnArray(): void
    {
        $array = ListGenerator::generateOneToHundredList(); 
        $this->assertIsArray($array);
    }

    /**
     * @group OneToHundredList
     */
    public function testIfGenerateOneToHundredListMethodArrayHasHundredElements(): void
    {
        $array = ListGenerator::generateOneToHundredList();
        $expectedCount = 100;
        $this->assertCount(
            $expectedCount,
            $array
        );
    }

    /**
     * @group MultiplesOfThreeList
     */
    public function testIfGenerateListMultiplesOfThreeMethodReturnsAnArray(): void
    {
        $array = ListGenerator::generateListMultiplesOfThree();
        $this->assertIsArray($array);
    }

    /**
     * @group MultiplesOfThreeList
     */
    public function testIfGenerateListMultiplesOfThreeMethodReturnsOnlyMultiplesOfThree(): void
    {
        $arrayMultiplesOfThree = [];
        foreach (range(1, 100) as $number) {
            array_push($arrayMultiplesOfThree, $number * 3);
        }

        $generatedArray = ListGenerator::generateListMultiplesOfThree();

        $arrayDiff = array_diff($arrayMultiplesOfThree, $generatedArray);
        $expectedCount = 0;
        $this->assertCount(
            $expectedCount,
            $arrayDiff
        );
    }

    /**
     * @group MultiplesOfFiveList
     */
    public function testIfGenerateListMultiplesOfFiveMethodReturnsAnArray(): void
    {
        $array = ListGenerator::generateListMultiplesOfFive(); 
        $this->assertIsArray($array);
    }

    /**
     * @group MultiplesOfFiveList
     */
    public function testIfGenerateListMultiplesOfFiveMethodReturnsOnlyMultiplesOfFive(): void
    {
        $arrayMultiplesOfFive = [];
        foreach (range(1, 100) as $number) {
            array_push($arrayMultiplesOfFive, $number * 5);
        }

        $generatedArray = ListGenerator::generateListMultiplesOfFive();

        $arrayDiff = array_diff($arrayMultiplesOfFive, $generatedArray);
        $expectedCount = 0;
        $this->assertCount(
            $expectedCount,
            $arrayDiff
        );
    }

    /**
     * @group MultiplesOfThreeAndFiveList
     */
    public function testIfGenerateListMultiplesOfMultiplesOfThreeAndFiveMethodReturnsAnArray(): void
    {
        $array = ListGenerator::generateListMultiplesOfThreeAndFive(); 
        $this->assertIsArray($array);
    }

    /**
     * @group MultiplesOfThreeAndFiveList
     */
    public function testIfGenerateListMultiplesOfFiveMethodReturnsOnlyMultiplesOfThreeAndFive(): void
    {
        $arrayMultiplesOfThreeAndFive = [];
        foreach (range(1, 100) as $number) {
            if ($number % 3 == 0 && $number % 5 == 0) {
                array_push($arrayMultiplesOfThreeAndFive, $number);
            }
        }

        $generatedArray = ListGenerator::generateListMultiplesOfThreeAndFive();

        $arrayDiff = array_diff($arrayMultiplesOfThreeAndFive, $generatedArray);
        $expectedCount = 0;
        $this->assertCount(
            $expectedCount,
            $arrayDiff
        );
    }
}
?>