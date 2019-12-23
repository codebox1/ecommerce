@extends('admin.layouts.master')
@section('title') {{ trans('admin.edit', ['name' => trans('admin.category')]) }} @endsection

@section('content')
 <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.edit', ['name' => trans('admin.category')]) }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! 
            	Form::model($category, [
            		'route'  => ['category.update', $category->id],
            		'method' => 'PATCH',
            		'role'	 => 'form',
                'files'   => true
            	])
             !!}
             <input type="hidden" name="id" value="{{ $category->id }}">
             <div class="box-body">

                @include('admin.category.form')

                
                 {!! Form::close() !!}

                
            </div>
          </div>
          <!-- /.box -->

        </div>
    </div>
@endsection