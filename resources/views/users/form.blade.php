@php($showMode = $showMode ?? false)
@php($editMode = $user->id ?? false)
@php($hasRoles = array_fill_keys($user->roles()->pluck('id')->all(), true))

@include('common.form-errors')

<div class="col-sm-12">
    <div class="card m-b-15 clearfix">
        <div class="card-body col-12">
            <h5 class="card-title font-18">@lang('User')</h5>

            <div class="row form-group">
                <label class="col-3 col-form-label">@lang('Name:')</label>
                {!! Form::text('name', $user->name, ['class'=>'form-control col-9', 'readonly'=>$showMode, 'placeholder'=> __('Enter name'), 'required' => 'required']) !!}
            </div>
            <div class="row form-group">
                <label class="col-3 col-form-label">@lang('Email:')</label>
                {!! Form::email('email', $user->email, ['class'=>'form-control col-9', 'readonly'=>$showMode || $user->email, 'placeholder'=> __('Enter email'), 'required' => 'required']) !!}
            </div>

            @if(!$showMode)
                <hr>
                <div class="row form-group">
                    <label class="col-3 col-form-label">@lang('Change password:')</label>
                    {!! Form::text('password', '', ['class'=>'form-control col-9', 'readonly'=>$showMode, 'placeholder'=> __('Enter new password')]) !!}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="card m-b-15 clearfix">
        <div class="card-body col-12">
            <h5 class="card-title font-18">@lang('Roles')</h5>

            <div class="row">
                @foreach($roles as $role)
                    @php($hasRole = $hasRoles[$role->id] ?? false)
                    <div class="col-sm-4">
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('roles['.$role->id.']', true, $hasRole, ['class'=>'form-check-input', 'disabled'=>$showMode]) !!}
                                @lang($role->name)</label>
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

