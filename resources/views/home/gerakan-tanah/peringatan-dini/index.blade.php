@extends('template.layout')

@section('title', 'Peringatan Dini')

@push('styles')
<link href="{{ asset('css/selectric.css') }}" rel="stylesheet">
<link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>Peringatan Dini</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item">Gerakan Tanah</li>
                <li class="breadcrumb-item active">Peringatan Dini</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->
<div class="city_blog2_wrap team" style="background: #f0f2f7">
    <div class="container">
        <div id="app">
            <ground-movement apiurl="{{ env('APP_URL') }}" category="{{ Param::GROUND_MOVEMENT_EARLY_WARNING }}"></ground-movement>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/jquery-filterable.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/web/collab/index.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var collabHandle = CollabHandler.construct({
            maxPicField: 2,
            maxInvolvedField: 5
        });
        collabHandle.init();
    });

</script>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
@endpush
