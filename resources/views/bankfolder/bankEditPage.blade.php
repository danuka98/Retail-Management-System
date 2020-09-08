@extends('layouts.main')
@section('content')
  
<div class="pg-heading">
    <i class="fa fa-arrow-left pg-back"></i>
    <div class="pg-title">Edit Bank Account Details</div>
</div>

<div class="section"> {{-- Start of Section--}}
    <div class="section-title">
        Bank Account Information
        <hr>
    </div>
    <div class="section-content"> {{-- Start of sectionContent--}}


    <form method ="POST" action="{{action('BankAccountController@update',$banks->id)}}">
{{csrf_field()}}

<div class="row">
                <div class="col">
    <input type="text" class="form-control" name="number" id="number" value="{{ $banks->number}}"  placeholder="Account Number"/>
    <label for="number" class="float-label">Account Number</label>
  </div>

  <div class="col">
    <input type="text" class="form-control" name="name" id="name" value="{{ $banks->name}}" placeholder="Account Name"/>
    <label for="name" class="float-label">User Name</label>
  </div>
  </div>

  <div class="row">
                <div class="col">
    <input type="text" class="form-control" name="type" id="type" value="{{ $banks->type}}" placeholder="Account Type"/>
    <label for="type" class="float-label">Account Type</label>
  </div>

  <div class="col">
    <input type="text" class="form-control" id="bankname" name="bankname"  value="{{ $banks->bankname}}" placeholder="Bank Name"/>
    <label for="bankname" class="float-label">Bank Name</label>
  </div>
  </div>

  <div class="row">

                <div class="col-md-6">
    <input type="text" class="form-control" id="branchname" name="branchname" value="{{ $banks->branchname}}" placeholder="Branch Name"/>
    <label for="branchname" class="float-label">Branch Name</label>
  </div>
  </div>

{{method_field('PUT')}}
<div class="row submit-row">
                <div class="col">
                    <input class="btn-submit" type="submit" value="Submit">
                </div>
                </div>
                </div>
  </form>
       </div>
    </div>

}
@endsection