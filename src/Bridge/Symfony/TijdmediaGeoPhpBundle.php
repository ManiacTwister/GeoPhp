<?php

/**
 * This file is part of tijdmedia/geophp
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tijdmedia\GeoPhp\Bridge\Symfony;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * TijdmediaGeoPhpBundle
 *
 * @package    tijdmedia/geophp
 * @subpackage bridge
 * @license    http://www.opensource.org/licenses/MIT The MIT License
 */
class TijdmediaGeoPhpBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $extension = new TijdmediaGeoPhpExtension();
        $extension->load(array(), $container);

        $container->registerExtension($extension);
    }
}
