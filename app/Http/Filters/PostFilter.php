<?php
namespace App\Http\Filters;
use App\Models\Post;

use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const PRICE = 'price';
    public const INSTOCK = 'InStock';

    protected function getCallbacks(): array{
        return [
            self::TITLE =>[$this, 'title'],
            self::PRICE =>[$this, 'price'],
            self::INSTOCK =>[$this, 'InStock'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    // return view('post.index', compact('posts'));

    }
    
    public function price(Builder $builder, $value)
    {
        $builder->where('price', 'like', "%{$value}%");
    }
    
    public function InStock(Builder $builder, $value)
    {
        $builder->where('InStock', 'like', "%{$value}%");
    }
}