<?php

declare(strict_types=1);

namespace Nin\ModelNameTranslator\Enums;

enum DemonstrativePronounContext: string
{
    // "This" or "These".
    case CloseBy = 'close-by';

    // "That" or "Those".
    case FarAway = 'far-away';
}
