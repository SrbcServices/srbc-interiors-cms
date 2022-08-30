@extends('layouts.admin-layout')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <button type="button" class="submit-button" id="gallery-btn" data-toggle="modal" data-target="#exampleModal">Add
            Gallery</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Gallery Image</h5>
                        <button type="button" class="close" data-bs-toggle="modal" aria-label="Close"
                            style="border: none; background-color: white;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            @csrf
                            <div class="col-md-6">
                                <div class="col-md-3">
                                    <label for="blog-title"><img src="{{ asset('/assets/admin/images/dummy-img.png') }}"
                                            alt="" style="width: 400px" id="preview"></label>
                                </div>
                                <input type="file" name="galleryimage" id="blog-title" style="display: none"
                                    onchange="preview_image(event)">

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="add">Add</button>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Blogs</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap" id="unit_table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Id</th>
                                    <th class="border-top-0">Image</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($gallery as $gallerys)
                                <tr>
                                    <td>{{ $gallerys->id }}</td>
                                    <td>

                                            <img src="{{ asset('/uploads/gallery_images/' . $gallerys->gallery_image . '') }}"
                                                alt="" srcset=""
                                                style="width: 150px; height: 150px; object-fit: contain;">
                                    </td>
                                    <td>
                                        <button type="button" id="delete-image" data-id="{{ $gallerys->id }}"
                                            class="btn btn-success btn-circle"
                                            style="margin: 0 5px; padding: 10px; color: white;"><i
                                                class="fas fa-trash-alt"></i>
                                        </button>
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
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"
        integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).on("click", "#gallery-btn", function(e) {
            e.preventDefault();

            $('#exampleModal').modal('show');
        });
    </script>

    <script>
        $('button[data-dismiss="modal"]').click(function() {
            $(this).parent().parent().parent().parent().modal('hide');
        })
    </script>
    <script>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <script>
        $(document).on('click', '#add', function(e) {
            e.preventDefault();

            let galleryimage = $(`input[name="galleryimage"]`)[0].files;
            var form = new FormData();
            form.append("_token", "{{ csrf_token() }}");
            form.append('galleryimage', galleryimage[0])
            $.ajax({
                url: "/admin/gallery",
                type: "POST",
                contentType: false,
                processData: false,
                data: form,
                beforeSend: function() {
                    $('#add').html('<i class="fas fa-spinner"></i>')
                },
                success: function(response) {
                    console.log(response)
                    if (response.status == 'error') {
                        console.log(response);
                        $('#submit').html('Submit')
                        let keyf = Object.keys(response.errors);
                        let err = response.errors;
                        for (let i = 0; i < keyf.length; i++) {
                            console.log(err[keyf[i]]);
                            toastr.error(err[keyf[i]]);
                        }
                    } else {
                        $('#exampleModal').modal('hide');
                        $('#unit_table').load(document.URL + ' #unit_table');
                    }
                },
            });
        })
    </script>

<script>
    $(document).on("click", "#delete-image", function() {
        var id = $(this).attr('data-id');
        $(this).html('<i class="fa fa-spinner text-white" aria-hidden="true"></i>')
        $.ajax({
            type: "get",
            url: "/admin/gallerydelete/" + id,

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
