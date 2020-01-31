<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h4 class="page-title">{{$title}}</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    {{$slot}}
                </ol>
            </div>
        </div>

        {{$widget ?? ''}}
    </div>
</div>
<!-- End Breadcrumbbar -->
