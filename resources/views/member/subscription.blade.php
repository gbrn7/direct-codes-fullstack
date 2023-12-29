@extends('member.layouts.base')

@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('directCodes/assets/Style/SubscriptionStyle/main.css') }}">
@endsection

@section('content')
<section class="content">
      <div class="container-fluid content-wrapper">
        <div class="col-lg-12 justify-content-end d-flex align-items-end">
          <div class="col-lg-10 d-flex mt-5 gap-5 wrap">
            <div class="col-lg-3 content-wrap">
              <div class="head text-center">  
                <p class="title">{{$userPremium->package->name}}</p>
                <p class="price">{{$userPremium->package->price}}<span>/{{$userPremium->package->max_days}} Day</span></p>
              </div>
              <div class="benefit-wrapper">
                <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">{{$userPremium->package->max_users}} User</p></div>
                <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Up to 40 Course Videos</p></div>
                <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Source Code</p></div>
                <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Discussion Group</p></div>
                @if ($userPremium->package->name == 'pro' || $userPremium->package->name == 'ultimate')
                <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Discussion Group</p></div>
                 <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Free Consultation</p></div>
                @endif
              </div>
            </div>
            <div class="col-lg-2 desc-wrapper d-flex flex-column justify-content-center align-items-start">
              <div class="col-12 title">
                <p class="name mb-1">{{$userPremium->package->name}}</p>
                <div class="timeline mt-2 p-2"><p class="m-0"><span class="text-danger">
                  {{ $exp }}
                </span> Days Left</p></div>
              </div>
              <div class="btn-group d-flex flex-column mt-5 col-lg-12">
                <a href="{{ route('member.pricing') }}" class="text-decoration-none text-black">
                  <div class="btn-1 button col-lg-12">Change Plan</div>
                </a>
                <form action="{{ route('member.subs.destroy', $userPremium->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn-2 button text-decoration-none text-black p-0">
                    <div class="btn-3 button col-lg-12">Stop Subscription</div>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection
