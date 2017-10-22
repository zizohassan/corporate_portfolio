<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Partner\AddRequestPartner;
use App\Application\Requests\Admin\Partner\UpdateRequestPartner;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\PartnersDataTable;
use App\Application\Model\Partner;
use Yajra\Datatables\Request;
use Alert;

class PartnerController extends AbstractController
{
    public function __construct(Partner $model)
    {
        parent::__construct($model);
    }

    public function index(PartnersDataTable $dataTable){
        return $dataTable->render('admin.partner.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.partner.edit' , $id);
    }

    public function store(AddRequestPartner $request){
         return $this->storeOrUpdate($request , null , 'admin/partner');
    }

    public function update($id , UpdateRequestPartner $request){
             return $this->storeOrUpdate($request , $id , 'admin/partner');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.partner.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/partner')->with('sucess' , 'Done Delete partner From system');
    }
}
