@extends('admin.layouts.app')

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
            {{-- here should be data-table --}}
           
        </section>


  </main>
  

@endsection