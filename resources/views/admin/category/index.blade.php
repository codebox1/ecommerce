@extends('admin.layouts.master')
@section('title') {{ trans('admin.categories') }} @endsection

@section('content')
 <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.categories') }} | <a href="{{ route('category.create') }}">{{ trans('admin.create', ['name' => trans('admin.category')]) }}</a></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data-get" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>{{ trans('admin.id') }}</th>
                  <th>{{ trans('admin.title') }}</th>
                  <th>{{ trans('admin.image') }}</th>
                  <th>{{ trans('admin.action') }}</th>
                </tr>
                </thead>
                <tbody>
               
                </tbody>
                <tfoot>
                <tr>
                  <th>{{ trans('admin.id') }}</th>
                  <th>{{ trans('admin.title') }}</th>
                  <th>{{ trans('admin.image') }}</th>
                  <th>{{ trans('admin.action') }}</th>
                </tr>
                </tfoot>
              </table>
            <!-- /.box-body -->
            </div>
          </div>
          <!-- /.box -->

        </div>
    </div>
@endsection

@section('script')
<script>
  $(function () {
    $('#data-get').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "processing": true,
        "serverSide": true,
        "ajax": "{{ route('admin.category.data') }}",
        "columns": [
            { "data": "id", "name" : "id" },
            { "data": "name", "name" : "name" },
            { "data": "image", "name": "image" },
            { "data": "action" , "name" : "" },
        ]
    });
  });
</script>
@endsection