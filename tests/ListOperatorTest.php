<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once('ListOperator.php');

final class ListOperatorTest extends TestCase
{
    public function testIfInputStringOnIndexesOfAList(): void
    {
        $string = 'Change';
        $array = [1, 2, 3, 4, 5];
        $arrayOfIndexes = [2, 4];
        $expectedArray = [1, 'Change', 3, 'Change', 5];

        ListOperator::inputStringOnIndexesOfAList($string, $array, $arrayOfIndexes);

        $arrayDiff = array_diff($array, $expectedArray);
        $expectedCount = 0;
        $this->assertCount(
            $expectedCount,
            $arrayDiff
        );
    }

    public function testIfPrintsAList(): void
    {        
        $array = [1, 2, 3];
        $expectedOutput = '1<br>2<br>3<br>';
        
        ListOperator::printList($array);
        $this->expectOutputString($expectedOutput);
    }
}
?>