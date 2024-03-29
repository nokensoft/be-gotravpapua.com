@extends('dashboard.layout.app')

@section('content')
    @include('dashboard.layout.includes.breadcrumb2')

    <!-- .row START -->
    <div class="row">

        <div class="col-md-8">
            <div class="card">
                @if (empty($data->picture))
                    <img src="{{ asset('images/tour_' . Request::segment(2) . '/00.png') }}" alt="Image"
                        class="card-img-top">
                @else
                    <img src="{{ asset($data->picture) }}" alt="Image" class="card-img-top">
                @endif
                <div class="card-body">

                    <div class="p-2 px-3 border-bottom">
                        <b class="d-block mb-2">Title </b>
                        {!! $data->title ?? '' !!}
                    </div>
                    <!-- input item END -->

                    <div class="p-2 px-3 border-bottom">
                        <b class="d-block mb-2">Description / Sub Title</b>
                        {!! $data->description ?? '' !!}
                    </div>
                    <!-- input item END -->

                    <div class="p-2 px-3 border-bottom">
                        <b class="d-block mb-2">Button Text</b>
                        {!! $data->button_text ?? '' !!}
                    </div>
                    <!-- input item END -->

                    <div class="p-2 px-3 border-bottom">
                        <b class="d-block mb-2">Button Link</b>
                        {!! $data->button_link ?? '' !!}
                    </div>
                    <!-- input item END -->

                </div>
                <!-- .card-body END -->
            </div>
            <!-- .card END -->
        </div>
        <!-- .col END -->

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">

                    {{-- <div class="p-2 px-3 border-bottom">
                        <a href="{{ $settings->site_address . 'tour-' . Request::segment(2) . '/' . $data->slug ?? 'https://gotravpapua.com' }}"
                            class="btn btn-sm btn-dark rounded-0" target="_blank">
                            <i class="fa-solid fa-eye"></i> Public view
                        </a>
                    </div> --}}
                    <!-- input item END -->

                    <div class="p-2 px-3 border-bottom">
                        <b class="d-block mb-2">Status </b>
                        {!! $data->status ?? '' !!}
                    </div>
                    <!-- input item END -->

                    <div class="p-2 px-3 border-bottom">
                        <b class="d-block mb-2">Created at </b>
                        {!! $data->created_at ?? '' !!}
                    </div>
                    <!-- input item END -->

                    <div class="p-2 px-3 border-bottom">
                        <b class="d-block mb-2">Updated at </b>
                        {!! $data->updated_at ?? '' !!}
                    </div>
                    <!-- input item END -->

                    <div class="p-2 px-3">

                        <div class="d-flex">
                            <a href="{{ route(Request::segment(1) . '.' . Request::segment(2) . '', $data->id) }}"
                                class="btn btn-sm btn-light rounded-0">
                                <i class="fa-solid fa-reply"></i>
                            </a>
                            <a href="{{ route(Request::segment(1) . '.' . Request::segment(2) . '.edit', $data->id) }}"
                                class="btn btn-sm btn-light rounded-0">
                                <i class="fa-solid fa-edit"></i>
                            </a>

                            <form
                                action="{{ route(Request::segment(1) . '.' . Request::segment(2) . '.destroy', $data->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-light rounded-0">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                    <!-- input item END -->

                </div>
            </div>
        </div>
        <!-- .col END -->

    </div>
    <!-- .row END -->
@endsection
