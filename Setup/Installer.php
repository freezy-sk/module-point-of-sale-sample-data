<?php

namespace MarekViger\PointOfSaleSampleData\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{
    /**
     * Setup class for POS
     *
     * @var \MarekViger\PointOfSaleSampleData\Model\Pos
     */
    protected $posSetup;

    public function __construct(\MarekViger\PointOfSaleSampleData\Model\Pos $posSetup)
    {
        $this->posSetup = $posSetup;
    }

    public function install()
    {
        $this->posSetup->install(100);
    }
}
