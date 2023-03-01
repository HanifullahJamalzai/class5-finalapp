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
                  <form action="{{ route('property.store') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" name="title" placeholder="Property Title">
                        <label for="floatingName">Title</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" name="price" placeholder="Price">
                        <label for="floatingPassword">Price</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-floating">
                        <input type="number" class="form-control" id="floatingEmail" name="beswa" placeholder="Beswa">
                        <label for="floatingEmail">Beswa</label>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" name="address" placeholder="Address">
                        <label for="floatingPassword">Address</label>
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                      <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="State" name="type">
                          <option value="Home" selected="">Home</option>
                          <option value="Courty-yard">Courty-yard</option>
                          <option value="Block">Block</option>
                          <option value="Sarai">Sarai</option>
                          <option value="Zamen">Zamen</option>
                        </select>
                        <label for="floatingSelect">Type</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="State" name="category">
                          <option selected="Sale">Sale</option>
                          <option value="Sell">Sell</option>
                          <option value="Mortgage">Mortgage</option>
                          <option value="Rent">Rent</option>
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
                        placeholder="Address" id="floatingTextarea" style="height: 100px;" name="description"></textarea>
                        <label for="floatingTextarea">Description</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="number" id="quantity" name="rooms" min="1" class="form-control" id="floatingCity" placeholder="Rooms">
                          <label for="floatingCity">Rooms</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="number" id="quantity" name="kitchen" min="1" class="form-control" id="floatingCity" placeholder="Kitchen">
                          <label for="floatingCity">Kitchen</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="number" id="quantity" name="bathroom" min="1" class="form-control" id="floatingCity" placeholder="bathroom">
                          <label for="floatingCity">Bathroom</label>
                        </div>
                      </div>
                    </div>  

                    <div class="col-md-3">
                      <div class="form-floating mb-3">
                        <select name="tag[]" class="form-select" id="floatingSelect" aria-label="State" multiple>
                          @foreach ($tags as $tag)
                              <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                          @endforeach
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