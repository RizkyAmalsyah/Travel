@extends('layouts.checkout')

@section('title')
  Checkout
@endsection

@section('content')
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('home') }}#popular">
                  Paket Travel
                </a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{ route('detail', $item->travel_package->slug)}}">
                  Details
                </a>
              </li>
              <li class="breadcrumb-item active">
                Checkout
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0 mb-md-4">
          <div class="card card-details">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>  
            @endif

            <h1>Who is Going ?</h1>
            <p>
              Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }}
            </p>
            <div class="attendee">
              <table class="table table-sm text-center">
                <thead>
                  <tr>
                    <td>Picture</td>
                    <td>Name</td>
                    <td>Nationality</td>
                    <td>Visa</td>
                    <td>Passport</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($item->details as $detail)
                    <tr>
                      <td><img src="https://ui-avatars.com/api/?name={{ $detail->username }}"
                        height="60" class="rounded-circle"></td>
                      <td class="align-middle">
                        {{ $detail->username }}
                      </td>
                      <td class="align-middle">
                        {{ $detail->nationality }}
                      </td>
                      <td class="align-middle">
                        {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                      </td>
                      <td class="align-middle">
                        {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > 
                        \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('checkout-remove', $detail->id ) }}">
                          <img src="{{ url('frontend/images/ic_remove.png') }}">
                        </a>
                      </td>
                    </tr>  
                  @empty
                    <tr>
                      <td colspan="6" class="text-center">
                        No visitor
                      </td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            <div class="member mt-3">
              <h2>Add Member</h2>
              <form method="post" action="{{ route('checkout-create', $item->id) }}" class="row row-cols-lg-auto g-3 align-items-center">
                @csrf
                <div class="col-12">
                  <label for="username" class="visually-hidden">Name</label>
                  <input 
                    type="text" 
                    name="username" 
                    class="form-control mb-2 me-sm-2" 
                    id="username" 
                    placeholder="Username"
                    required
                  />
                </div>
                <div class="col-12">
                  <label for="nationality" class="visually-hidden">Name</label>
                  <input type="text" 
                    name="nationality" 
                    class="form-control mb-2 me-sm-2" 
                    style="width: 50px" 
                    id="nationality" 
                    placeholder="Nationality"
                    required
                  />
                </div>
                <div class="col-12">
                  <label for="is_visa" class="visually-hidden">Visa</label>
                  <select name="is_visa" 
                    id="is_visa" 
                    class="form-select mb-2 me-sm-2"
                    required
                  >
                    <option value="VISA" selected>VISA</option>
                    <option value="1">30 Days</option>
                    <option value="0">N/A</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="doe_passport" class="visually-hidden">Doe Passport</label>
                  <div class="input-group mb-2 me-sm-2">
                    <input type="text" 
                      class="form-control datepicker" 
                      id="doe_passport" 
                      name="doe_passport"
                      placeholder="DOE Passport">
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-add-now mb-2 px-4"> Add Now</button>
                </div>
              </form>
              <h3 class="mt-2 mb-2">Note</h3>
              <p class="disclaimer mb-0">
                You are only able to invite member that has registered in Nomads.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Checkout Information</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-right">
                  {{ $item->details->count() }} person
                </td>
              </tr>
              <tr>
                <th width="50%">Additional VISA</th>
                <td width="50%" class="text-right">
                  $ {{ $item->additional_visa}},00
                </td>
              </tr>
              <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-right">
                  $ {{ $item->travel_package->price }},00 / person
                </td>
              </tr>
              <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">
                  $ {{ $item->transaction_total}},00
                </td>
              </tr>
              <tr>
                <th width="50%">Total (+unique)</th>
                <td width="50%" class="text-right text-total">
                  <span class="text-blue">$ {{ $item->transaction_total}},</span>
                  <span class="text-orange">{{ mt_rand(0,99) }}</span>
                </td>
              </tr>
            </table>
            <hr/>
            <h2>Payment Instructions</h2>
            <p class="payment-instructions">
              Please complete your payment before to continue the wonderful trip
            </p>
            <div class="bank">
              <div class="bank-item pb-3">
                <img src="{{ url('frontend/images/ic_bank.png') }}" class="bank-image">
                <div class="description mb-3">
                  <h3>PT Nomads ID</h3>
                  <p>
                    0819 2726 8867
                    <br/>
                    OVO
                  </p>
                </div>
                <div class="clearfix">
                  <img src="{{ url('frontend/images/ic_bank.png') }}" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>
                      0819 2726 8867
                      <br/>
                      DANA 
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="join-container">
            <div class="d-grid">
              <a href="{{ route('checkout-success', $item->id)}}" class="btn btn-block btn-join-now mt-3 py-2">
                I Have Made Payment
              </a>
            </div>
            <div class="text-center mt-3">
              <a href="{{ route('detail', $item->travel_package->slug)}}" class="text-muted">
                Cancel Booking
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
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