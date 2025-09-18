<x-filament::page>
    {{-- Row 1: Stat Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @livewire(\App\Filament\Widgets\StatsDosen::class)
        @livewire(\App\Filament\Widgets\StatsDosenTotal::class)
        @livewire(\App\Filament\Widgets\StatsPegawaiAktif::class)
    </div>

    {{-- Row 2: Charts --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        @livewire(\App\Filament\Widgets\JabatanAkademikDosenChart::class)
        @livewire(\App\Filament\Widgets\JenisKelaminDosenChart::class)
    </div>

    {{-- Row 3: Charts tambahan --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @livewire(\App\Filament\Widgets\JabatanTendikChart::class)
        @livewire(\App\Filament\Widgets\JenisKelaminTendikChart::class)
    </div>
</x-filament::page>
