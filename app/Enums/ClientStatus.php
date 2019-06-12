<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ClientStatus extends Enum
{
    const ACTIVE    = 0;
    const INACTIVE  = 1;
    const SUPEND    = 2;
    const BLACKLIST = 3;
}
