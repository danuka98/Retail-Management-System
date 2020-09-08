@extends('layouts.main')
@section('content')

<div class="pg-heading">
    <i class="fa fa-arrow-left pg-back"></i>
    <div class="pg-title">All Payment</div>
</div>

<div class="section" > {{-- Start of Section--}}
    <div class="section-title">
        Payment for Staff member's
        <hr>
    </div>
    <div class="section-content"> {{-- Start of sectionContent--}}

        <table id="myTable" class="table hover table-striped table-borderless table-hover all-table">
            <div class="add-btn">
                <a href="{{ route('salaryPayment.create') }}">+ Add Staff Payment</a>
            </div>
            <thead class="table-head">
                <tr>
                    <th>Pay ID</th>
                    <th>Staff ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($salaryPayment as $row)
            <tbody>
                <tr>
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['staffID'] }}</td>
                    <td>{{ $row['amount'] }}</td>
                    <td>{{ $row['date'] }}</td>
                    <td class="action-icon">
                        <a href="{{ route('salaryPayment.edit',$row['id']) }}"><i class="fas fa-pen"></i></a>
                        <form method="POST" class="dlt-form" action="{{ route('salaryPayment.destroy',$row['id']) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="dlt-btn"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div> {{-- End  of sectionContent--}}
</div> {{-- End  of section--}}

@endsection
