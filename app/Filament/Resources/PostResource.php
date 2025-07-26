<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('title')->label('標題')->required(),
            Forms\Components\Textarea::make('content')->label('內容')->rows(5),
            Forms\Components\TextInput::make('author')->label('作者'),
            Forms\Components\Toggle::make('published')->label('已發布'),
            Forms\Components\DateTimePicker::make('published_at')->label('發佈時間'),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                        Tables\Columns\TextColumn::make('title')->label('標題')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('author')->label('作者')->searchable(),
            Tables\Columns\IconColumn::make('published')->label('已發布')->boolean(),
            Tables\Columns\TextColumn::make('published_at')->label('發佈時間')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
