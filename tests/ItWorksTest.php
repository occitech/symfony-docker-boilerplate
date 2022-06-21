<?php

namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

// The KernelTestCase also makes sure your kernel is rebooted for each test. This assures that each test is run independently from each other.
class ItWorksTest extends KernelTestCase
{
    public function testItWorks()
    {
        self::bootKernel();

        $this->assertTrue(true);
    }
}