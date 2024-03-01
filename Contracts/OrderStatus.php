<?php

declare(strict_types=1);

/**
 * Contains the OrderStatus interface.
 *
 * @copyright   Copyright (c) 2017 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2017-11-28
 *
 */

namespace Vanilo\Order\Contracts;

use Konekt\Enum\EnumInterface;

interface OrderStatus extends EnumInterface
{
    /**
     * Returns whether the status represents an open state
     *
     * @return boolean
     */
    public function isOpen(): bool;

    /**
     * Returns an array of statuses that represent an open order state
     *
     * @return array
     */
    public static function getOpenStatuses(): array;
}
