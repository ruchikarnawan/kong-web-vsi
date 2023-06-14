@extends('dashboard.template.layout')

@section('title', 'Kontak')

@section('body-content')
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item">Layanan Publik</li>
                <li class="breadcrumb-item active" aria-current="page">Kontak</li>
            </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Daftar kontak website</h4>
    </div>
</div>
{{-- 
<div class="row mb-5">
    <div class="col-md-9 d-flex align-items-center">
        <div style="font-size: 12px;">Show</div>
        <select class="form-control mx-2" style="width: 70px" id="limit-contact">
            @foreach($limitOption as $opt)
            @if ($opt == $limit)
            <option value="{{ $opt }}" selected>{{ $opt }}</option>
            @else
            <option value="{{ $opt }}">{{ $opt }}</option>
            @endif
            @endforeach
        </select>
        <div style="font-size: 12px;">entries</div>
    </div>
    <div class="col-md-3">
        <form action="{{ route('dashboard.layanan-publik.kontak') }}" style="position: relative;">
            <input type="hidden" name="limit" value="{{ $limit }}" />
            <input class="form-control" placeholder="Cari data..." name="name" value="{{ $name }}"
                id="search-contact" />
            <button type="submit" class="btn btn-primary" style="right:0;top: 0; height: 100%; position: absolute">
                <i data-feather="search"></i>
            </button>
        </form>
    </div>
</div>

<div data-label="Example" class="df-example demo-table">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                <th>Nama</th>
                <th>Subject</th>
                <th>Pesan Diterima</th>
            </tr>
            </thead>
            <tbody>
                @if (count($contacts) > 0)
                @foreach ($contacts as $c)
                <tr class="table-hover" onclick="showDetail('{{ $c->id }}')">
                    <td style="width: 20%;">{{ $c->name }}</td>
                    <td>{{ $c->subject }}</td>
                    <td>{{ $c->created_at }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center">Oops data masih kosong...</td>
                </tr>
                @endif
            </tbody>
        </table>
        <div class="w-100 d-flex justify-content-center">
            {{ $contacts->links() }}
        </div>
    </div>
</div>

<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pesan</h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Subject</label>
                        <p class="mg-b-0" id="subject-contact"></p>
                    </div>
                    <div class="col-6 col-sm mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Nama</label>
                        <p class="mg-b-0" id="name-contact"></p>
                    </div>
                    <div class="col-6 col-sm mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Email</label>
                        <p class="mg-b-0" id="email-contact"></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Pesan</label>
                        <p class="mg-b-0" id="message-contact"></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Pesan Diterima</label>
                        <p class="mg-b-0" id="date-contact"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="hideModal()">Close</button>
            </div>
        </div>
    </div>
</div> --}}
<div class="p-4" style="background:white">
<div class="d-flex flex-wrap" style="width: 100%; align-items: flex-end">
{{-- <div class="row mb-5"> --}}
    <div class="d-flex align-items-center">
        <div style="font-size: 12px;">Show</div>
        <select class="form-control mx-2" style="width: 80px margin-left: 10px; margin-right: 10px;" id="limit-contact">
            @foreach($limitOption as $opt)
            @if ($opt == $limit)
            <option value="{{ $opt }}" selected>{{ $opt }}</option>
            @else
            <option value="{{ $opt }}">{{ $opt }}</option>
            @endif
            @endforeach
        </select>
        <span style="font-size: 12px;">entries</span>
    </div>

    <div style="margin-left: auto" class="d-flex align-items-center">
        <form action="{{ route('dashboard.layanan-publik.kontak') }}" style="position: relative;">
            <input type="hidden" name="limit" value="{{ $limit }}" />
            <input class="form-control" placeholder="Cari data..." name="name" value="{{ $name }}"
                id="search-contact" />
            <button type="submit" class="btn btn-primary" style="right:0;top: 0; height: 100%; position: absolute; margin-left: 10px">
                <i data-feather="search"></i>
            </button>
        </form>
    </div>
{{-- </div> --}}
</div>


<div data-label="Example" class="df-example demo-table" style="margin-top: 20px">
    <div  class="d-flex align-items-center justify-content-center flex-column table-responsive" style="gap: 10px">
        <table class="table">
            <tbody>
                <tr class="table-light">
                    <th>Nama</th>
                    <th>Subject</th>
                    <th>Pesan Diterima</th>
                </tr>
                @if (count($contacts) > 0)
                @foreach ($contacts as $c)
                <tr class="table-hover" onclick="showDetail('{{ $c->id }}')">
                    <td style="width: 20%;">{{ $c->name }}</td>
                    <td>{{ $c->subject }}</td>
                    <td>{{ $c->created_at }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center">Oops data masih kosong...</td>
                </tr>
                @endif
            </tbody>
        </table>
        <div class="w-100 d-flex justify-content-center">
            {{ $contacts->links() }}
        </div>
    </div>
</div>

<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pesan</h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Subject</label>
                        <p class="mg-b-0" id="subject-contact"></p>
                    </div>
                    <div class="col-6 col-sm mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Nama</label>
                        <p class="mg-b-0" id="name-contact"></p>
                    </div>
                    <div class="col-6 col-sm mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Email</label>
                        <p class="mg-b-0" id="email-contact"></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Pesan</label>
                        <p class="mg-b-0" id="message-contact"></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label
                            class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Pesan Diterima</label>
                        <p class="mg-b-0" id="date-contact"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="hideModal()">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $("#limit-contact").on("change", (e) => {
        let qp = new URLSearchParams();
        qp.set("limit", e.target.value);
        qp.set("name", $("#search-contact").val());
        window.location.href = "/dashboard/layanan-publik/kontak?" + qp.toString();
    })

    function showDetail(data) {
        axios.get(`/dashboard/layanan-publik/kontak/apis/detail?id=${data}`).then((res) => {
            if (res) {
                $('#modal-detail').modal('show')
                $("#subject-contact").html(res.data.serve.subject)
                $("#name-contact").html(res.data.serve.name)
                $("#email-contact").html(res.data.serve.email)
                $("#message-contact").html(res.data.serve.message)
            }
        })
    }

    function hideModal() {
        $('#modal-detail').modal('hide')
        $("#subject-contact").html('')
        $("#name-contact").html('')
        $("#email-contact").html('')
        $("#message-contact").html('')
    }

</script>
@endsection
