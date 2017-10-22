<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Slider\AddRequestSlider;
use App\Application\Requests\Admin\Slider\UpdateRequestSlider;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\SlidersDataTable;
use App\Application\Model\Slider;
use Yajra\Datatables\Request;
use Alert;

class SliderController extends AbstractController
{
    public function __construct(Slider $model)
    {
        parent::__construct($model);
    }

    public function index(SlidersDataTable $dataTable){
        return $dataTable->render('admin.slider.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.slider.edit' , $id);
    }

    public function store(AddRequestSlider $request){
         return $this->storeOrUpdate($request , null , 'admin/slider');
    }

    public function update($id , UpdateRequestSlider $request){
             return $this->storeOrUpdate($request , $id , 'admin/slider');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.slider.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/slider')->with('sucess' , 'Done Delete slider From system');
    }
}
