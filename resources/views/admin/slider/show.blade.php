@extends('admin.layouts.master')
@section('title') {{ trans('admin.show', ['name' => trans('admin.slider')]) }} @endsection

@section('content')
 <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.show', ['name' => trans('admin.slider')]) }}</h3>
            </div>

             <div class="box-body">
               <table id="data-get" class="table table-bordered table-striped">
                <tbody>
                  <tr>
                    <th>{{ trans('admin.id') }}</th>
                    <td>{{ $slider->id }}</td>
                  </tr>
                  <tr>
                    <th>{{ trans('admin.title') }}</th>
                    <td>{{ $slider->title }}</td>
                  </tr>
                  @if($slider->image != null)
                  <tr>
                    <th>{{ trans('admin.image') }}</th>
                    <td><img src="{{$slider->photo}}" style="width: 150px; height: 150px"></td>
                  </tr>
                  @endif
                  <tr>
                    <th>{{ trans('admin.action') }}</th>
                    <td>{!! editBtn(route('slider.edit', $slider->id)) . ' ' .  deleteBtn(route('slider.delete', $slider->id)) !!}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->

        </div>
    </div>
@endsection