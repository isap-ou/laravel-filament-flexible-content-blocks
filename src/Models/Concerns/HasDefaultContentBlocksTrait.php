<?php

namespace Statikbe\FilamentFlexibleContentBlocks\Models\Concerns;

use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\CallToActionBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\CardsBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\HtmlBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\ImageBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\OverviewBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\QuoteBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\TemplateBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\TextBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\TextImageBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\VideoBlock;
use Statikbe\FilamentFlexibleContentBlocks\Models\Contracts\HasContentBlocks;

/**
 * @mixin HasContentBlocks
 */
trait HasDefaultContentBlocksTrait
{
    use HasContentBlocksTrait;

    /**
     * {@inheritDoc}
     */
    public static function registerContentBlocks(): array
    {
        return config('filament-flexible-content-blocks.default_flexible_blocks', [
            TextBlock::class,
            VideoBlock::class,
            ImageBlock::class,
            HtmlBlock::class,
            TextImageBlock::class,
            OverviewBlock::class,
            QuoteBlock::class,
            CallToActionBlock::class,
            CardsBlock::class,
            TemplateBlock::class,
        ]);
    }
}
