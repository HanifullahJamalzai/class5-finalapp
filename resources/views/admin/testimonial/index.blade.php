@extends('admin.layouts.app')

@section('contents')

<main id="main" class="main">
    @include('common.alert')

    <div class="card">
        
        <div class="card-body">
            <div class="d-flex" style="justify-content: space-between; align-items: center;">
                <h5 class="card-title">Testimonial</h5>
                <div class="search-bar">
                    <form class="search-form d-flex align-items-center" method="get" action="{{ route('testimonial.search') }}">
                      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>
                </div><!-- End Search Bar -->
            </div>

          <form action="{{ isset($testimonial) ? route('testimonial.update', ['testimonial' => $testimonial->id]) : route('testimonial.store') }}" method="post">
            @csrf
            @if (isset($testimonial))
                @method('put')
            @endif

            <div class="d-flex" style="justify-content: space-between">
                <div class="form-floating mb-3 col-md-5">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name" 
                    value="@if(isset($testimonial)){{ $testimonial->name }}@else{{ old('name') }}@endif">
                    <label for="floatingInput">Name </label>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3 col-md-5">
                    <input type="text" name="position" class="form-control" id="floatingInput" placeholder="Manager" 
                    value="@if(isset($testimonial)){{ $testimonial->position }}@else{{ old('position') }}@endif">
                    <label for="floatingInput">Position</label>
                    @error('position')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="description" placeholder="Leave Description" id="floatingTextarea" style="height: 70px;">{{ isset($testimonial) ? $testimonial->description : old('description') }}</textarea>
                <label for="floatingTextarea">Description</label>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary w-100" type="submit">{{ isset($testimonial) ? "Update" : "Store" }}</button>
        </form>

        </div>
      </div>


    <section class="section">
      <div class="row">

        @foreach ($testimonials as $item)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body pt-4">
                        <div class="d-flex" style="justify-content: space-between">
                            <span> Testimonial </span>
                            <span class="d-flex">
                                <a href="{{ route('testimonial.edit', ['testimonial' => $item->id]) }}">
                                    <i class="bi bi-pen" style="cursor: pointer"></i> | 
                                </a>
                                
                                <form action="{{ route('testimonial.destroy', ['testimonial' => $item->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" style="border: none;"> 
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </span>
                        </div>

                        <ul class="list-group">
                            <li class="list-group-item">Name: {{ $item->name }}</li>
                            <li class="list-group-item">Position: {{ $item->position }}</li>
                            <li class="list-group-item">
                                <span class="bg-primary text-white p-1 text-bold" style="border-radius: 5px;"> Description: </span> <br>
                                <p> {{ $item->description }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
            {{ $testimonials->links() }}
        
      </div>
    </section>

  </main>
  

@endsection