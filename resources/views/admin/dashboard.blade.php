@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ $total_employee }}</h3>
                    <span>Employees</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-diamond" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ $total_transaction }}</h3>
                    <span>Transactions</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ $total_income }}</h3>
                    <span>Income</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ $total_expense }}</h3>
                    <span>Expense</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-table">
                <div class="panel-heading">
                    <h3 class="panel-title">Incomes</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table m-b-0">
                            <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Head</th>
                                <th>Client Name</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($last_3_income as $transaction)
                                <tr>
                                    <td>{{ $transaction->transaction_id }}</td>
                                    <td>
                                        <h2>{{ $transaction->relTransactionHead->name }}</h2>
                                    </td>
                                    <td>
                                        @if(is_numeric($transaction->client))
                                            {{ $transaction->relUser->name }}
                                        @else
                                            {{ $transaction->client }}
                                        @endif
                                    </td>
                                    <td>{{ date('Y/m/d',strtotime($transaction->date)) }}</td>
                                    <td class="pull-right">
                                        {{ $transaction->amount }} /-
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="{{ route('transaction.index','Income') }}" class="text-primary">View all incomes</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-table">
                <div class="panel-heading">
                    <h3 class="panel-title">Expense</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table m-b-0">
                            <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Head</th>
                                <th>Client Name</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($last_3_expense as $transaction)
                                <tr>
                                    <td>{{ $transaction->transaction_id }}</td>
                                    <td>
                                        <h2>{{ $transaction->relTransactionHead->name }}</h2>
                                    </td>
                                    <td>
                                        @if(is_numeric($transaction->client))
                                            {{ $transaction->relUser->name }}
                                        @else
                                            {{ $transaction->client }}
                                        @endif
                                    </td>
                                    <td>{{ date('Y/m/d',strtotime($transaction->date)) }}</td>
                                    <td class="pull-right">
                                        {{ $transaction->amount }} /-
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="{{ route('transaction.index','Expense') }}" class="text-primary">View all expenses</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-table">
                <div class="panel-heading">
                    <h3 class="panel-title">Employees</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table m-b-0">
                            <thead>
                            <tr>
                                <th style="min-width:200px;">Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)

                                <tr>
                                    <td style="min-width:200px;">
                                        <h2><a href="{{ route("user.show",$user->id) }}">{{ $user->name }} <span>{{ $user->relDesignation->name }}</span></a></h2>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        {{ $user->status }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="{{ route("user.index") }}" class="text-primary">View all employees</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-table">
                <div class="panel-heading">
                    <h3 class="panel-title">Recent Projects</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table m-b-0">
                            <thead>
                            <tr>
                                <th class="col-md-3">Project Name </th>
                                <th class="col-md-3">Progress</th>
                                <th class="text-right col-md-1">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <h2><a href="project-view.html">Food and Drinks</a></h2>
                                    <small class="block text-ellipsis">
                                        <span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
                                        <span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
                                    </small>
                                </td>
                                <td>
                                    <div class="progress progress-xs progress-striped">
                                        <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="65%" style="width: 65%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2><a href="project-view.html">School Guru</a></h2>
                                    <small class="block text-ellipsis">
                                        <span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
                                        <span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
                                    </small>
                                </td>
                                <td>
                                    <div class="progress progress-xs progress-striped">
                                        <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="15%" style="width: 15%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2><a href="project-view.html">Penabook</a></h2>
                                    <small class="block text-ellipsis">
                                        <span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
                                        <span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
                                    </small>
                                </td>
                                <td>
                                    <div class="progress progress-xs progress-striped">
                                        <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="49%" style="width: 49%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2><a href="project-view.html">Harvey Clinic</a></h2>
                                    <small class="block text-ellipsis">
                                        <span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
                                        <span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
                                    </small>
                                </td>
                                <td>
                                    <div class="progress progress-xs progress-striped">
                                        <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="88%" style="width: 88%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2><a href="project-view.html">The Gigs</a></h2>
                                    <small class="block text-ellipsis">
                                        <span class="text-xs">7</span> <span class="text-muted">open tasks, </span>
                                        <span class="text-xs">14</span> <span class="text-muted">tasks completed</span>
                                    </small>
                                </td>
                                <td>
                                    <div class="progress progress-xs progress-striped">
                                        <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="100%" style="width: 100%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="projects.html" class="text-primary">View all projects</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var data = [
                { y: '2014', a: 50, b: 90},
                { y: '2015', a: 65,  b: 75},
                { y: '2016', a: 50,  b: 50},
                { y: '2017', a: 75,  b: 60},
                { y: '2018', a: 80,  b: 65},
                { y: '2019', a: 90,  b: 70},
                { y: '2020', a: 100, b: 75},
                { y: '2021', a: 115, b: 75},
                { y: '2022', a: 120, b: 85},
                { y: '2023', a: 145, b: 85},
                { y: '2024', a: 160, b: 95}
            ],
            config = {
                data: data,
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Total Income', 'Total Outcome'],
                fillOpacity: 0.6,
                hideHover: 'auto',
                behaveLikeLine: true,
                resize: true,
                pointFillColors:['#ffffff'],
                pointStrokeColors: ['black'],
                gridLineColor: '#eef0f2',
                lineColors:['gray','orange']
            };
        config.element = 'area-chart';
        Morris.Area(config);
        config.element = 'line-chart';
        Morris.Line(config);
        config.element = 'bar-chart';
        Morris.Bar(config);
        config.element = 'stacked';
        config.stacked = true;
        Morris.Bar(config);
        Morris.Donut({
            element: 'pie-chart',
            data: [
                {label: "Employees", value: 30},
                {label: "Clients", value: 15},
                {label: "Projects", value: 45},
                {label: "Tasks", value: 10}
            ]
        });
    </script>
@endsection