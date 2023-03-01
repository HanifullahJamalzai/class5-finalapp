@extends('admin.layouts.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
@endsection

@section('contents')

<main id="main" class="main">
    @include('common.alert')

    <div class="pagetitle">
        <h1>Prperty Page</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Blank</li>
          </ol>
        </nav>
    </div>
    <!-- End Page Title -->
  

    <div class="card">
        <section class="section">
            {{-- <div class="row">
                
            </div> --}}
            <div class="card mb-4">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between">
                        <span>
                            Properties List 
                        </span>
                        <span>
                            <a href="{{ route('property.create') }}" class="btn btn-primary">Add Property</a>
                        </span>

                    </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Price</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Rooms</th>
                                <th>Bathroom</th>
                                <th>Kitchen</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Price</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Rooms</th>
                                <th>Bathroom</th>
                                <th>Kitchen</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($properties as $item)
                                <tr>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->category }}</td>
                                    
                                    <td>{{ $item->propertyIndoor->rooms}}</td>
                                    <td>{{ $item->propertyIndoor->bathroom }}</td>
                                    <td>{{ $item->propertyIndoor->kitchen}}</td>
                                    
                                    <td>
                                        @can('delete', $item)
                                            <button class="btn btn-success">Edit</button>
                                            <button class="btn btn-danger">DELETE</button>
                                        @endcan
        
                                    </td>

                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
           
        </section>


  </main>
  

@endsection

@section('scripts')
{{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
<script src="{{ asset('admin_assets/js/datatable.js') }}"></script>
@endsection