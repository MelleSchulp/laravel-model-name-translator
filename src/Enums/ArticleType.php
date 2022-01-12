<?php

declare(strict_types=1);

namespace Nin\ModelNameTranslator\Enums;

enum ArticleType: string
{
    // In the Dutch language, these can be "De" or "Het".
    case Definite = 'definite';

    // In the English language, these can be "A" or "An".
    case Indefinite = 'indefinite';

    // Used in the French language. It is used when no quantity is given.
    // "Du", "De la", "De l'" and "Des" are examples.
    case Shared = 'shared';

    // Used in the French language. It is used after a negation when no quantity is given.
    // "De" and "D'" are examples.
    case SharedNegation = 'shared-negation';
}
