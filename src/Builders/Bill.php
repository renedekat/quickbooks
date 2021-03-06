<?php

namespace ReneDeKat\Quickbooks\Builders;

use ReneDeKat\Quickbooks\Builders\Traits\HasVendor;
use ReneDeKat\Quickbooks\Builders\Traits\Itemizable;

class Bill extends Builder
{
    use HasVendor, Itemizable;
}
