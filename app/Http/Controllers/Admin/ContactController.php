<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\Contact as model;
class ContactController extends Controller
{
    private $view  = 'admin.contact.';
	private $route = 'contact.';
    public function index()
    {
    	return view($this->view . 'index');
    }

    public function show($id)
    {
        $contact = model::findOrFail($id);
        $contact->update(['status' => 1]);
        return view($this->view . 'show', compact('contact'));
    }

    public function destroy($id, Request $request)
    {
        model::findOrFail($id)->delete();
        return redirect(route($this->route .'index'))->withFlashMessage(trans('admin.deleted'));
    }

    public function confirmation($id)
    {
         $contact = model::findOrFail($id);
         return view($this->view . 'delete', compact('contact'));
    }

    // Ajax functions
    public function loadData()
    {
    	$contacts = model::all();
    	return DataTables::of($contacts)
    	->rawColumns(['action'])
    	->editColumn('action', function($model){
            $delete = deleteBtn(route($this->route .'delete', $model->id));
            $show   = showBtn(route($this->route .'show', $model->id));
    		return $show . ' ' . $delete;
    	})
    	->make(true);
    }
}
