<?php

/**
 * This file is part of tijdmedia/geophp.
 *
 */

namespace Tijdmedia\GeoPhp\Bridge\Symfony;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * TijdmediaGeoPhpExtension
 *
 * @package    tijdmedia/geophp
 * @subpackage bridge
 * @license    http://www.opensource.org/licenses/MIT The MIT License
 */
class TijdmediaGeoPhpExtension extends Extension
{
    /**
     * {@inheritDoc}
     *
     * @param mixed[]          $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->setDefinition('tijdmedia_geophp', new Definition('Tijdmedia\GeoPhp\GeoPhp'));
        $container->setAlias('geophp', 'tijdmedia_geophp');
    }
}
