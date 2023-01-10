<?php

namespace App\Http\Livewire;
use App\Models\County as TownsModel;
use Livewire\Component;
use Livewire\WithPagination;

class Town extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $town=TownsModel::paginate(7);
        return view('livewire.town',['town=>$town'])->layout('layout');
    }
}
