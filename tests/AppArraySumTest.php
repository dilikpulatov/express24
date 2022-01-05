<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\AppArraySum;

class AppArraySumTest extends TestCase
{
    /**
     * @dataProvider providerArraySum
     */
    public function testArraySum(array $result, array $l1, array $l2): void
    {
        echo PHP_EOL;
        echo sprintf(
            '[%s] + [%s] => [%s]',
            implode(',', $l1),
            implode(',', $l2),
            implode(',', $result)
        );
        $appArraySum = new AppArraySum($l1, $l2);
        $this->assertEquals($result, $appArraySum->getSum());
    }

    public function providerArraySum(): array
    {
        return [
          [
            [7,0,8],
            [2,4,3],
            [5,6,4]
          ],
          [
            [0],
            [0],
            [0]
          ],
          [
            [8,9,9,9,0,0,0,1],
            [9,9,9,9,9,9,9],
            [9,9,9,9]
          ],
        ];
    }
}
