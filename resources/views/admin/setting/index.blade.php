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

        <section class="section">
            <div class="row">
              <div class="card p-4">
                  <h5 class="card-title">Setting </h5>
    
                  <!-- Floating Labels Form -->
                    <form action="{{ isset($setting) ? route('setting.update', $setting) : route('setting.store') }}" method="post">
                      @csrf
                      @if(isset($setting)) @method('put') @endif
                
                        
                        <div class="col-md-12">
                          <input type="text" class="form-control" name="address" placeholder="Address" value="{{isset($setting) ? $setting->address : ''}}" >
                          @error('address')
                            <span class="text-danger text-sm">{{$message}}</span>
                          @enderror
                        </div>
                
                        <div class="col-md-12">
                          <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{isset($setting) ? $setting->phone : ''}}" >
                          @error('phone')
                            <span class="text-danger text-sm">{{$message}}</span>
                          @enderror
                        </div>
                
                        <div class="col-md-12">
                          <input type="email" class="form-control" name="email" placeholder="Email" value="{{isset($setting) ? $setting->email : ''}}" >
                          @error('email')
                            <span class="text-danger text-sm">{{$message}}</span>
                          @enderror
                        </div>
                
                        <div class="col-md-12">
                          <textarea class="form-control" name="footer_description" rows="7" placeholder="Footer Description" >{{isset($setting) ? $setting->footer_description : ''}} </textarea>
                        </div>
                        @error('footer_description')
                          <span class="text-danger text-sm">{{$message}}</span>
                        @enderror
                
                        <div class="col-md-12 text-center mt-2">
                          <button type="submit" class="btn {{isset($setting) ? 'btn-info' : 'btn-primary'}} w-100 ">
                            {{isset($setting) ? 'Update' : 'Save'}}
                          </button>
                        </div>
                    </form>


                </div>
              </div>
            
            </div>
        </section>
  </main>
  

@endsection



