@php($showMode = $showMode ?? false)
@php($editMode = $role->id ?? false)

@include('common.form-errors')

<div class="col-sm-12">
    <div class="card m-b-15 clearfix">
        <div class="card-body col-12">
            <h5 class="card-title font-18">@lang('Role')</h5>

            <div class="row form-group">
                <label class="col-3 col-form-label">@lang('Name:')</label>
                {!! Form::text('name', $role->name, ['class'=>'form-control col-9', 'readonly'=>$showMode, 'placeholder'=> __('Enter name'), 'required' => 'required']) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="card m-b-15 clearfix">
        <div class="card-body col-12">
            <h5 class="card-title font-18">@lang('Permissions')</h5>

            <div class=" row">
                @foreach($perms as $perm)
                    @php($hasPerm = $hasPerms[$perm->id] ?? false)
                    <div class="col-sm-4">
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('perm['.$perm->id.']', true, $hasPerm, ['class'=>'form-check-input', 'disabled'=>$showMode]) !!}
                                @lang($perm->name)</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@if(! $showMode)
    <div class="col-sm-12">
        <div class="card m-b-15 clearfix">
            <div class="card-body">
                <div class="form-group text-right">
                    <button class="btn btn-primary">@lang('Save')</button>
                </div>
            </div>
        </div>
    </div>
@endif

