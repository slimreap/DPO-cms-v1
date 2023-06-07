<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Resources\Pages\Page;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Card;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TernaryFilter;
use App\Filament\Resources\AdminResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AdminResource\RelationManagers;
use App\Filament\Resources\AdminResource\Pages\CreateAdmin;

class AdminResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Settings';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                TextInput::make('name')
                        ->minLength(2)
                        ->maxLength(255),
                    
                TextInput::make('email')
                        ->label('Email Address')
                        ->minLength(2)
                        ->maxLength(255),   

                        Select::make('role_id')
                        ->label('Role')
                        ->options(
                            function () {
                                $category = Role::where([['name','!=','super-admin'],['name','!=','admin']])->get();
                                $category2 = Role::where([['name','!=','super-admin']])->get();

                                if(Auth::user()->role->name == 'super-admin')
                                {
                                    return $category2->pluck('name', 'id');
                                }

                                else{
                                    return $category->pluck('name', 'id');
                                }
                            }
                        )
                        ->searchable(),

                TextInput::make('password')
                        ->minLength(6)
                        ->maxLength(8)
                        ->password()
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                        ->dehydrated(fn ($state) => filled($state))
                        ->required(fn (Page $livewire) => ($livewire instanceof CreateAdmin))
                        ->columns(2)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
                TextColumn::make('updated_at')->dateTime()->sortable(),

                TextColumn::make('role.name')
            ])
            ->filters([
                                
                TernaryFilter::make('role_id')
                ->placeholder('admin')
                ->queries(
                    true: fn (Builder $query) => $query->where('role_id', '!=', 1),
                    false: fn (Builder $query) => $query->onlyTrashed(),
                    blank: fn (Builder $query) => $query->withoutTrashed(),
                )
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAdmins::route('/'),
            'create' => Pages\CreateAdmin::route('/create'),
            'approval' => Pages\Approval::route('/approval'),
            'edit' => Pages\EditAdmin::route('/{record}/edit'),
          
        ];
    }
    
    public static function getEloquentQuery(): Builder
{   
    if(Auth::user()->role->name == 'super-admin')
    {
    return parent::getEloquentQuery()->where([
        ['name','!=','super-admin'],
        // ['name','!=','admin']
    ]);
    }
    else
    {
        return parent::getEloquentQuery()->where([
            ['name','!=','super-admin'],
            ['name','!=','admin']
        ]);
    }
}

}
