<?php

declare(strict_types=1);

namespace Nin\ModelNameTranslator\Abstract;

use Nin\ModelNameTranslator\Enums\ArticleType;
use Nin\ModelNameTranslator\Enums\DemonstrativePronounContext;
use Nin\ModelNameTranslator\Enums\Quantity;
use Nin\ModelNameTranslator\Interfaces\ModelNameTranslatorInterface;

abstract class AbstractModelNameTranslator implements ModelNameTranslatorInterface
{
    public ArticleType $articleType = ArticleType::Shared;
    public ?DemonstrativePronounContext $context = null;
    public ?string $model = null;
    public Quantity $quantity = Quantity::Singular;

    public function articleType(ArticleType $articleType): self
    {
        $this->article = $articleType;

        return $this;
    }

    public function closeBy(): self
    {
        $this->demonstrativePronoun(DemonstrativePronounContext::CloseBy);

        return $this;
    }

    public function definite(): self
    {
        $this->articleType(ArticleType::Definite);

        return $this;
    }

    public function demonstrativePronoun(DemonstrativePronounContext $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function farAway(): self
    {
        $this->demonstrativePronoun(DemonstrativePronounContext::FarAway);

        return $this;
    }

    public function indefinite(): self
    {
        $this->articleType(ArticleType::Indefinite);

        return $this;
    }

    public function plural(): self
    {
        $this->quantity = Quantity::Plural;

        return $this;
    }

    public function quantity(Quantity $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function shared(): self
    {
        $this->articleType(ArticleType::Shared);

        return $this;
    }

    public function sharedNegation(): self
    {
        $this->articleType(ArticleType::SharedNegation);

        return $this;
    }

    public function singular(): self
    {
        $this->quantity = Quantity::Singular;

        return $this;
    }

    abstract public function translate(): string;
}
