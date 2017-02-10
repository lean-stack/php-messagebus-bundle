<?php

namespace Lean\Bundle\MessageBusBundle;

use PHPUnit\Framework\TestCase;

class LeanMessageBusBundleTest extends TestCase
{

    public function testConfigurationAlias()
    {
        $bundle = new LeanMessageBusBundle();
        $this->assertEquals("lean_message_bus",$bundle->getContainerExtension()->getAlias());
    }
}
