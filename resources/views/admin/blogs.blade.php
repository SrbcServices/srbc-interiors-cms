@extends('layouts.admin-layout')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <a href="/admin/add-blog"> <button class="submit-button">Add blog </button></a>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Blogs</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap" id="unit_table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Id</th>
                                    <th class="border-top-0">Heading</th>
                                    <th class="border-top-0">Sub Heading</th>
                                    <th class="border-top-0">Image</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td style="overflow: hidden;">{{ $blog->Heading }}</td>
                                        <td style="overflow: hidden;">{{ $blog->Subheading }}</td>
                                        <td>
                                            @if ($blog->Image_name != 'undefined')
                                                <img src="{{ asset('/uploads/blog_images/' . $blog->Image_name . '') }}"
                                                    alt="" srcset=""
                                                    style="width: 50px; height: 50px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('/assets/admin/images/dummy-img.png') }}" alt=""
                                                    srcset="" style="width: 80px; height: 80px; object-fit: cover;">
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" id="delete-blog" data-id="{{ $blog->id }}"
                                                class="btn btn-success btn-circle"
                                                style="margin: 0 5px; padding: 10px; color: white;"><i
                                                    class="fas fa-trash-alt"></i>
                                            </button>
                                            <a href="/admin/edit-blog/{{ $blog->id }}" id="edit"
                                                class="btn btn-success btn-circle"
                                                style="margin: 0 5px; padding: 10px; color: white;"><i
                                                    class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection

@section('script')
    <script>
        $(document).on("click", "#delete-blog", function() {
            var id = $(this).attr('data-id');
            $(this).html('<i class="fa fa-spinner text-white" aria-hidden="true"></i>')
            $.ajax({
                type: "get",
                url: "/admin/blogdelete/" + id,

                success: function(response) {
                    console.log(response)
                    if (response.status == 'success') {
                        $('#unit_table').load(document.URL + ' #unit_table');
                    }
                },
            });
        });
    </script>
@endsection
