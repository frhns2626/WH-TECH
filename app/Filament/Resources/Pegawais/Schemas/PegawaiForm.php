<?php

namespace App\Filament\Resources\Pegawais\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PegawaiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')->required(),

                TextInput::make('jenis_pegawai')->required(),

                TextInput::make('status_pegawai')->required(),

                TextInput::make('agama')->required(),

                TextInput::make('unit')->required(),

                TextInput::make('subunit')->required(),
            ]);
    }
}
