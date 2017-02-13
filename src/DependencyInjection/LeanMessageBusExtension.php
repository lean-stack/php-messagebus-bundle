<?php

namespace Lean\Bundle\MessageBusBundle\DependencyInjection;

use Lean\MessageBus\CommandBus;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

class LeanMessageBusExtension extends ConfigurableExtension
{
    /**
     * Configures the passed container according to the merged configuration.
     *
     * @param array $mergedConfig
     * @param ContainerBuilder $container
     */
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        //$container->setDefinition('lean.commandbus', new Definition(CommandBus::class, [[]]));
    }
}