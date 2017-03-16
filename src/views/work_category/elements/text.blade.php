<!-- SAMPLE NAME -->
<div class="form-group">
    <?php $category_name = $request->get($name) ? $request->get($name) : @$category->$name ?>
    {!! Form::label($name, trans('site::work_category_admin.'.$name).':') !!}
    {!! Form::text($name, $category_name, ['class' => 'form-control', 'placeholder' => trans('site::work_category_admin.'.$name).'']) !!}
</div>
<!-- /SAMPLE NAME -->