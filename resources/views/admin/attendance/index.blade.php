@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{ $title }}</h4>
        </div>
        <div class="col-sm-4 text-right m-b-30">
            <a href="{{ route('attendance.upload') }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Upload Bulk Attendance</a>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px">
        {{ Form::model(request(),['method'=>'get']) }}
        <div class="col-sm-6">
            {{ Form::date('date',null,['class'=>'form-control','placeholder'=>'Date']) }}
        </div>
        <div class="col-sm-4">
            {{ Form::select('status',['Present'=>'Present','Absent'=>'Absent'],null,['class'=>'form-control','placeholder'=>'Please select status']) }}
        </div>
        <div class="col-sm-2">
            {{ Form::submit('Search',['class'=>'btn btn-warning']) }}
        </div>
        {{ Form::close() }}
    </div>
    <div class="row">
        <div class="col-md-12">
            <div>
                <table class="table table-striped custom-table m-b-0 datatable">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($attendances as $attendance)

                        <tr>
                            <td>{{ $attendance->date }}</td>
                            <td>{{ $attendance->relUser->name }}</td>
                            <td>
                                {{ $attendance->in_time.'-'.$attendance->out_time }}
                            </td>
                            <td>{{ $attendance->status }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $attendances->links() }}
            </div>
        </div>
    </div>
@endsection