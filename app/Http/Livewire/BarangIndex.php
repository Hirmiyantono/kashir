<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Barang;
use Livewire\WithPagination;

class BarangIndex extends Component
{
    use WithPagination;

    public function render()
    {
        $barangs = Barang::leftjoin('stoks', 'barangs.id_barang', '=', 'stoks.id_barang_stokfk')
        ->latest()
        ->paginate(5);
        return view('livewire.barang.barang-index', [
            'barangs' => $barangs
        ]);
    }
}
