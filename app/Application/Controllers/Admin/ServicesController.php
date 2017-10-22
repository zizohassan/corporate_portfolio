<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Services\AddRequestServices;
use App\Application\Requests\Admin\Services\UpdateRequestServices;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\ServicessDataTable;
use App\Application\Model\Services;
use Yajra\Datatables\Request;
use Alert;

class ServicesController extends AbstractController
{
    public function __construct(Services $model)
    {
        parent::__construct($model);
    }

    public function index(ServicessDataTable $dataTable){
        return $dataTable->render('admin.services.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.services.edit' , $id);
    }

    public function store(AddRequestServices $request){
         return $this->storeOrUpdate($request , null , 'admin/services');
    }

    public function update($id , UpdateRequestServices $request){
             return $this->storeOrUpdate($request , $id , 'admin/services');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.services.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/services')->with('sucess' , 'Done Delete services From system');
    }
}
