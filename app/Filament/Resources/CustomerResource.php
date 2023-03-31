<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_depan'),
                Forms\Components\TextInput::make('nama_belakang'),
                Forms\Components\TextArea::make('alamat'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('hp'),
                Forms\Components\FileUpload::make('foto')
                ->preserveFilenames()
                ->image() 
                ->maxSize(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_depan'),
                Tables\Columns\TextColumn::make('nama_belakang'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('hp'),
                Tables\Columns\TextColumn::make('foto'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCustomers::route('/'),
        ];
    }    
}
