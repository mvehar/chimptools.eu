@if(count($errors) > 0)
    <div class="col-sm-12">
        <div class="card m-b-15 clearfix">
            <div class="card-body">
                <div class="alert alert-danger">
                    <h5 class="card-title font-18">{{__('Form errors:')}}</h5>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
