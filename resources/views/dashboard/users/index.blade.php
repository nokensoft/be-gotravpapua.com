
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @include('dashboard.layout.includes.index-top-section')

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Job Postion</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    @if ($data->picture)
                                    <img src="{{ asset($data->picture ?? '') }}" alt="Picture" class="img img-thumbnail" style="width: 8rem;">
                                    @else
                                    <img src="{{ asset('images/users/00.png') }}" alt="Picture" class="img img-thumbnail" style="width: 8rem">
                                    @endif
                                </td>
                                <td>{{ $data->name ?? '' }}</td>
                                <td>{{ $data->job_title  }}</td>
                                <td>{{ $data->email  }}

                                </td>
                                <td>
                                    @if ($data->status === "Publish")
                                        Active
                                    @else
                                      Inactive
                                    @endif

                                </td>
                                @if (Request::segment(3) == 'trash')
                                <td class="d-flex">

                                    <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.restore', $data->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-success rounded-0 mx-1">
                                        <i class="fa-solid fa-reply"></i> Restore
                                    </button>
                                    </form>

                                    <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.delete', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-0 mx-1 show_confirm">
                                        <i class="fa-solid fa-times-square" data-toggle="tooltip" title='Delete'></i> Delete Permanently
                                    </button>
                                    </form>

                                </td>
                                @else
                                <td class="d-flex">
                                    
                                    @if ($data->email == 'admin@gotravpapua.com')

                                    @else
                                    
                                    <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'.edit', $data->id) }}" class="btn btn-sm btn-light rounded-0 mx-1">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>

                                    <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light rounded-0 mx-1">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    </form>
                                        
                                    @endif

                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- .table-responsive END -->

            </div>
            <!-- .card-body END -->
            
            <div class="card-footer d-flex justify-content-center">
                {!! $datas->links() !!}
            </div>
            <!-- .card-footer END -->

        </div>
        <!-- .card END -->
    </div>
    <!-- .col END -->
</div>
<!-- .row END -->

@endsection
@include('dashboard.layout.includes.index-script-footer')
