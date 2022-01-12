<?php

declare(strict_types=1);

namespace Nin\ModelNameTranslator;

use Nin\ModelNameTranslator\Abstract\AbstractModelNameTranslator;

class ModelNameTranslator extends AbstractModelNameTranslator
{
    public function translate(): string
    {
        return __(
            sprintf(
                '%s.%s.%s.%s',
                config('model-name-translator.translation-file'),
                $this->model,
                $this->quantity->value,
                $this->articleType?->value ?? $this->context?->value
            )
        );
    }

    public function __toString()
    {
        return $this->translate();
    }
}
