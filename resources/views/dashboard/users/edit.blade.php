
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">

                <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('email',$data->name) }}" class="form-control rounded-0" placeholder="write username here">
                                <input type="hidden" id="job_title" name="job_title" class="form-control rounded-0" value="value="{{ old('email',$data->job_title) }}">
                                @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('name') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="description">Email <span class="text-danger">*</span></label>
                                <input type="email" id="title" name="email" value="{{ old('email',$data->email) }}" class="form-control rounded-0" placeholder="write email here">
                                @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('email') }}</small>
                                    </span>
                                @endif
                            </div>
                            <!-- input item END -->

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="description">Password </label>
                                <input type="password" id="password" name="password" class="form-control rounded-0" placeholder="write password here">
                                @if ($errors->has('password'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('password') }}</small>
                                    </span>
                                @endif
                            </div>
                            <!-- input item END -->

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="password_confirmation">Confirmation Password </label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control rounded-0" placeholder="write confirmation password  here">
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('password_confirmation') }}</small>
                                    </span>
                                @endif
                            </div>
                            <!-- input item END -->

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="description">Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control" id="">
                                    <option value="" hidden>Select</option>
                                    <option value="Publish" @if(old('status', $data->status) == 'Publish') Selected @endif>Publish</option>
                                    <option value="Draft" @if(old('status', $data->status) ==   'Draft' ) Selected @endif>Draft</option>
                                </select>

                                @if ($errors->has('status'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('status') }}</small>
                                    </span>
                                @endif
                            </div>
                            <!-- input item END -->

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="roles">Roles <span class="text-danger">*</span></label>
                                <select name="roles" class="form-control" id="">
                                    @php
                                        $roleID = implode('', $data->roles()->pluck('id')->toArray());
                                    @endphp
                                    @foreach ($roles as $role )
                                            <option value="{{ $role->id }}" @if ($roleID == $role->id )
                                                selected="selected"
                                            @endif >
                                                {{ $role->display_name }}
                                            </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- input item END -->

                        </div>
                        <!-- col END -->
                        
                        <div class="col-lg-6">

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="gambar" class="form-label d-block">Image {{ $data->picture }} </label>
                                <div class="mb-2">
                                    @if (!$data->picture)
                                    <img src="{{ asset('images/users/00.png') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                                    @else
                                    <img src="{{ asset($data->picture) }}" id="preview-gambar" class="img-thumbnail img-fluid">
                                    @endif
                                </div>

                                <div class="custom-file">
                                    <input type="file" name="picture" class="custom-file-input" id="gambar" accept="image/*">
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

                            <button type="submit" class="btn btn-primary rounded-0">
                                <i class="fa-solid fa-plus-square"></i> Submit
                            </button>
                            <!-- input item END -->

                            <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'') }}" class="btn btn-outline-dark rounded-0 border-0">
                                <i class="fa-solid fa-times-square"></i> Cancle
                            </a>
                            <!-- input item END -->
                            
                        </div>
                        <!-- col END -->

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
<script src="{{ asset('assets/admin/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $('#gambar').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-gambar').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });
</script>

@endpush
