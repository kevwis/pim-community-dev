<?php

namespace Pim\Component\Api\Exception;

/**
 * This exception should be thrown when setting an HAL resource with data containing a reserved HAL property key,
 * such as '_links'.
 *
 * @author    Alexandre Hocquard <alexandre.hocquard@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ReservedPropertyKeyException extends \LogicException
{
}
