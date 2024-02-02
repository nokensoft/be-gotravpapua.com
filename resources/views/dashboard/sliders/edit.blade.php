@extends('dashboard.layout.app')

@section('content')
    @include('dashboard.layout.includes.breadcrumb2')

    <!-- .row START -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route(Request::segment(1) . '.' . Request::segment(2) . '.update', $data->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-lg-8">

                                <!-- input item START -->
                                <div class="mb-3">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" id="title" name="title" class="form-control rounded-0"
                                        placeholder="write slider title here" value="{!! $data->title ?? '' !!}">

                                    @if ($errors->has('title'))
                                        <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('title') }}</small>
                                        </span>
                                    @endif

                                </div>
                                <!-- input item END -->

                                <!-- input item START -->
                                <div class="mb-3">
                                    <label for="description">Description / Sub Title</label>
                                    <textarea id="description" name="description" rows="3" class="form-control rounded-0"
                                        placeholder="write some description in one or two sentences">{!! $data->description ?? '' !!}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('description') }}</small>
                                        </span>
                                    @endif

                                </div>
                                <!-- input item END -->

                                <!-- input item START -->
                                <div class="mb-3">
                                    <label for="button_text">Button Text</label>
                                    <input type="text" id="button_text" name="button_text" class="form-control rounded-0"
                                        placeholder="write slider button text here" value="{!! $data->button_text ?? '' !!}">

                                    @if ($errors->has('button_text'))
                                        <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('button_text') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input item END -->
                                <!-- input item START -->
                                <div class="mb-3">
                                    <label for="button_link">Button Link</label>
                                    <input type="text" id="button_link" name="button_link" class="form-control rounded-0"
                                        placeholder="write slider button text here" value="{!! $data->button_link !!}">

                                    @if ($errors->has('button_link'))
                                        <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('button_link') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input item END -->

                                <div class="mb-3">
                                    <label for="gambar" class="form-label d-block">Image </label>
                                    <div class="mb-2">
                                        @if (!$data->picture)
                                            <img src="{{ asset('images/tour_packages/00.png') }}" alt="Gambar"
                                                id="preview-gambar" class="img-thumbnail img-fluid w-100">
                                        @else
                                            <img src="{{ asset($data->picture) }}" id="preview-gambar"
                                                class="img-thumbnail img-fluid w-100">
                                        @endif
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" name="picture" class="custom-file-input" id="gambar"
                                            accept="image/*">
                                        <small class="text-muted mt-2 d-block">Select a new image from your computer</small>
                                        <label class="custom-file-label" for="customFile">Select image</label>
                                    </div>

                                    @if ($errors->has('picture'))
                                        <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('picture') }}</small>
                                        </span>
                                    @endif

                                </div>
                                <!-- input item END -->

                            </div>

                            <div class="col-lg-4">

                                <!-- input item START -->

                                <!-- input item START -->
                                <div class="mb-3">
                                    <label for="description">Status </label>
                                    <select name="status" class="form-control" id="">
                                        <option value="" hidden>Select</option>
                                        <option value="Publish" @if (old('status', $data->status) == 'Publish') Selected @endif>Publish
                                        </option>
                                        <option value="Draft" @if (old('status', $data->status) == 'Draft') Selected @endif>Draft
                                        </option>
                                    </select>

                                    @if ($errors->has('status'))
                                        <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('status') }}</small>
                                        </span>
                                    @endif

                                </div>
                                <!-- input item END -->

                                <button type="submit" class="btn btn-primary rounded-0">
                                    <i class="fa-solid fa-save"></i> Save
                                </button>
                                <!-- input item END -->

                                <a href="{{ route(Request::segment(1) . '.' . Request::segment(2) . '') }}"
                                    class="btn btn-outline-dark rounded-0 border-0">
                                    <i class="fa-solid fa-times-square"></i> Cancle
                                </a>
                                <!-- input item END -->

                            </div>
                        </div>

                    </form>

                </div>
                <!-- .card-body END -->
            </div>
            <!-- .card END -->
        </div>
        <!-- .col END -->
    </div>
    <!-- .row END -->
@endsection

@push('script-footer')
    <script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
        CKEDITOR.config.height = '200px';

        $(document).ready(function(e) {
            $('#gambar').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-gambar').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

        });
    </script>
@endpush
