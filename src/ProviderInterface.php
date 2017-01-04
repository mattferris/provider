<?php

/**
 * Provider - Generic interface for providers
 * www.bueller.ca/provider
 *
 * ProviderInterface
 * @copyright Copyright (c) 2016, Matt Ferris
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
     * $consumer must implement ConsumerInterface or an exception will be thrown.
     *
     * @param mixed $consumer The consumer to be configured by the provider
     * @throws InvalidConsumerException
     */
    public function provides($consumer);
}

