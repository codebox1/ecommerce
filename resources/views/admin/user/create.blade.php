@extends('admin.layouts.master')
@section('title') {{ trans('admin.create', ['name' => trans('admin.user')]) }} @endsection

@section('content')
 <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.create', ['name' => trans('admin.user')]) }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! 
            	Form::open([
            		'url'    => route('user.store'),
            		'method' => 'POST',
            		'role'	 => 'form'
            	])
             !!}
             <div class="box-body">

                @include('admin.user.form')

                
                 {!! Form::close() !!}
            </div>
          </div>
          <!-- /.box -->

        </div>
    </div>
@endsection