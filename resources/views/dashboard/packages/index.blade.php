@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb2')

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row mb-2">
                                            <div class="col-12">
                                                <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) .'/create') }}" class="btn btn-lg btn-primary rounded-0">
                                                    <i class="fa-solid fa-plus"></i> Create
                                                </a>
                                            </div>
                                            
                                        </div>

                                        <p>This settings page lets you customize things. You can adjust how the website works to fit your needs.</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) .'/publish') }}" class="btn btn-sm btn-dark rounded-0">
                                                    <i class="fa-solid fa-check mr-1"></i> Publish
                                                </a>

                                                <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) .'/draft') }}" class="btn btn-sm btn-outline-dark rounded-0">
                                                    <i class="fa-solid fa-pause mr-1"></i> Draft
                                                </a>

                                                <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) .'/trash') }}" class="btn btn-sm btn-outline-dark rounded-0">
                                                    <i class="fa-solid fa-trash mr-1"></i> Trash
                                                </a>

                                            </div>
                                            <div class="col-lg-6">
                                                
                                                <form action="{{ url(Request::segment(1) . '/' . Request::segment(2)) }}" method="get">
                                                
                                                    <div class="input-group mb-3">
                                                        <input type="search" name="s" class="form-control form-control-sm rounded-0" placeholder="Search {{ ucfirst(Request::segment(2)) }}" value="{{ request()->s ?? '' }}">
                                                        <button type="submit" class="btn btn-sm btn-primary rounded-0">
                                                            <div class="fa-solid fa-search me-1"></div> Go!
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="table-responsive">

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Cover</th>
                                                        <th>Title</th>
                                                        <th>Updated At</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <img src="{{ asset('images/packages/00.jpg') }}" alt="Image" style="width:200px" class="border shadow">
                                                        </td>
                                                        <td>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit.</td>
                                                        <td>27/08/2023</td>
                                                        <td>
                                                            <span class="badge">
                                                                <i class="fa-solid fa-check"></i> Publish
                                                            </span>
                                                        </td>
                                                        <td class="d-flex gap-2">
                                                            <a href="#" class="btn btn-light rounded-0">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-light rounded-0">
                                                                <i class="fa-solid fa-pencil"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-light rounded-0">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <img src="{{ asset('images/packages/00.jpg') }}" alt="Image" style="width:200px">
                                                        </td>
                                                        <td>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet consectetur.</td>
                                                        <td>27/08/2023</td>
                                                        <td>
                                                            <span class="badge">
                                                                <i class="fa-solid fa-check"></i> Publish
                                                            </span>
                                                        </td>
                                                        <td class="d-flex gap-2">
                                                            <a href="#" class="btn btn-light rounded-0">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-light rounded-0">
                                                                <i class="fa-solid fa-pencil"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-light rounded-0">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                        <div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                  <li class="page-item"><a class="page-link rounded-0" href="#">Previous</a></li>
                                                  <li class="page-item"><a class="page-link rounded-0" href="#">1</a></li>
                                                  <li class="page-item"><a class="page-link rounded-0" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link rounded-0" href="#">3</a></li>
                                                  <li class="page-item"><a class="page-link rounded-0" href="#">Next</a></li>
                                                </ul>
                                              </nav>
                                        </div>

                                    </div> <!-- end .caard-body-->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- .row end -->

@stop
