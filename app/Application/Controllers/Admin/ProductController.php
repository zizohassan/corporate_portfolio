<?php

namespace App\Application\Controllers\Admin;

use App\Application\Model\Categorie;
use App\Application\Requests\Admin\Product\AddRequestProduct;
use App\Application\Requests\Admin\Product\UpdateRequestProduct;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\ProductsDataTable;
use App\Application\Model\Product;
use Yajra\Datatables\Request;
use Alert;

class ProductController extends AbstractController
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function index(ProductsDataTable $dataTable){
        return $dataTable->render('admin.product.index');
    }

    public function show($id = null){
        $data = transformSelect(Categorie::pluck('name' , 'id')->all());
        return $this->createOrEdit('admin.product.edit' , $id , ['cat_id' => $data]) ;
    }

    public function store(AddRequestProduct $request){
         return $this->storeOrUpdate($request , null , 'admin/product');
    }

    public function update($id , UpdateRequestProduct $request){
             return $this->storeOrUpdate($request , $id , 'admin/product');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.product.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/product')->with('sucess' , 'Done Delete product From system');
    }
}
