
@if (session('success'))
<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@elseif (session('failed'))
<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
    {{ session('failed') }}
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif