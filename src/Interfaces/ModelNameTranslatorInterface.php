<?php

declare(strict_types=1);

namespace Nin\ModelNameTranslator\Interfaces;

use Nin\ModelNameTranslator\Enums\ArticleType;
use Nin\ModelNameTranslator\Enums\DemonstrativePronounContext;
use Nin\ModelNameTranslator\Enums\Quantity;

interface ModelNameTranslatorInterface
{
    /**
     * Sets the type of article that is prepended to the translated name.
     *
     * @param  ArticleType $type
     */
    public function articleType(ArticleType $type): self;

    public function closeBy(): self;
    public function definite(): self;

    /**
     * Sets the context of the demonstrative pronoun of the translated name.
     *
     * @param  DemonstrativePronounContext $context
     */
    public function demonstrativePronoun(DemonstrativePronounContext $context): self;

    public function farAway(): self;
    public function indefinite(): self;
    public function plural(): self;

    /**
     * Sets the quantity of the translated name.
     *
     * @param  Quantity $quantity
     */
    public function quantity(Quantity $quantity): self;

    public function setModel(string $model): self;

    public function shared(): self;
    public function sharedNegation(): self;
    public function singular(): self;

    /**
     * Returns the translated name of the model.
     */
    public function translate(): string;

}
