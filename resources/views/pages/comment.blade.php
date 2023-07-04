@extends('layouts.comment')

@section('title')
  Comment
@endsection

@section('content')

<section class="bg-light">
  
</section>


  <!-- Begin Page Content -->
  <section class="bg-light pb-5">
    <div class="container py-5 text-dark">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-8">
          <div class="card">
            <div class="card-body p-4">
              <div class="d-flex flex-start w-100">
                <div class="w-100">
                  <h5 class="mb-3">Add a comment</h5>
                  <form name="kontak" method="POST" action="{{ route('comment.store') }}">
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="content" class="form-label">Pendapat dan saran anda</label>
                    <textarea type="text" class="form-control" id="content" name="content" row="2"></textarea>
                  </div>
                    <div class="d-flex justify-content-between mt-3">
                      <button type="submit" class="btn btn-warning">
                        Send
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-8">
          <div class="card text-dark">
            <div class="card-body p-4">
              <h4 class="mb-0">Recent comments</h4>
              <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
  
              @foreach ($items as $item)
                <div class="d-flex flex-start">
                  <img class="rounded-circle shadow-1-strong me-3"
                    src="https://ui-avatars.com/api/?name={{ $item->name }}" alt="avatar" width="60"
                    height="60" />
                  <div class="mb-3">
                    <div class="d-flex">
                      <h6 class="fw-bold mb-1">{{ $item->name }}</h6>
                      <span class="badge bg-primary ms-2">User</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                      <p class="mb-0">
                        <em>{{ $item->created_at }}</em>
                      </p>
                    </div>
                    <p class="mb-0">
                      "{{ $item->content }}"
                    </p>
                  </div>
                </div>
                <hr size="20" style="border-top: 2px solid black;" >
              @endforeach
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.container-fluid -->
@endsection

@push('prepend-style')
  <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
  <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
  <script>
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      uiLibrary: 'bootstrap5',
      icons: {
        rightIcon: '<img src="{{url ('frontend/images/ic_doe.png')}}"/>'
      }
    });
</script>
@endpush