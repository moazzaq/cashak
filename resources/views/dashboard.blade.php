@extends('layouts.admin')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
@endsection
@section('admin')
    <div class="container-fluid">
        <div class="row invoice-card-row">
            <div class="col-xl-4 col-xxl-4 col-sm-6">
                <div class="card bg-warning invoice-card">

                </div>
            </div>

        </div>
        <div class="row">

        </div>
    </div>
@stop
@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
@endpush
