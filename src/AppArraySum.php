<?php

namespace App;

final class AppArraySum
{
    private array $l1;
    private array $l2;

    public function __construct(array $l1, array $l2)
    {
        $this->l1 = array_reverse($l1);
        $this->l2 = array_reverse($l2);
    }

    public function validate(): bool
    {
        $count1 = count(array_filter($this->l1,
            fn($i) => is_int($i) && $i >= 0 && $i <= 9));
        $count2 = count(array_filter($this->l2,
            fn($i) => is_int($i) && $i >= 0 && $i <= 9));

        if (
            $count1 === 0
            || $count2 === 0
            || $count1 !== count($this->l1)
            || $count2 !== count($this->l2)
        ) {
            return false;
        }

        if ($this->l1[0] === 0 || $this->l2[0] === 0) {
            return false;
        }

        return true;
    }

    public function getSum(): array
    {
        if ($this->validate()) {
            $l1 = implode($this->l1);
            $l2 = implode($this->l2);

            return array_reverse(str_split((int)$l1 + (int)$l2));
        } else {
            return [0];
        }
    }

}
