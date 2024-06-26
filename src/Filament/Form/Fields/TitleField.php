<?php

namespace Statikbe\FilamentFlexibleContentBlocks\Filament\Form\Fields;

use Filament\Forms\Components\TextInput;
use Statikbe\FilamentFlexibleContentBlocks\Filament\Form\Fields\Concerns\HasTranslatableHint;

class TitleField extends TextInput
{
    use HasTranslatableHint;

    public static function create(bool $required = false): static
    {
        $field = static::getFieldName();

        return static::make($field)
            ->label(trans("filament-flexible-content-blocks::filament-flexible-content-blocks.form_component.{$field}_lbl"))
            ->maxLength(255)
            ->live()
            ->addsTranslatableHint()
            ->required($required);
    }

    public static function getFieldName(): string
    {
        return 'title';
    }
}
