@extends('layouts.master')
@section('navbar')
@section('sidebar')
@section('content')
<div class="page-profile">




    <!-- Page -->


    <div class="row">
        <div class="col-md-3">
            <!-- Page Widget -->
            <div class="widget widget-shadow text-center">
                <div class="widget-header">
                    <div class="widget-header-content">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                            <img src="{{asset('apps/upload')}}/{{$result['em_file']}}">
                        </a>
                        <h4 class="profile-user">{{$result['em_name']}}</h4>
                        <p class="profile-job">{{$result['em_role']}}</p>
                        <p>{{$result['em_intro']}}</p>
                        <div class="profile-social">
                            <a class="icon bd-twitter" href="javascript:void(0)"></a>
                            <a class="icon bd-facebook" href="javascript:void(0)"></a>
                            <a class="icon bd-dribbble" href="javascript:void(0)"></a>
                            <a class="icon bd-github" href="javascript:void(0)"></a>
                        </div>
                        <button type="button" class="btn btn-primary">Follow</button>
                    </div>
                </div>
                <div class="widget-footer">
                    <div class="row no-space">
                        <div class="col-xs-4">
                            <strong class="profile-stat-count">260</strong>
                            <span>Project</span>
                        </div>
                        <div class="col-xs-4">
                            <strong class="profile-stat-count">180</strong>
                            <span>Incompleted</span>
                        </div>
                        <div class="col-xs-4">
                            <strong class="profile-stat-count">2000</strong>
                            <span>Completed</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Widget -->
        </div>
        <div class="col-md-9">
            <!-- Panel -->
            <div class="panel">
                <div class="panel-body nav-tabs-animate nav-tabs-horizontal">
                    <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                        <li class="active" role="presentation"><a data-toggle="tab" href="#activities" aria-controls="activities"
                                                                  role="tab">Activities <span class="badge badge-danger">5</span></a></li>
                        <li role="presentation"><a data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Profile</a></li>
                        <li role="presentation"><a data-toggle="tab" href="#messages" aria-controls="messages"
                                                   role="tab">Messages</a></li>
                        <li class="dropdown" role="presentation">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="caret"></span>Menu </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="active" role="presentation"><a data-toggle="tab" href="#activities" aria-controls="activities"
                                                                          role="tab">Activities <span class="badge badge-danger">5</span></a></li>
                                <li role="presentation"><a data-toggle="tab" href="#profile" aria-controls="profile"
                                                           role="tab">Profile</a></li>
                                <li role="presentation"><a data-toggle="tab" href="#messages" aria-controls="messages"
                                                           role="tab">Messages</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <!--เนื้อหา Activity-->
                    <div class="tab-content">
                        <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a class="avatar" href="javascript:void(0)">
                                               ใส่รูป
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">ชื่อ
                                                <span>posted an updated</span>
                                            </h4>
                                            <small>active 14 minutes ago</small>
                                            <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a class="btn btn-block btn-default profile-readMore" href="javascript:void(0)"
                               role="button">Show more</a>
                        </div>


                        <!--ส่วน Profile-->       
                        <div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
                            <ul class="list-group">
                                <br>

                                <div class="contianer">
                                    <b>Employee Data</b>
                                    <div class="row">
                                        <div class="col-sm-2">Name:</div>
                                        <div class="col-sm-4">{{$result['em_name']}}</div>
                                        <div class="col-sm-2">Work Status:</div>
                                        <div class="col-sm-4">{{$result['em_status']}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">User Name:</div>
                                        <div class="col-sm-4">{{$result['em_number']}}</div>
                                        <div class="col-sm-2">Audit Number:</div>
                                        <div class="col-sm-4">{{$result['em_audit_number']}}</div>
                                    </div>
                                    <br>
                                    <b>Personal Data</b>
                                    <div class="row">
                                        <div class="col-sm-2">Nation ID:</div>
                                        <div class="col-sm-4">{{$result['em_nationn_id']}}</div>
                                        <div class="col-sm-2">Marie Status:</div>
                                        <div class="col-sm-4">{{$result['em_marie_status']}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Address 1:</div>
                                        <div class="col-sm-4">{{$result['em_addr']}}</div>
                                        <div class="col-sm-2">Address 2:</div>
                                        <div class="col-sm-4">{{$result['em_addr_curent']}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Tel:</div>
                                        <div class="col-sm-4">{{$result['em_tel']}}</div>
                                        <div class="col-sm-2">E-mail:</div>
                                        <div class="col-sm-4">{{$result['em_mail']}}</div>
                                    </div>
                                     <div class="row">
                                        <div class="col-sm-2">Co Worker:</div>
                                        <div class="col-sm-4">{{$result['em_friend_name']}}</div>
                                        <div class="col-sm-2">Co Worker Tel:</div>
                                        <div class="col-sm-4">{{$result['em_friend_tel']}}</div>
                                    </div>
                                    <br>
                                    <b>Education Data</b>
                                     <div class="row">
                                        <div class="col-sm-2">Level:</div>
                                        <div class="col-sm-4">{{$result['em_level']}}</div>
                                        <div class="col-sm-2">Major:</div>
                                        <div class="col-sm-4">{{$result['em_major']}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Gpa:</div>
                                        <div class="col-sm-4">{{$result['em_gpa']}}</div>
                                        <div class="col-sm-2">Insutution:</div>
                                        <div class="col-sm-4">{{$result['em_insutution']}}</div>
                                    </div>
                                    <br>
                                    <b>Work Data</b>
                                    <div class="row">
                                        <div class="col-sm-2">Register Date:</div>
                                        <div class="col-sm-4">{{$result['em_start_work']}}</div>
                                        <div class="col-sm-2">Salary Rate:</div>
                                        <div class="col-sm-4">{{$result['em_salary_rate']}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Salary per Date:</div>
                                        <div class="col-sm-4">{{$result['em_salary_day']}}</div>
                                        <div class="col-sm-2">Work per Date:</div>
                                        <div class="col-sm-4">{{$result['em_day_work']}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Benefit:</div>
                                        <div class="col-sm-4">{{$result['em_benefit']}}</div>
                                        <div class="col-sm-2">Note:</div>
                                        <div class="col-sm-4">{{$result['em_note']}}</div>
                                    </div>
                                    
                                </div> 




                            </ul>
                        </div>
                        <!--/ส่วน Profile--> 
                        
                        <!--ส่วนข้อความ-->
                        <div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
                            <ul class="list-group">
                                
                                <!--เนื้อหาเหมือน Activity แต่เอามาจากกล่องข้อความ-->
                             
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>
    </div>

</div>
@endsection
<!-- End Page -->
<!-- Footer -->

