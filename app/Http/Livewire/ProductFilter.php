<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;
use App\Models\Product_category;
class ProductFilter extends Component
{

    public $search;
    public $min_price;
    public $max_price;
    public $category;
    protected $queryString = ['search','min_price','max_price','category'];


       public function render()
       {
          return view('livewire.product-filter',[

               'rows' => Product::orderBy('id','desc')
               ->when($this->search !='',function ($q){
   $q->where("product_title", "LIKE" ,"%$this->search%");
               })
               ->when($this->category!='',function ($q){
                $q->where("Categories","$this->category");
               })
               ->when($this->min_price!='' && $this->max_price!='',function ($q){
   $q->whereBetween('price', [$this->min_price, $this->max_price]);
               })

               ->paginate(10),
               'cat' => Product_category::orderBy('id','desc')->get(),

           ]);
       }

    public function catfillter($data)
    {
       $this->category = $data;
    }




}
