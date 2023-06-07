<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Page;
use Filament\Tables;
use App\Models\Theme;
use App\Models\Processes;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Columns\Column;
use Symfony\Component\Process\Process;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use App\Tables\Columns\ApprovalSwitcher;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\CheckboxColumn;
use App\Filament\Resources\PageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageResource\RelationManagers;

class PageResource extends Resource
{   
    
    protected static ?string $model = Processes::class;

    protected static ?string $modelLabel = 'Themes';    
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    

    public static function table(Table $table): Table
    {
        
        $stateCallback = function ($record) {
            $isApproved = $record->is_approved;

            if ($isApproved) {

                $record->where('id', $record->id)
                ->update(['is_approved' => false]);
                
            }

            else
            {
                  
                $state = $record->where('id', $record->id)
                ->update(['is_approved' => true]);
                // dd($state);
                $otherApprovedRow = Processes::query()
                ->where('id', '<>', $record->id)
                ->where('is_approved', true)
                ->first();  
                
                Theme::where('id',$record->processable_id)->update([
                    'approval_date' => Carbon::now()
                ]);
            if ($otherApprovedRow) {

                // If there is another row set to true, update it to false
                $record->where('id','<>', $record->id)
                ->update(['is_approved' => false]);
            }
           
                // dd($state);
            }
            
            // Return the current value of is_approved
            // return $record->is_approved;
        };
        
        
       
        return $table
            ->columns([
                TextColumn::make('name')->url(function ($record) {
                    
                    $name = urlencode($record->name); // Encode the name for URL safety
                    return "http://privacy.wmsu.edu.ph/admin/{$record->name}/Homepage";
                })->searchable(),
                TextColumn::make('processable.user.name')->label('Creator'),
                
                CheckboxColumn::make('is_approved')                
                ->updateStateUsing($stateCallback)->label('Approve')
                ,

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }    
}
