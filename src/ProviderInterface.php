<?php

/**
 * Provider - Generic interface for providers
 * www.bueller.ca/provider
 *
 * ProviderInterface
 * @copyright Copyright (c) 2015, Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * www.bueller.ca/provider/license
 */

namespace MattFerris\Provider;

interface ProviderInterface
{
    /**
     * Usually called by the consumer's register() method when the provider is
     * passed to it. The provider can then configure the consumer as needed.
     *
     * @param \MattFerris\Provider\ConsumerInterface $consumer The consumer to
     *     be configured by the provider
     */
    public function provides(ConsumerInterface $consumer);
}

