<?php

declare(strict_types=1);

namespace Nin\ModelNameTranslator\Traits;

use Nin\ModelNameTranslator\Interfaces\ModelNameTranslatorInterface;

trait ModelNameTranslatorTrait
{
    public static function modelName(): ModelNameTranslatorInterface
    {
        return app()->make(ModelNameTranslatorInterface::class)->setModel(static::class);
    }
}
