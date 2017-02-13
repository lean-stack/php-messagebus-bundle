<?php

namespace DependencyInjection;

use Lean\Bundle\MessageBusBundle\DependencyInjection\LeanMessageBusExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class LeanMessageBusExtensionTest extends AbstractExtensionTestCase
{
    public function testEmptyConfigRegistersNoMessagebusServices()
    {
        $this->load();

        $this->assertContainerBuilderNotHasService('lean.commandbus');
    }

    /**
     * Return an array of container extensions you need to be registered for each test (usually just the container
     * extension you are testing.
     *
     * @return ExtensionInterface[]
     */
    protected function getContainerExtensions()
    {
        return [new LeanMessageBusExtension()];
    }
}
