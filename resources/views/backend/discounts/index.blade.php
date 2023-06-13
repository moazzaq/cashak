@extends('layouts.admin')
@section('title','الخصومات')
@section('admin')
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('dashboard')}}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">الخصومات</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">


            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">الخصومات</h4>
                        <div class="bootstrap-modal">
                            <!-- Button trigger modal -->
                            <a href="{{route('discount.create')}}" class="btn btn-primary btn-block  mb-2">اضافة</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                <tr>
                                    <th><strong>الصورة</strong></th>
                                    <th><strong>الخصم</strong></th>
                                    <th><strong></strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($discounts as $discount)
                                    <tr>
                                        <td class="sorting_1">
                                            <img class="rounded-circle" width="35"
                                                 src="{{asset('discounts/'.$discount->image)}}" alt="">
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center"><span class="w-space-no">
                                                {{$discount->discount}}
                                            </span></div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('discount.edit', $discount->id)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp delete-discount"
                                                   data-id="{{ $discount->id }}"><i class="fa fa-trash"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop



@push('js')
    <script>
        $(document).ready(function() {
            // AJAX delete request when delete button is clicked
            $('.delete-discount').click(function(e) {
                e.preventDefault();

                var discountId = $(this).data('id');
                var row = $(this).closest('tr');

                if (confirm('هل انت متاكد من الحذف؟')) {
                    $.ajax({
                        url: '/discount/' + discountId,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            row.slideUp('slow', function() {
                                row.remove();
                            });

                            toastr.success('تم الحذف بنجاح');
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>

@endpush
