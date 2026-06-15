<?php

namespace App\Filament\Resources\Visimisis\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Forms\Components\RichEditor;

class VisimisiForm
{
   public static function form(Schema $form): Schema
{
    return $form
        ->schema([
            RichEditor::make('visi')
                ->label('Visi')
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'bulletList',
                    'orderedList',
                    'link',
                    'h3',
                ])
                ->required()
                ->columnSpanFull(),

            RichEditor::make('misi')
                ->label('Misi')
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'bulletList',
                    'orderedList',
                    'link',
                    'h3',
                ])
                ->required()
                ->helperText('Gunakan numbered list untuk menuliskan poin-poin misi.')
                ->columnSpanFull(),

            FileUpload::make('image')
                ->label('Foto (Multiple)')
                ->image()
                ->multiple()
                ->reorderable()
                ->maxFiles(5)
                ->directory('visimisis')
                ->visibility('public')
                ->imagePreviewHeight('120')
                ->maxSize(2048)
                ->required()
                ->helperText('Bisa upload beberapa foto. Maks 5 foto, masing-masing 2MB.')
                ->columnSpanFull(),
        ]);
}
}
