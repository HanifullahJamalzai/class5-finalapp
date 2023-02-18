@extends('admin.layouts.app')

@section('contents')

<main id="main" class="main">
    @include('common.alert')

    <div class="card">
        
        <div class="card-body">
          <h5 class="card-title">Testimonial</h5>

          <form action="{{ route('testimonial.store') }}" method="post">
            @csrf
            <div class="d-flex" style="justify-content: space-between">
                <div class="form-floating mb-3 col-md-5">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name" value="{{ old('name') }}">
                    <label for="floatingInput">Name </label>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3 col-md-5">
                    <input type="text" name="position" class="form-control" id="floatingInput" placeholder="Manager" value="{{ old('position') }}">
                    <label for="floatingInput">Position</label>
                    @error('position')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="description" placeholder="Leave Description" id="floatingTextarea" style="height: 70px;">{{ old('description') }}</textarea>
                <label for="floatingTextarea">Description</label>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary w-100" type="submit">Save</button>
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
                            <span><i class="bi bi-pen" style="cursor: pointer"></i> | <i class="bi bi-trash" style="cursor: pointer"></i></span>
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

        
      </div>
    </section>

  </main>
  

@endsection