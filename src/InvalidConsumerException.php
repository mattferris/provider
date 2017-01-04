<?php

/**
 * Provider - Generic interface for providers
 * www.bueller.ca/provider
 *
 * InvalidConsumerException.php
 * @copyright Copyright (c) 2016, Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * www.bueller.ca/provider/license
 */

namespace MattFerris\Provider;

use InvalidArgumentException;

/**
 * Thrown if the argument passed to a provider's provides() method doesn't
 * implement ConsumerInterface.
 */
class InvalidConsumerException extends InvalidArgumentException
{
}

