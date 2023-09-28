<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JuridiqueResource\Pages;
use App\Filament\Resources\JuridiqueResource\RelationManagers;
use App\Models\Juridique;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Forms\Components\Boolean;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JuridiqueResource extends Resource
{
    protected static ?string $model = Juridique::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Card::make()
                ->schema([
                TextInput::make('nom'),
                Toggle::make('statut')->inline()
                ->onColor('success')
                ->offColor('danger')
               


               ])
            ]);
    }

    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')->sortable(),
                ToggleColumn::make('statut')
                ->onColor('success')
                ->offColor('danger'),
                TextColumn::make('created_at')->dateTime()

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListJuridiques::route('/'),
            'create' => Pages\CreateJuridique::route('/create'),
            'edit' => Pages\EditJuridique::route('/{record}/edit'),
        ];
    }    
}
