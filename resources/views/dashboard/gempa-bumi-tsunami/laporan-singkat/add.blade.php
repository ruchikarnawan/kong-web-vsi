@extends('dashboard.template.layout')

@section('title', 'Tambah publikasi mitigasi gerakan tanah')

@section('body-content')
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item">Gempa Bumi & Tsunami</li>
                <li class="breadcrumb-item" aria-current="page"><a
                        href="{{ route('dashboard.gempa-bumi-tsunami.publikasi-mitigasi.index') }}">Publikasi mitigasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah publikasi mitigasi</li>
            </ol>
        </nav>
    </div>
</div>
<div class="p-3" id="app">
    <form-news 
        apiurl="{{ route('dashboard.gempa-bumi-tsunami.publikasi-mitigasi.save') }}" 
        backurl="{{ route('dashboard.gempa-bumi-tsunami.publikasi-mitigasi.index') }}"
    ></form-news>
</div>
@endsection
