<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\DummyProduct;

class LivewireProductFilter extends Component
{

    protected $queryString = ['filters'];

    protected $listeners = ['load-more' => 'loadMore'];

    public $perPage = 9;

    public array $filterOptions = [
        'brand' => [
            'name' => 'Brands',
            'options' => ['apple' => 'Apple', 'sony' => 'Sony', 'bose' => 'Bose'],
            'chosen' => [],
        ],
        'colors' => [
            'name' => 'Color',
            'options' => ['blue' => 'Blue', 'red' => 'Red', 'green' => 'Green', 'yellow' => 'Yellow'],
            'chosen' => [],
        ],
        'types' => [
            'name' => 'Type',
            'options' => ['earbuds' => 'Earbuds', 'earphones' => 'Earphones', 'overhead' => 'Overhead'],
            'chosen' => [],
        ]
    ];

    public array $filters = array();

    public array $filtersToMerge = [
        'brand' => [],
        'colors' => [],
        'types' => [],
    ];

    public $orderBy = [
        'key' => 'created_at',
        'direction' => 'desc'
    ];

    public array $sortByOptions = ['meta->rating_desc' => 'Best Rating', 'price_desc' => 'Price High to Low', 'price_asc' => 'Price Low to Low'];

    public function render()
    {
        return view('livewire.livewire-product-filter',[
                    'products' => Product::filter($this->filters)->orderBy($this->orderBy['key'], $this->orderBy['direction'])->paginate($this->perPage),
                ])
                ->extends('layouts.app')
                ->section('content');
    }

    public function loadMore()
    {
        $this->perPage = $this->perPage + 6;
    }

    public function mount(){
        $this->filters = array_merge($this->filtersToMerge, $this->filters);
    }

    public function removeFilter($filterType, $filterValue)
    {
        //Remove array element and reindex array
        unset($this->filters[$filterType][$filterValue]);
        $this->filters[$filterType] = array_values($this->filters[$filterType]);
    }

    public function setSortBy($sortBy)
    {
        $sort = explode('_', $sortBy);
        $this->orderBy['key'] = $sort[0];
        $this->orderBy['direction'] = $sort[1];
    }

    public function clearSort()
    {
        $this->reset('orderBy');
    }

}