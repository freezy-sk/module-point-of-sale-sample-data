<?php

namespace MarekViger\PointOfSaleSampleData\Model;

class Pos
{
    /**
     * @var \MarekViger\PointOfSale\Model\PosFactory
     */
    protected $posFactory;

    public function __construct(\MarekViger\PointOfSale\Model\PosFactory $posFactory)
    {
        $this->posFactory = $posFactory;
    }

    public function install(int $howMany)
    {
        for ($i = 1; $i <= $howMany; $i++) {
            $pos = $this->posFactory->create();
            $pos->setData([
                'name' => sprintf('Point Of Sale %d', $i),
                'address' => sprintf('Street %d, City', random_int(1, $howMany * 100)),
                'is_available' => random_int(0, 1),
            ]);
            $pos->save();
        }
    }
}
