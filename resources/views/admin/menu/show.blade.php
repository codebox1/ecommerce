@extends('admin.layouts.master')
@section('title') {{ trans('admin.show', ['name' => trans('admin.menu')]) }} @endsection

@section('content')
 <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.show', ['name' => trans('admin.menu')]) }}</h3>
            </div>

             <div class="box-body">
               <table id="data-get" class="table table-bordered table-striped">
                <tbody>
                  <tr>
                    <th>{{ trans('admin.id') }}</th>
                    <td>{{ $menu->id }}</td>
                  </tr>
                  <tr>
                    <th>{{ trans('admin.title') }}</th>
                    <td>{{ $menu->title }}</td>
                  </tr>
                   <tr>
                    <th>{{ trans('admin.link') }}</th>
                    <td>{{ $menu->link }}</td>
                  </tr>
                  <tr>
                    <th>{{ trans('admin.status') }}</th>
                    <td>{!! showStatus($menu->status) !!}</td>
                  </tr>
                  <tr>
                    <th>{{ trans('admin.action') }}</th>
                    <td>{!! editBtn(route('menu.edit', $menu->id)) . ' ' .  deleteBtn(route('menu.delete', $menu->id)) !!}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->

        </div>
    </div>
@endsection