@extends('admin.layouts.app')
@section('pagename', 'Post')
@section('breadcrumb')
    <li class="breadcrumb-item active">Post</li>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Create Post</h3>

                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('admin.post.update', $post) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control" id="title"
                                                    placeholder="Title" value={{ $post->title }} />
                                            </div>
                                            <div class="form-group">
                                                <label for="slug">Slug</label>
                                                <input type="text" name="slug" class="form-control" id="slug"
                                                    placeholder="Slug" value={{ $post->slug }} />
                                            </div>

                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <select name="category" id="category" class="form-control">
                                                    <option value="0">Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="image">Feature Image </label>
                                                <button id="imageRemove" type="button"
                                                    class="btn btn-danger d-none btn-sm ml-5 mb-1"
                                                    onclick="removeImage()">Remove Image</button>

                                                <div id="featureImageContainer"
                                                    class="feature-image border d-flex justify-content-center align-items-center"
                                                    style="overflow-y: scroll; height:210px">
                                                    <input type="hidden" name="image" value="{{ $post->image }}"
                                                        id="image" />
                                                    <img id="featureImage" src="{{ $post->image }}" class="img-responsive"
                                                        width="100%" />
                                                    <button id="imageSelect" type="button"
                                                        class="btn btn-primary position-absolute"
                                                        onclick="selectImage()">Select Image</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="content">Post Content</label>
                                        <textarea name="content" id="content" cols="30" rows="10"
                                            class="form-control">{{ $post->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="status" value="draft" class="btn btn-primary">Save as
                                            draft</button>
                                        <button type="submit" name="status" value="publishable"
                                            class="btn btn-success">Publish</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('beforeStyles')
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.css') }}">

    <style type="text/css">
        #imageSelect {
            z-index: 9999 !important;
        }

        .hoverable {
            display: none;
        }

        #featureImageContainer:hover .hoverable {
            display: block;
        }

    </style>
@endpush

@push('beforeScripts')
@endpush

@push('scripts')
    <script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script type="text/javascript">
        $("#title").keyup(function() {
            var text = $(this).val();
            text = text.trim();
            text = text.toLowerCase();
            text = text.replace(/[^a-zA-Z0-9]+/g, '-');
            $("#slug").val(text);
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#content').summernote({
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript', 'fontsize', 'color',
                        'style', 'fontname'
                    ]],
                    ['para', ['ul', 'ol', 'paragraph', 'height']],
                    ['insert', ['picture', 'video', 'filemanager', 'table', 'link', 'hr']],
                    ['misc', ['undo', 'redo', 'codeview', 'fullscreen']],
                ],
                buttons: {
                    filemanager: function(context) {
                        const ui = $.summernote.ui;
                        const button = ui.button({
                            contents: '<i class="fas fa-folder-open"></i>',
                            tooltip: 'File Manager',
                            click: function() {
                                opener = 'content';
                                window.open('{{ route('fm.summernote') }}',
                                    'filemanager',
                                    "_top",
                                    "toolbar=0,titlebar=0,scrollbars=0,location=0,menubar=0,status=0"
                                );
                            }
                        });
                        return button.render();
                    },
                },
                height: 400,
                placeholder: 'Write your post here'
            });
        });


        function selectImage() {
            opener = 'featureImage';
            window.open('{{ route('fm.summernote') }}', 'filemanager',
                "_top",
                "toolbar=0,titlebar=0,scrollbars=0,location=0,menubar=0,status=0"
            );
        }

        function removeImage() {
            $("#featureImage").attr('src', '');
            $("#image").val('');
            $("#imageRemove").removeClass('d-inline');
            $("#imageRemove").addClass('d-none');
            $("#imageSelect").html('Select Image');
            $('#imageSelect').removeClass('hoverable');
        }


        function fmSetLink(url) {

            if (opener == 'content') {

                const ext = url.split('.').pop();
                const file = url.replace(/^.*(\\|\/|\:)/, '');

                if (ext == 'jpg' || ext == 'jpeg' || ext == 'png' || ext == 'gif' || ext == 'bmp' || ext == 'ico' || ext ==
                    'svg' || ext == 'webp' || ext == 'tiff' || ext == 'tif') {
                    $('#content').summernote('insertImage', url);
                } else if (
                    ext == 'mp4' || ext == 'ogg' || ext == 'webm' || ext == 'flv' || ext == 'avi' || ext == 'wmv' ||
                    ext == 'mov' || ext == 'mpg' || ext == 'mpeg' || ext == '3gp' || ext == '3g2' || ext == 'm4v' ||
                    ext == 'mkv' || ext == 'm4p' || ext == 'm4b' || ext == 'm4r' || ext == 'm4v' || ext == 'f4v' ||
                    ext == 'f4p' || ext == 'f4a' || ext == 'f4b' || ext == 'f4r' || ext == 'f4v' || ext == 'f4a' || ext ==
                    'f4b'
                ) {
                    var video = document.createElement('video');
                    video.setAttribute('fullscreen', true);
                    video.setAttribute('controls', true);
                    video.innerHTML = `<source src="${url}" type="video/${ext}">`;
                    $('#content').summernote('insertNode', video);
                } else if (ext == 'pdf' || ext == 'html' || ext == 'htm') {
                    var iframe = document.createElement('iframe');
                    iframe.setAttribute('width', '100%');
                    iframe.setAttribute('src', url);
                    iframe.setAttribute('overflow', 'auto');
                    iframe.setAttribute('frameborder', '0');
                    iframe.setAttribute('allowfullscreen', 'allowfullscreen');
                    iframe.setAttribute('allow', 'autoplay; encrypted-media');
                    $('#content').summernote('insertNode', iframe);
                } else {
                    $('#content').summernote('createLink', {
                        text: `${file}`,
                        url: `${url}`,
                        isNewWindow: true
                    });
                }
            } else if (opener == 'featureImage') {
                const ext = url.split('.').pop();

                if (ext == 'jpg' || ext == 'jpeg' || ext == 'png' || ext == 'gif' || ext == 'bmp' || ext == 'ico' || ext ==
                    'svg' || ext == 'webp' || ext == 'tiff' || ext == 'tif') {
                    $('#featureImage').attr('src', url);
                    $('#featureImage').removeClass('d-none');
                    $('#image').val(url);
                    $('#imageSelect').addClass('hoverable');
                    $('#imageSelect').html('Change Image');
                    $("#imageRemove").removeClass('d-none');
                    $("#imageRemove").addClass('d-inline');
                } else {
                    alert('Only image files are allowed');
                }



            }
        }
    </script>
@endpush
