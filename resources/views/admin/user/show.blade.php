@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{ $user->name }} Profile</h4>
        </div>

        <div class="col-sm-4 text-right m-b-30">
            <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Edit Profile</a>
        </div>
    </div>
    <div class="card-box">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#"><img class="avatar" src="{{ asset('user_images/'.$user->id.'.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 m-b-0">{{ $user->name }}</h3>
                                    <small class="text-muted">{{ $user->relDesignation->name }}</small>
                                    <div class="staff-id">Employee ID : {{ $user->employee_id }}</div>
                                    <div class="staff-id">Department : {{ $user->relDepartment->name }}</div>

                                    <div class="staff-msg"><button class="btn btn-custom">{{ $user->type }}</button></div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Phone:</span>
                                        <span class="text"><a href="#">{{ $user->contact_number }}</a></span>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text"><a href="#">{{ $user->email }}</a></span>
                                    </li>
                                    <li>
                                        <span class="title">Birthday:</span>
                                        <span class="text">{{ date('d M Y',strtotime($user->dob)) }}</span>
                                    </li>
                                    <li>
                                        <span class="title">Address:</span>
                                        <span class="text">{{ $user->address }}</span>
                                    </li>
                                    <li>
                                        <span class="title">Status:</span>
                                        <span class="text">{{ $user->status }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card-box m-b-0">
                <h3 class="card-title">Payroll
                    <a href="{{ route('payroll.manage',$user->id) }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Edit Payroll</a>
                </h3>
                <div class="skills">
                    <span>Basic - {{ $user->relPayroll->basic }} </span>
                    <span>House Rent - {{ $user->relPayroll->house_rent }}</span>
                    <span>Medical - {{ $user->relPayroll->medical }}</span>
                    <span>Travel Allowance - {{ $user->relPayroll->travel_allowance }}</span>
                    <span>Daily Allowance - {{ $user->relPayroll->daily_allowance }}</span>
                    <span>Provident Fund - {{ $user->relPayroll->provident_fund }}</span>
                    <span>Gross - <b>{{ $user->relPayroll->gross }}</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card-box">
                <h3 class="card-title">Education Informations</h3>
                <div class="experience-box">
                    <ul class="experience-list">
                        <li>
                            <div class="experience-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="experience-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">International College of Arts and Science (UG)</a>
                                    <div>Bsc Computer Science</div>
                                    <span class="time">2000 - 2003</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="experience-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="experience-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">International College of Arts and Science (PG)</a>
                                    <div>Msc Computer Science</div>
                                    <span class="time">2000 - 2003</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-box m-b-0">
                <h3 class="card-title">Experience</h3>
                <div class="experience-box">
                    <ul class="experience-list">
                        <li>
                            <div class="experience-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="experience-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">Web Designer at Zen Corporation</a>
                                    <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="experience-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="experience-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">Web Designer at Ron-tech</a>
                                    <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="experience-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="experience-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">Web Designer at Dalt Technology</a>
                                    <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection