@extends('layouts.admin')
@section('title','الخصومات')
@section('admin')
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('dashboard')}}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{route('discount.index')}}">الخصومات</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">اضافة خصومات</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('discount.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-material">
                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                    <label class="form-label">الخصم</label>
                                    <input type="number" class="form-control" name="discount" value="{{old('discount')}}">
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                    <div class="form-file">
                                        <label class="form-label">الصورة</label>
                                        <input type="file" name="image" class="form-file-input form-control">
                                    </div>
                                    <div id="image-preview"></div>

                                </div>
                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                    <button type="submit" class="btn btn-primary mb-3">حفظ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop

@push('js')
    <script>
        $(document).ready(function() {
            $('input[name="image"]').change(function(event) {
                var file = event.target.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var image = $('<img>').attr('src', e.target.result);
                        image.css('width', '100px');
                        $('#image-preview').html(image);
                    };
                    reader.readAsDataURL(file);
                } else {
                    $('#image-preview').html('');
                }
            });
        });
    </script>

    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif
    </script>
    @endpush
