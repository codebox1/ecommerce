
<div class="form-group">
    <label for="{{ trans('admin.title') }}">{{ trans('admin.title') }}</label>
    {!! Form::text("title", null, [
      'class' => 'form-control',
      'placeholder' =>  trans('admin.title'),
      'required'
      ]) !!}	

      @if ($errors->has('title'))
        <span class="help-block">
             <strong>{{ $errors->first('title') }}</strong>
        </span>
      @endif   
</div>

<div class="form-group">
    <label for="{{ trans('admin.link') }}">{{ trans('admin.link') }}</label>
    {!! Form::text("link", null, [
      'class' => 'form-control',
      'placeholder' =>  trans('admin.link'),
      'required'
      ]) !!}  

      @if ($errors->has('link'))
        <span class="help-block">
             <strong>{{ $errors->first('link') }}</strong>
        </span>
      @endif   
</div>

<div class="form-group">
    <label for="{{ trans('admin.parent') }}">{{ trans('admin.parent') }}</label>
    {!! Form::select("parent_id", $menus,null, [
      'class' => 'form-control',
      ]) !!}  

      @if ($errors->has('parent'))
        <span class="help-block">
             <strong>{{ $errors->first('parent') }}</strong>
        </span>
      @endif   
</div>

<div class="form-group">
    <label for="{{ trans('admin.status') }}">{{ trans('admin.status') }}</label>
    {!! Form::select("status", status(),null, [
      'class' => 'form-control',
      ]) !!}  

      @if ($errors->has('status'))
        <span class="help-block">
             <strong>{{ $errors->first('status') }}</strong>
        </span>
      @endif   
</div>









<div class="box-footer">
                    <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
    </div>