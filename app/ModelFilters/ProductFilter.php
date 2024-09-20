<?php 

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ProductFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function price($price)
    {
        return isset($price[1]) ? $this->whereBetween('price', [$price[0], $price[1]]): $this->where('price', '>', $price[0]);
    }

    public function colors($color)
    {
        $this->whereIn('meta->color', $color);
    }

    public function connectionType($connection_type){
        $this->whereIn('meta->connection_type', $connection_type);
    }

    public function brand($brand){
        $this->whereIn('meta->brand', $brand);
    }

    public function type($type){
        $this->whereIn('meta->type', $type);
    }

    public function rating($rating){
        $this->whereBetween('meta->rating', [$rating[0], $rating[1]]);
    }
}