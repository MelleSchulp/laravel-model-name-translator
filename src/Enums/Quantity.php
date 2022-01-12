<?php

declare(strict_types=1);

namespace Nin\ModelNameTranslator\Enums;

enum Quantity: string
{
    // Denotes more than one thing.
    case Plural = 'plural';

    // Denotes one thing.
    case Singular = 'singular';
}
