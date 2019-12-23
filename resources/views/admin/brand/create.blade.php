@extends('admin.layouts.master')
@section('title') {{ trans('admin.create', ['name' => trans('admin.brand')]) }} @endsection

@section('content')
 <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.create', ['name' => trans('admin.brand')]) }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! 
            	Form::open([
            		'url'    => route('brand.store'),
            		'method' => 'POST',
            		'role'	 => 'form',
                'files'   => true
            	])
             !!}
             <div class="box-body">

                @include('admin.brand.form')

                
                 {!! Form::close() !!}
            </div>
          </div>
          <!-- /.box -->

        </div>
    </div>
@endsection