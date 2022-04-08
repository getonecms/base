<?php

declare(strict_types=1);

namespace OneCMS\Base\Domain\Service\Bootstrap;

use OneCMS\Base\Domain\Service\Dependency\DependencyServiceInterface;

/**
 * BootstrapServiceInterface
 * 
 * @package getonecms/ext-base
 * @version 0.0.1
 * @since   0.0.1
 * @author  Mohammed Shifreen
 */
interface BootstrapServiceInterface
{
    /**
     * Initialize the bootstrap service.
     *
     * @param object $app The application instance.
     */
    public function init(object $app): void;

    /**
     * Returns the dependecny service instance.
     *
     * @return DependencyServiceInterface
     */
    public function getDependency(): DependencyServiceInterface;
}
