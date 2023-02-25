@extends('admin.layouts.app')

@section('contents')

<main id="main" class="main">
    @include('common.alert')

    <div class="card">
        
        <div class="card-body">
            <div class="d-flex" style="justify-content: space-between; align-items: center;">
                <h5 class="card-title">Testimonial</h5>
        </div>
      </div>


    <section class="section">
      <div class="row">

        @foreach ($trashed as $item)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body pt-4">
                        <div class="d-flex" style="justify-content: space-between">
                            <span> Testimonial </span>
                            <span class="d-flex">
                                <a href="{{ route('testimonial.restore', ['testimonial' => $item->id]) }}">
                                    Restore | 
                                </a>
                                
                                <form action="{{ route('testimonial.forceDelete', ['testimonial' => $item->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" style="border: none;"> 
                                        Force Delete
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
        
      </div>
    </section>

  </main>
  

@endsection