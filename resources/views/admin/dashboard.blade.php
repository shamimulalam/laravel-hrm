@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>112</h3>
                    <span>Projects</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>$44</h3>
                    <span>Clients</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
                <div class="dash-widget-info">
                    <h3>37</h3>
                    <span>Tasks</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>218</h3>
                    <span>Employees</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="card-box">
                        <div id="area-chart" ></div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="card-box">
                        <div id="line-chart"></div>
                    </div>
                </div>
                <div  class="col-md-4 col-sm-12 text-center">
                    <div class="card-box">
                        <div id="bar-chart" ></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                    <div class="card-box">
                        <div id="stacked" ></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                    <div class="card-box">
                        <div id="pie-chart" ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-table">
                <div class="panel-heading">
                    <h3 class="panel-title">Invoices</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table m-b-0">
                            <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Client</th>
                                <th>Due Date</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="invoice-view.html">#INV-0001</a></td>
                                <td>
                                    <h2><a href="#">Hazel Nutt</a></h2>
                                </td>
                                <td>8 Aug 2017</td>
                                <td>$380</td>
                                <td>
                                    <span class="label label-warning-border">Partially Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="invoice-view.html">#INV-0002</a></td>
                                <td>
                                    <h2><a href="#">Paige Turner</a></h2>
                                </td>
                                <td>17 Sep 2017</td>
                                <td>$500</td>
                                <td>
                                    <span class="label label-success-border">Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="invoice-view.html">#INV-0003</a></td>
                                <td>
                                    <h2><a href="#">Ben Dover</a></h2>
                                </td>
                                <td>30 Nov 2017</td>
                                <td>$60</td>
                                <td>
                                    <span class="label label-danger-border">Unpaid</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="invoices.html" class="text-primary">View all invoices</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-table">
                <div class="panel-heading">
                    <h3 class="panel-title">Payments</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table m-b-0">
                            <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Client</th>
                                <th>Payment Type</th>
                                <th>Paid Date</th>
                                <th>Paid Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="invoice-view.html">#INV-0004</a></td>
                                <td>
                                    <h2><a href="#">Barry Cuda</a></h2>
                                </td>
                                <td>Paypal</td>
                                <td>11 Jun 2017</td>
                                <td>$380</td>
                            </tr>
                            <tr>
                                <td><a href="invoice-view.html">#INV-0005</a></td>
                                <td>
                                    <h2><a href="#">Tressa Wexler</a></h2>
                                </td>
                                <td>Paypal</td>
                                <td>21 Jul 2017</td>
                                <td>$500</td>
                            </tr>
                            <tr>
                                <td><a href="invoice-view.html">#INV-0006</a></td>
                                <td>
                                    <h2><a href="#">Ruby Bartlett</a></h2>
                                </td>
                                <td>Paypal</td>
                                <td>28 Aug 2017</td>
                                <td>$60</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="payments.html" class="text-primary">View all payments</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-table">
                <div class="panel-heading">
                    <h3 class="panel-title">Clients</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table m-b-0">
                            <thead>
                            <tr>
                                <th style="min-width:200px;">Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="min-width:200px;">
                                    <a href="#" class="avatar">B</a>
                                    <h2><a href="client-profile.html">Barry Cuda <span>CEO</span></a></h2>
                                </td>
                                <td>barrycuda@example.com</td>
                                <td>
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                        </ul>
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
                                    <a class="avatar">T</a>
                                    <h2><a href="client-profile.html">Tressa Wexler <span>Manager</span></a></h2>
                                </td>
                                <td>tressawexler@example.com</td>
                                <td>
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                        </ul>
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
                                    <a href="client-profile.html" class="avatar">R</a>
                                    <h2><a href="client-profile.html">Ruby Bartlett <span>CEO</span></a></h2>
                                </td>
                                <td>rubybartlett@example.com</td>
                                <td>
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                        </ul>
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
                                    <a href="client-profile.html" class="avatar">M</a>
                                    <h2><a href="client-profile.html"> Misty Tison <span>CEO</span></a></h2>
                                </td>
                                <td>mistytison@example.com</td>
                                <td>
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                        </ul>
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
                                    <a href="client-profile.html" class="avatar">D</a>
                                    <h2><a href="client-profile.html"> Daniel Deacon <span>CEO</span></a></h2>
                                </td>
                                <td>danieldeacon@example.com</td>
                                <td>
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                        </ul>
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
                    <a href="clients.html" class="text-primary">View all clients</a>
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