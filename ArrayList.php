<?php


use JetBrains\PhpStorm\Pure;

class ArrayList
{
    public array|string $arrayList;

    public function __construct()
    {
        $this->arrayList = [];
    }

    public function add($object): void
    {
        array_push($this->arrayList, $object);
    }

    public function size(): int
    {
        return count($this->arrayList);
    }


    #[Pure] public function get(int $index): mixed
    {
        if ($index < $this->size() ) {
            return $this->arrayList[$index];
       }else {
            die("ERROR in ArrayList.get");
        }
    }

}