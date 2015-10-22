<?php

/**
 * Provider - Generic interface for providers
 * www.bueller.ca/provider
 *
 * ConsumerInterface
 * @copyright Copyright (c) 2015, Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * www.bueller.ca/provider/license
 */

namespace MattFerris\Provider;

interface ConsumerInterface
{
    /**
     * Passed an instance of a provider implementing ProviderInterface, then
     * calls the providers provide() method, passing an instance of itself as
     * the sole argument.
     *
     * @param \MattFerris\ProviderProviderInterface $consumer The consumer to
     *     be configured by the provider
     * @return self
     */
    public function register(ProviderInterface $provider);
}

