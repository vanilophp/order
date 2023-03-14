<?php

declare(strict_types=1);

/**
 * Contains the HasOrder event trait.
 *
 * @copyright   Copyright (c) 2017 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2017-11-30
 *
 */

namespace Vanilo\Order\Events;

use Vanilo\Order\Contracts\Order;

trait HasOrder
{
    /** @var  Order */
    protected $order;

    public function getOrder(): Order
    {
        return $this->order;
    }
}
