<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManagementResource\Pages;
use App\Filament\Resources\ManagementResource\RelationManagers;
use App\Filament\Resources\PostResource\RelationManagers\RetriveFromPostRelationManager;
use App\Models\Role;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ManagementResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_id'),
                TextColumn::make('head'),
                TextColumn::make('content'),
                TextColumn::make('blogger'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Зөвшөөрөх')
                        ->button()
                        ->action(function(Role $role){
                                $role->forwardToPost()->create([
                                    'head'=>$role->head,
                                    'content'=>$role->content,
                                    'blogger'=>$role->blogger
                                ]);
                        }),
                // Tables\Actions\DeleteAction::make('Цуцлах')
                //         ->button(),
                Tables\Actions\Action::make('Устгах')
                        ->button()
                        ->action(function(Role $role){
                              $role=Role::where('user_id',auth()->user()->id)->first();
                              $role->delete();
                            //   $role->delete();
                        }),
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
            RetriveFromPostRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListManagement::route('/'),
            'create' => Pages\CreateManagement::route('/create'),
            'edit' => Pages\EditManagement::route('/{record}/edit'),
        ];
    }
}
