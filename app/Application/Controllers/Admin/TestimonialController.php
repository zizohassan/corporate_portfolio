<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Testimonial\AddRequestTestimonial;
use App\Application\Requests\Admin\Testimonial\UpdateRequestTestimonial;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\TestimonialsDataTable;
use App\Application\Model\Testimonial;
use Yajra\Datatables\Request;
use Alert;

class TestimonialController extends AbstractController
{
    public function __construct(Testimonial $model)
    {
        parent::__construct($model);
    }

    public function index(TestimonialsDataTable $dataTable){
        return $dataTable->render('admin.testimonial.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.testimonial.edit' , $id);
    }

    public function store(AddRequestTestimonial $request){
         return $this->storeOrUpdate($request , null , 'admin/testimonial');
    }

    public function update($id , UpdateRequestTestimonial $request){
             return $this->storeOrUpdate($request , $id , 'admin/testimonial');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.testimonial.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/testimonial')->with('sucess' , 'Done Delete testimonial From system');
    }
}
