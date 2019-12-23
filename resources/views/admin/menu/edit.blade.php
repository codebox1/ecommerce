@extends('admin.layouts.master')
@section('title') {{ trans('admin.edit', ['name' => trans('admin.menu')]) }} @endsection

@section('content')
 <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.edit', ['name' => trans('admin.menu')]) }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! 
            	Form::model($menu, [
            		'route'  => ['menu.update', $menu->id],
            		'method' => 'PATCH',
            		'role'	 => 'form',
                'files'   => true
            	])
             !!}
             <input type="hidden" name="id" value="{{ $menu->id }}">
             <div class="box-body">

                @include('admin.menu.form')

                
                 {!! Form::close() !!}

                
            </div>
          </div>
          <!-- /.box -->

        </div>
    </div>
@endsection