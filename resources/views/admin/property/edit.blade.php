@extends('admin.layouts.app')

@section('contents')

<main id="main" class="main">
    @include('common.alert')

    {{-- <div class="pagetitle">
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
   --}}

    <div class="card">
        <section class="section">
            <div class="row">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Property Form</h5>
    
                  <!-- Floating Labels Form -->
                  <form action="{{ route('property.update', ['property'=> $property->id]) }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" name="title" placeholder="Property Title" value="{{ $property->title }}">
                        <label for="floatingName">Title</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" name="price" placeholder="Price" value="{{ $property->price }}">
                        <label for="floatingPassword">Price</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-floating">
                        <input type="number" class="form-control" id="floatingEmail" name="beswa" placeholder="Beswa" value="{{ $property->beswa }}">
                        <label for="floatingEmail">Beswa</label>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" name="address" placeholder="Address" value="{{ $property->address }}">
                        <label for="floatingPassword">Address</label>
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                      <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="State" name="type">
                          <option value="Home" @if($property->type == 'Home')  @selected(true)  @endif>Home</option>
                          <option value="Courty-yard" @if($property->type == 'Courty-yard')  @selected(true) @endif>Courty-yard</option>
                          <option value="Block" @if($property->type == 'Block')  @selected(true) @endif >Block</option>
                          <option value="Sarai" @if( $property->type == 'Sarai')  @selected(true) @endif >Sarai</option>
                          <option value="Zamen" @if($property->type == 'Zamen')  @selected(true) @endif >Zamen</option>
                        </select>
                        <label for="floatingSelect">Type</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="State" name="category">
                          <option selected="Sale" @if($property->category == 'Sale')  @selected(true) @endif >Sale</option>
                          <option value="Sell" @if($property->category == 'Sell')  @selected(true) @endif >Sell</option>
                          <option value="Mortgage" @if($property->category == 'Mortgage')  @selected(true) @endif >Mortgage</option>
                          <option value="Rent" @if($property->category == 'Rent')  @selected(true) @endif >Rent</option>
                        </select>
                        <label for="floatingSelect">Category</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-floating">
                        <input type="file" class="form-control" id="floatingPassword" name="photo" placeholder="Password">
                        <label for="floatingPassword">Photo</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating">
                        {{--  tinymce-editor Is the Class of Rich Text Editor--}}
                        <textarea 
                        class="tinymce-editor" 
                        placeholder="Address" id="floatingTextarea" style="height: 100px;" name="description">{{ $property->description }}</textarea>
                        <label for="floatingTextarea">Description</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="number" id="quantity" name="rooms" min="1" class="form-control" id="floatingCity" placeholder="Rooms" value="{{ $property->PropertyIndoor->rooms }}">
                          <label for="floatingCity">Rooms</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="number" id="quantity" name="kitchen" min="1" class="form-control" id="floatingCity" placeholder="Kitchen" value="{{ $property->PropertyIndoor->kitchen }}">
                          <label for="floatingCity">Kitchen</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="number" id="quantity" name="bathroom" min="1" class="form-control" id="floatingCity" placeholder="bathroom" value="{{ $property->PropertyIndoor->bathroom }}">
                          <label for="floatingCity">Bathroom</label>
                        </div>
                      </div>
                    </div>  

                    <div class="col-md-3">
                      <div class="form-floating mb-3">
                        <select name="tag[]" class="form-select" id="floatingSelect" aria-label="State" multiple>
                            @foreach ($tags as $tag)
                            <option value="{{$tag->id}}"
                                  @foreach ($selected_tags as $selected)
                                      {{$selected === $tag->id ? 'selected' : ''}}
                                  @endforeach
                            >{{$tag->name }}</option>
                            @endforeach
                    </select>
                        </select>
                        <label for="floatingSelect">Tags</label>
                      </div>
                    </div>
                   
                    
                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form><!-- End floating Labels Form -->
    
                </div>
              </div>
            
            </div>
        </section>
  </main>
  

@endsection