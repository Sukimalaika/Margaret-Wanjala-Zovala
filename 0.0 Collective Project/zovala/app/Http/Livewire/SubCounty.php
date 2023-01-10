<?php

namespace App\Http\Livewire;
use App\Models\subCounty as subCountyModel;
use Livewire\Component;
use Livewire\WithPagination;


class SubCounty extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $subcounties=subCountyModel::paginate(7);
        return view('livewire.sub-county',['subCounties=>$subCounties'])->layout('layout');
    }
}
