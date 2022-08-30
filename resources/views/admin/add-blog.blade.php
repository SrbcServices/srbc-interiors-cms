@extends('layouts.admin-layout')
@section('content')
    <div class="container-fluid">
        <div class="col-7 align-self-center mb-4">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Dashboard</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">General</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Add Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card p-5">


            <form action="">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="">Blog Heading</label>
                            <input type="text" name="blogheading" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="">Blog Sub Discription</label>
                            <input type="text" name="subheading" class="form-control" name="subHeading">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-3">
                            <label for="blog-title"><img src="{{ asset('/assets/admin/images/dummy-img.png') }}" alt=""
                                    style="width: 400px" id="preview"></label>
                        </div>
                        <input type="file" name="blogimage" id="blog-title" style="display: none"
                            onchange="preview_image(event)">

                    </div>

                    <div class="col-md-12">
                        <textarea id="text_editor" name="text_editor" style="height: 500px"></textarea>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="blog-button">
                            <button class="submit-button" id="submit">Submit</button>
                        </div>
                    </div>

                </div>

            </form>


        </div>

    </div>
@endsection
@section('script')

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

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('text_editor', {
        filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- <script>
    CKEDITOR.replace('text_editor', {
        filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
</script> --}}


<script>
     $(document).on('click', '#submit', function(e) {
            e.preventDefault();

            CKEDITOR.instances.text_editor.updateElement()
            let BlogHeding = $(`input[name="blogheading"]`).val();
            let SubHeading = $(`input[name="subheading"]`).val();
            let Blog = $(`textarea[name="text_editor"]`).val();
            let blogimage = $(`input[name="blogimage"]`)[0].files;
            var form = new FormData();
            form.append("_token", "{{ csrf_token() }}");
            form.append('BlogHeding', BlogHeding)
            form.append('subHeading', SubHeading)
            form.append('Blog', Blog)
            form.append('blogimage', blogimage[0])
            $.ajax({
                url: "/admin/add_blog",
                type: "POST",
                contentType: false,
                processData: false,
                data: form,
                beforeSend: function() {
                    $('#submit').html('<i class="fas fa-spinner"></i>')
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
                        window.location.href = '/admin/blogs'
                    }
                },
            });
    
     });

</script>
@endsection
