
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="p-2 px-3 border-bottom">
                    <b class="d-block mb-2">Name </b>
                    {!! $data->name ?? '' !!}
                </div>
                <!-- item END -->   

                <div class="p-2 px-3 border-bottom">
                    <b class="d-block mb-2">Email </b>
                    {!! $data->email ?? '' !!}
                </div>
                <!-- item END --> 

                <div class="p-2 px-3 border-bottom">
                    <b class="d-block mb-2">Phone </b>
                    {!! $data->phone ?? '' !!}
                </div>
                <!-- item END --> 

                <div class="p-2 px-3 border-bottom">
                    <b class="d-block mb-2">Message </b>
                    {!! $data->message ?? '' !!}
                </div>
                <!-- item END --> 

                <div class="p-2 px-3 border-bottom">
                    <b class="d-block mb-2">Date </b>
                    {!! $data->created_at ?? '' !!}
                </div>
                <!-- item END --> 

                <div class="p-2 px-3">

                    <div class="d-flex">
                        <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'', $data->id) }}" class="btn btn-sm btn-light rounded-0">
                            <i class="fa-solid fa-reply"></i>
                        </a>

                        <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-light rounded-0">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        </form>
                    </div>

                </div>

            </div>
            <!-- .card-body END -->
        </div>
        <!-- .card END -->
    </div>
    <!-- .col END -->
</div>
<!-- .row END -->

@endsection
