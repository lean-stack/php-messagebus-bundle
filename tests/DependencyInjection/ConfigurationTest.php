<?php

namespace DependencyInjection;

use Lean\Bundle\MessageBusBundle\DependencyInjection\Configuration;
use Matthias\SymfonyConfigTest\PhpUnit\ConfigurationTestCaseTrait;
use PHPUnit\Framework\TestCase;

class ConfigurationTest extends TestCase
{
    use ConfigurationTestCaseTrait;

    public function testEmptyConfigurationIsValid()
    {
        $this->assertConfigurationIsValid([
            []
        ]);
    }

    public function testCommandingRootChildrenWithDefaults()
    {
        $this->assertConfigurationIsValid([
            ['commanding' => null]
        ]);
    }

    /**
     * Return the instance of ConfigurationInterface that should be used by the
     * Configuration-specific assertions in this test-case
     *
     * @return \Symfony\Component\Config\Definition\ConfigurationInterface
     */
    protected function getConfiguration()
    {
        return new Configuration();
    }
}
