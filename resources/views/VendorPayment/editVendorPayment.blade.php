@extends('layouts.main')
@section('content')

<div class="pg-heading">
  <a href="{{ route('vendorPayment.index') }}"><i class="fa fa-arrow-left pg-back"></i></a>
  <div class="pg-title">Edit Vendor Payment</div>
</div>

<div class="section"> {{-- Start of Section--}}
  <div class="section-title">
      Edit Payment for Vendor's
      <hr>
  </div>
  <div class="section-content" > {{-- Start of sectionContent--}}
      {{-- Start of Form --}}

    <form method="post" action="{{route('vendorPayment.update',$vendorPayment->id)}}" >
        @csrf
        @method('PATCH')
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="sup-label">Vendor Name</label>
                    <select class="form-control sup-select" name="vendorID">
                        <option value="" disabled selected hidden>Select a Vendor</option>
                        @foreach($vendor as $v)
                        <option value="{{$v->id}}">{{$v->first_name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                  <div class="col">
                    <div class="form-group">
                      <label class="sup-label">Payment Type</label>
                      <select class="form-control sup-select" name="paymentType" id="paymentType">
                          <option value="" disabled selected hidden>Select a Payment Type</option>
                          <option value="Cash" >Cash</option>
                          <option value="Bank" >Bank</option>
                          <option value="Cheque" >Cheque</option>
                      </select>
                    </div>
                  </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="form-group" id="bankDetails">
                    <label class="sup-label">Bank Details</label>
                    <select class="form-control sup-select" name="bank">
                        <option value="" disabled selected hidden>Select a Bank</option>
                        @foreach($banks as $b)
                        <option value="{{$b->id}}">{{$b->bankname}} - Holder name : {{ $b->name }} - Acc. No. : {{ $b->number }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="col"></div>
              </div>

              <div class="row">
                <div class="col">
                  <input type="number" id="amount" name="amount" value="{{ $vendorPayment->amount }}" class="form-control" placeholder="Amount" />
                  <label for="paymentId" class="float-label">Amount</label>
              </div>
                <div class="col">
                    <input type="date" class="form-control" name="date" value="{{ $vendorPayment->date }}" placeholder="Date">
                    <label class="float-label">Date</label>
                </div>
              </div>
              


              <hr>


              <div class="row submit-row">
                  <div class="col">
                      <input class="btn-submit" type="submit" value="Edit">
                  </div>
              </div>

              
          </form>


        </div> {{-- End  of sectionContent--}}
      </div> {{-- End  of section--}}
      

<script>
$(document).ready(function(){
  $('#paymentType').on('change', function(){

    if(this.value == 'Bank'){
      $("#bankDetails").show();
    }
    else{
      $("#bankDetails").hide();
    }
  }).trigger("change");
});
</script>

@endsection