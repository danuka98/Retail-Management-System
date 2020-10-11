<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style>
        .report {
            padding: 15px 0px;
            font-family: sans-serif;
        }

        .store-title {
            text-align: center;
            color: #939393;
        }

        .title {
            font-size: 28px;
            font-weight: 600;
            padding-top: 6px;
            color: #646363;
            letter-spacing: 1.1px;
            text-align: right;
        }


        .pg-title {
            font-size: 34px;
            position: relative;
            top: -35px;
            font-weight: 600;
            color: #3a3a3a;
            letter-spacing: 1.2px;

        }

        .today {
            position: absolute;
            right: 20px;
            top: 68px;
            font-weight: 600;
            letter-spacing: 1.5px;
            color: #8d8d8d;
        }

        .period {
            top: -28px;
            position: relative;
            font-weight: 600;
            color: #8d8d8d;
            font-size: 20px;
            padding-left: 5px;
            letter-spacing: 1.5px;
        }

        .all-table {
            padding: 40px 0px;
            text-align: center;
            width: 100%;
            letter-spacing: 1.5px;
            color: #3a3a3a;
        }

        .all-table td {
            letter-spacing: 2px;
        }

        .all-table th {
            font-weight: 600;
        }

        .all-table td,
        .all-table th {
            padding: 15px;
            font-size: 18px;
        }

        .table-head {
            background-color: #5c8bab;
            color: white;
        }

        .table-striped>tbody>tr:nth-child(even)>td,
        .table-striped>tbody>tr:nth-child(even)>th {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-striped>tbody>tr:nth-child(odd)>td {
            background-color: white;
        }

        .hr {
            margin-top: 15px;
            border: 1.5px solid #c2c2c2;
        }

    </style>
</head>
<body>
    <div class="report">
        @php
        date_default_timezone_set('Asia/Colombo');
        @endphp
        <div class="store-title">
            <div class="title">LEATHER LINE</div>
            {{-- <div class="address">Kurunegala</div> --}}
            <div class="today">{{ date("d-m-Y") }}</div>
        </div>
        <div class="pg-title">
            SERVICE DETAIL REPORT
        </div>
        <div class="period">
            <span class="from">20-09-2020 &nbsp;</span>
            <span class="to">to &nbsp;</span>
            <span class="to_date">20-10-2020</span>
        </div>
        <hr class="hr">
        <table class="all-table table-striped">

            <tr class="table-head">
                <th>ID</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Return Date</th>
                <th>Service Description</th>
                <th>Cost</th>
                <th>User</th>
            </tr>
            <tbody>
                @foreach($service as $s)
                <tr>
                    <td>{{ $s->id  }}</td>
                    <td>{{ $s->firstname .' '. $s->lastname}}</td>
                    <td>{{ $s->created_at}}</td>
                    <td >{{ $s->return_date }}</td>
                    <td>{{ $s->service_description }}</td>
                    <td>{{ $s->cost }}</td>
                    <td>{{ $s->username }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>