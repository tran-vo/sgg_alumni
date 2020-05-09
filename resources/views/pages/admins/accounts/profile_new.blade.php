@extends('layouts.admin')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-md-12 col-xs-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p>{{$message}}</p>
                        <p class="mb-0"></p>
                    </div>
                @endif
            </div>
            
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <div class="user-bg"> <img width="100%" alt="user" src="{{asset('/images/bodybg.jpg')}}">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)">
                                    @if (Auth::user()->gender == "Nam" || Auth::user()->gender == NULL || Auth::user()->gender == "nam")
                                        <img src="{{asset('/images/myfiles_cit/avatar_man.jpg')}}" class="thumb-lg img-circle" alt="img">    
                                    @endif
                                    @if (Auth::user()->gender == "N" || Auth::user()->gender == "Nữ" || Auth::user()->gender == "Nu" || Auth::user()->gender == "nữ")
                                        <img src="{{asset('/images/myfiles_cit/avatar_woman.jpg')}}" class="thumb-lg img-circle" alt="img">      
                                    @endif
                                </a>
                                <h4 class="text-white">{{Auth::user()->name}}</h4>
                                <h5 class="text-white">{{Auth::user()->email}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-purple"><i class="fa fa-group"></i></p>
                            
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-blue"><i class="fa fa-desktop"></i></p>
                            
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-danger"><i class="fa fa-graduation-cap"></i></p>
                        </div>
                        @if (!isset(Auth::user()->other_email))
                            @if (Auth::user()->status_id == 2 || Auth::user()->status_id == 3)
                                <div class="ribbon-wrapper">
                                    <div class="ribbon ribbon-danger"><a href="" onclick="showOther()" style="color:white">Thêm Email liên hệ</a></div>
                                    <p><a href="" onclick="showOther()" style="color:red; text-decoration:underline">Thêm </a>email liên hệ, vì email trường sẽ bị thu hồi sau 2 năm.</p>
                                </div>
                                <div class="form-group" id="showOtherEmail" style="display:none;">
                                    <form action="{{route('accounts/add_other_email',Auth::user()->user_id)}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="other_email">Other Email</label>
                                            <input type="text" name="other_email" id="other_email" class="form-control" placeholder="" aria-describedby="helpId">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        @else
                            
                        @endif
                        
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <ul class="nav customtab nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item"><a href="#profile" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-home"></i></span><span class="hidden-xs"> Profile</span></a></li>
                        <li role="presentation" class="nav-item"><a href="#settings" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span></a></li>
                        @if (!Auth::user()->hasRole('Student'))
                            <li class="dropdown nav-item" role="presentation">
                                <a aria-controls="myTabDrop1-contents" class="nav-link dropdown-toggle" data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#" aria-expanded="false">Công việc</a>
                                <div class="dropdown-menu" id="myTabDrop1-contents" aria-labelledby="myTabDrop1">
                                    <a href="#job" class="nav-link" aria-controls="job" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Công việc</span></a>
                                    <a href="#jobs-add" class="nav-link" aria-controls="job" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Thêm ông việc</span></a>
                                    <a href="#jobs-status" class="nav-link" aria-controls="job" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Trạng thái công việc</span></a>
                                    <a href="#jobs-history" class="nav-link" aria-controls="job" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Lịch sử công việc</span></a>
                                </div>
                            </li>
                        @endif
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                            <h1 style="color:#03a9f3;font-family: sans-serif;">Welcome to CIT - ALUMNI</h1>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>MSSV</strong>
                                        <br>
                                        <p class="text-muted">{{Auth::user()->code}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Họ và tên</strong>
                                        <br>
                                        <p class="text-muted">{{Auth::user()->name}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Khóa</strong>
                                        <br>
                                        <p class="text-muted">{{Auth::user()->course}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Ngày sinh</strong>
                                        <br>
                                        <p class="text-muted">{{Auth::user()->birth}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Tôn giáo</strong>
                                        <br>
                                        <p class="text-muted">{{Auth::user()->nation}}</p>
                                    </div>
                                    
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Số điện thoại</strong>
                                        <br>
                                        <p class="text-muted">{{Auth::user()->tel}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">{{Auth::user()->email}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Địa chỉ</strong>
                                        <br>
                                        <p class="text-muted">{{Auth::user()->address}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    @foreach ($accounts as $row)
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Lớp</strong>
                                            <br>
                                            <p class="text-muted">
                                                @foreach ($row->classes as $item)
                                                    {{$item->class_code}} - {{$item->class_name}}<br>
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Vai trò</strong>
                                            <br>
                                            <p class="text-muted">
                                                @foreach ($roles as $item)
                                                    {{$item->role_name}} <br>
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Trạng thái</strong>
                                            <br>
                                            <p class="text-muted">
                                                @foreach ($row->statuses as $item)
                                                    {{$item->status_name}}
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Lý do</strong>
                                            <br>
                                            <p class="text-muted">
                                                @foreach ($row->statuses as $item)
                                                    {{$item->status_reason}}
                                                @endforeach
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                        </div>
                        {{-- end div home --}}
                        <div class="tab-pane" id="settings">
                            @foreach ($accounts as $row)
                            {{-- TODO: Kiểm tra xem người dùng là Nghỉ học + Ra trường rồi mới cho cập nhật lại thông tin cá nhân --}}
                            @if (Auth::user()->status_id == 2 || Auth::user()->status_id == 3)
                                <form class="form-horizontal form-material" action="{{route('accounts/update_profile',Auth::user()->user_id)}}" method="POST">
                                    @csrf
                                        <div class="form-group">
                                            <label class="col-md-12">Họ và tên</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" value="{{Auth::user()->email}}" name="email" class="form-control form-control-line" name="example-email" id="example-email">
                                            </div>
                                        </div>
                                        @if (isset(Auth::user()->other_email))
                                            <div class="form-group">
                                                <label class="col-md-12">Email liên hệ khác</label>
                                                <div class="col-md-12">
                                                    <input type="email" value="{{Auth::user()->other_email}}" name="other_email" class="form-control form-control-line">
                                                </div>
                                            </div>
                                        @else

                                        @endif
                                        <div class="form-group">
                                            <label class="col-md-12">Số điện thoại</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{Auth::user()->tel}}" name="tel" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Ngày sinh</label>
                                            <div class="col-md-12">
                                                <input type="date" value="{{Auth::user()->birth}}" name="birth" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Địa chỉ</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{Auth::user()->address}}" name="address" class="form-control form-control-line">
                                            </div>
                                        </div>       
                                        <div class="form-group">
                                            <label class="col-sm-12">Chọn Quận/Huyện</label>
                                            <div class="col-sm-12">
                                                <select class="form-control form-control-line" id="district_id" name="district_id">
                                                    @foreach ($district as $item)
                                                        <option value="{{$item->district_id}}" @if($item->district_id == Auth::user()->district_id) selected @endif>{{$item->district_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                            </div>
                                        </div>
                                </form>
                            @else
                                <form class="form">
                                    <div class="form-group row">
                                        <label class="col-md-12">Họ và tên</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{Auth::user()->email}}" name="email" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Số điện thoại</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{Auth::user()->tel}}" name="tel" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Ngày sinh</label>
                                        <div class="col-md-12">
                                            <input type="date" value="{{Auth::user()->birth}}" name="birth" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Địa chỉ</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{Auth::user()->address}}" name="address" class="form-control form-control-line">
                                        </div>
                                    </div>
                                </form>
                            @endif
                                
                            @endforeach
                        </div>
                        @if (!Auth::user()->hasRole('Student'))
                            {{-- end div settings --}}
                            <div class="tab-pane" id="job">
                                <div class="form-group">
                                    @if (isset($work_current))
                                {{-- <p>{{dd($work_current)}}</p> --}}
                                        <h4 class="text-danger">
                                        Công việc của bạn là
                                        @if (isset($work_current->work_specialize))
                                        {{$work_current->work_specialize}}
                                        @else
                                            @if (isset($work_current->work_name))
                                                {{$work_current->work_name}}
                                            @else
                                                Chưa xét
                                            @endif
                                        @endif tại {{$work_current->company_name}} từ {{date('d-m-Y', strtotime($work_current->work_begin))}} 
                                        @if (isset($work_current->work_end))
                                        đến ngày
                                            {{date('d-m-Y', strtotime($work_current->work_end))}}
                                        @else
                                            
                                        @endif
                                        {{-- <a href="{{route('accounts/show_current_work_and_resign')}}">Chi tiết</a> --}}
                                        <a href="#jobs-status" class="nav-link" aria-controls="job" role="tab" data-toggle="tab" aria-expanded="false">
                                        Chi tiết</a>
                                        </h4>
                                    @else
                                        <h3>Chưa có công việc</h3>
                                    @endif
                                </div>

                                <div class="form-group">
                                @if (isset($works_lastest->work_status))
                                    
                                    @if ($works_lastest->work_status === "resigned")
                                        @if (isset($works_lastest))
                                            <form class="form">
                                                @if (isset($works_lastest))
                                                    @if (isset($works_lastest->work_specialize))
                                                        <div class="form-group row">
                                                            <label for="work_specialize" class="col-2 col-form-label">Chuyên môn công việc</label>
                                                            <div class="col-10">
                                                                <input class="form-control form-control-line" type="text" name="work_specialize" value="{{$works_lastest->work_specialize}}" readonly id="work_specialize">
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="form-group row">
                                                            <label for="work_name" class="col-2 col-form-label">Chuyên môn công việc</label>
                                                            <div class="col-10">
                                                                <input class="form-control form-control-line" type="text" name="work_name"  value="{{$works_lastest->work_name}}" readonly  id="work_name">
                                                            </div>
                                                        </div>
                                                    @endif
                                                    
                                                    <div class="form-group row">
                                                        <label for="work_begin" class="col-2 col-form-label">Ngày vào làm</label>
                                                        <div class="col-10">
                                                            <input type="date" value="{{$works_lastest->work_begin}}" readonly name="work_begin" class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="company_name" class="col-2 col-form-label">Tên công ty</label>
                                                        <div class="col-10">
                                                            <input class="form-control form-control-line" type="text" name="company_name" value="{{$works_lastest->company_name}}" readonly id="company_name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="company_address" class="col-2 col-form-label">Địa chỉ công ty</label>
                                                        <div class="col-10">
                                                            <input class="form-control form-control-line" type="text" name="company_address" value="{{$works_lastest->company_address}}" readonly id="company_address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="company_tel" class="col-2 col-form-label">Số điện thoại công ty</label>
                                                        <div class="col-10">
                                                            <input class="form-control form-control-line" type="text" name="company_tel" value="{{$works_lastest->company_tel}}" readonly id="company_tel">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="company_email" class="col-2 col-form-label">Email công ty</label>
                                                        <div class="col-10">
                                                            <input class="form-control form-control-line" type="text" name="company_email" value="{{$works_lastest->company_email}}" readonly  id="company_email">
                                                        </div>
                                                    </div>
                                                    <a href="#jobs-status" class="nav-link" aria-controls="jobs-status" role="tab" data-toggle="tab" aria-expanded="true"><i>Trạng thái công việc</i></a>
                                                @else
                                                    <div class="alert alert-danger" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                                        <h4 class="alert-heading">NOTE</h4>
                                                        <p>Bạn chưa nhập công việc</p>
                                                        <p class="mb-0"><a href="{{route('accounts/jobs')}}">Nhập công việc</a></p>
                                                    </div>
                                                @endif
                                            </form>
                                        @endif  
                                    @else
                                        @if (isset($works_lastest))
                                            <form method="POST" action="{{url('/accounts/update_job',$works_lastest->work_id)}}">
                                                @csrf   
                                                    @if (isset($works_lastest))
                                                        @if (isset($works_lastest->work_specialize))
                                                            <div class="form-group row">
                                                                <label for="work_specialize" class="col-2 col-form-label">Chuyên môn công việc</label>
                                                                <div class="col-10">
                                                                    <input class="form-control form-control-line" type="text" name="work_specialize" value="{{$works_lastest->work_specialize}}" id="work_specialize">
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="form-group row">
                                                                <label for="work_name" class="col-2 col-form-label">Chuyên môn công việc</label>
                                                                <div class="col-10">
                                                                    <input class="form-control form-control-line" type="text" name="work_name" value="{{$works_lastest->work_name}}" id="work_name">
                                                                </div>
                                                            </div>
                                                        @endif
                                                        
                                                        <div class="form-group row">
                                                            <label for="work_begin" class="col-2 col-form-label">Ngày vào làm</label>
                                                            <div class="col-10">
                                                                <input type="date" value="{{$works_lastest->work_begin}}" name="work_begin" class="form-control form-control-line">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_name" class="col-2 col-form-label">Tên công ty</label>
                                                            <div class="col-10">
                                                                <input class="form-control form-control-line" type="text" name="company_name" value="{{$works_lastest->company_name}}" id="company_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_address" class="col-2 col-form-label">Địa chỉ công ty</label>
                                                            <div class="col-10">
                                                                <input class="form-control form-control-line" type="text" name="company_address" value="{{$works_lastest->company_address}}" id="company_address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_tel" class="col-2 col-form-label">Số điện thoại công ty</label>
                                                            <div class="col-10">
                                                                <input class="form-control form-control-line" type="text" name="company_tel" value="{{$works_lastest->company_tel}}" id="company_tel">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="company_email" class="col-2 col-form-label">Email công ty</label>
                                                            <div class="col-10">
                                                                <input class="form-control form-control-line" type="text" name="company_email" value="{{$works_lastest->company_email}}" id="company_email">
                                                            </div>
                                                        </div>
                                                        <a href="#jobs-status" class="nav-link" aria-controls="jobs-status" role="tab" data-toggle="tab" aria-expanded="true"><i>Trạng thái công việc</i></a>
                                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                                        <button type="button" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                                    @else
                                                        <div class="alert alert-danger" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                            <h4 class="alert-heading">NOTE</h4>
                                                            <p>Bạn chưa nhập công việc</p>
                                                            <p class="mb-0"><a href="{{route('accounts/jobs')}}">Nhập công việc</a></p>
                                                        </div>
                                                    @endif
                                            </form>
                                        @endif
                                    
                                    @endif
                                @endif
                                </div>
                            </div>
                            {{-- end div id jobs --}}

                            {{-- START JOBS-STATUS --}}
                            <div class="tab-pane" id="jobs-status">
                                <div class="form-group">
                                    <div class="white-box">
                                        <div class="table-responsive">
                                            <table class="table full-color-table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Chuyên môn</th>
                                                        <th>Ngày vào</th>
                                                        <th>Ngày nghỉ việc</th>
                                                        <th>Số ngày làm</th>
                                                        <th>Tên công ty</th>
                                                        <th>Địa chỉ công ty</th>
                                                        <th>Số điện thoại công ty</th>
                                                        <th>Email công ty</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @if (isset($works_lastest))
                                                                <td>{{$works_lastest->work_id}}</td>
                                                                @if (isset($works_lastest->work_specialize))
                                                                    <td>{{$works_lastest->work_specialize}}</td>
                                                                @else
                                                                    <td>{{$works_lastest->work_name}}</td>
                                                                @endif
                                                                @if (isset($works_lastest->work_begin))
                                                                    <td>{{date('d-m-Y', strtotime($works_lastest->work_begin))}}</td>
                                                                @else
                                                                    <td><b>Bạn chưa bất đầu làm việc</b></td>
                                                                @endif
                                                                @if (isset($works_lastest->work_end))
                                                                    <td>{{date('d-m-Y', strtotime($works_lastest->work_end))}}</td>
                                                                @else
                                                                    <td><b>Bạn chưa nghỉ việc</b></td>
                                                                @endif
                                                                @if (isset($result))
                                                                    <td>Số ngày làm việc: {{$result}}</td>
                                                                @endif
                                                                <td>{{$works_lastest->company_name}}</td>
                                                                <td>{{$works_lastest->company_address}}</td>
                                                                <td>{{$works_lastest->company_tel}}</td>
                                                                <td>{{$works_lastest->company_email}}</td>
                                                                @if ($works_lastest->work_status == "working")
                                                                    <td>
                                                                        {{-- <button class="btn btn-primary btn-resign" data-workID="{{$works->work_id}}">Resign</button> --}}
                                                                        <button type="button" class="btn btn-danger btn-resign" data-workID="{{$works_lastest->work_id}}" data-toggle="modal" data-target="#myModal">Nghỉ việc</button>
                                                                    </td>
                                                                @else
                                                                    <td>
                                                                        <a href="#" class="btn btn-danger">Đã nghỉ việc</a>
                                                                    </td>
                                                                @endif
                                                            
                                                                
                                    
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="myModal" role="dialog">
                                                                <div class="modal-dialog">
                                                                
                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">Modal Header</h4>
                                                                        <h3 style="color:crimson; font-family:sans-serif" id="error_date"></h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label for="work_end">Chọn ngày nghỉ việc</label>
                                                                        <input type="date" name="work_end" id="work_end" class="form-control work_end" placeholder="" aria-describedby="helpId">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="hidden" name="ngaybd" id="ngaybd" value="{{$works_lastest->work_begin}}">
                                                                        <button type="submit" class="btn btn-success submit-resign">Submit</button>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                </div>
                                                            </tr>
                                                        @else
                                                            <div class="alert alert-danger" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                                <h4 class="alert-heading">NOTE</h4>
                                                                <p>Bạn chưa nhập công việc</p>
                                                                <p class="mb-0"><a href="{{route('accounts/jobs')}}">Nhập công việc</a></p>
                                                            </div>
                                                        @endif
                                                        
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                            {{-- end div JOBS-STATUS --}}

                            {{-- START DIV JOBS-HISTORY --}}
                            <div class="tab-pane" id="jobs-history">
                                <div class="form-group">
                                    @if($message = Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p>{{$message}}</p>
                                        <p class="mb-0"></p>
                                    </div>
                                    @endif
                                    <h2>Lịch sử công việc</h2>
                                    <br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Chuyên môn công việc</th>
                                                <th>Mức lương</th>
                                                <th>Tên công ty</th>
                                                <th>Địa chỉ công ty</th>
                                                <th>Ngày bất đầu làm việc</th>
                                                <th>Ngày nghỉ việc</th>
                                                <th>Trạng thái công việc</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($work_your_self as $item)
                                            @if (Auth::user()->user_id == $item->user_id)
                                                <tr>
                                                    <td>{{$item->work_id}}</td>
                                                    @if (isset($item->work_specialize))
                                                        <td>{{$item->work_specialize}}</td>
                                                    @else
                                                        <td>{{$item->work_name}}</td>
                                                    @endif
                                                    <td>{{$item->work_salary}}</td>
                                                    <td>{{$item->company_name}}</td>
                                                    <td>{{$item->company_address}}</td>
                                                    <td>{{date('d-m-Y', strtotime($item->work_begin))}}</td>
                                                    @if (isset($item->work_end))
                                                        <td>{{date('d-m-Y', strtotime($item->work_end))}}</td>
                                                    @else
                                                        <td>Bạn chưa nghỉ việc</td>
                                                    @endif
                                                    @if ($item->work_status === 'resigned')
                                                        <td><button class="btn btn-danger">Đã nghỉ việc</button></td>
                                                    @else
                                                        <td><button class="btn btn-success">Đang làm việc</button> </td>
                                                    @endif
                                                </tr>
                                            @endif
                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                            
                                </div>
                            </div>
                            {{-- end div jobs-history --}}

                            {{-- start jobs-add --}}
                            <div class="tab-pane" id="jobs-add">
                                <div class="form-group">

                                    {{-- TODO: BƯỚC 1: ĐẦU TIÊN KIỂM TRA TRẠNG THÁI CỦA NGƯỜI DÙNG HIỆN TẠI LÀ ĐI HỌC HAY ĐI LÀM HAY NGHỈ HỌC --}}
                                    @foreach ($accounts as $item)
                                        @if ($item->user_id === Auth::user()->user_id)
                                            {{-- TODO: BƯỚC 1: ĐẦU TIÊN KIỂM TRA TRẠNG THÁI CỦA NGƯỜI DÙNG HIỆN TẠI LÀ ĐI HỌC HAY ĐI LÀM HAY NGHỈ HỌC --}}
                                                @if ($item->status_id === 3 || $item->status_id === 2)


                                                {{-- TODO: BƯỚC 2: KIỂM TRA XEM TÌNH TRẠNG CÔNG VIỆC HIỆN TẠI ĐỂ CÓ ĐƯỢC PHÉP THÊM CÔNG VIỆC HAY KO? --}}
                                                    {{-- TODO: Được thêm công việc --}}
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading"> Được thêm công việc
                                                            <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                                                        </div>
                                                        <div class="panel-wrapper collapse in" aria-expanded="true">
                                                            <div class="panel-body">

                                                                {{-- TODO: Form thêm công việc --}}
                                                                @foreach ($accounts as $item)
                                                                    @if ($item->user_id === Auth::user()->user_id)
                                                                        @if ($item->status_id === 3 || $item->status_id === 2)
                                                                            <form  action="{{route('accounts/add_work_submit')}}" method="post">
                                                                                @csrf
                                                                                <h2>Thiết lập công việc</h2>
                                                                                <br>
                                                                                <div class="form-group">
                                                                                    <label for="company_id">Chọn Công ty</label>
                                                                                    <select class="form-control" name="company_id" id="company_id">
                                                                                        <option value="">Chọn công ty</option>
                                                                                        @foreach ($infor_company as $item)
                                                                                            <option value="{{$item->company_id}}">{{$item->company_name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    <br>
                                                                                    <a href="#" class="btn-accept" style="color:red">Khác</a>
                                                                                </div>
                                                                                <div class="show-company" style="display:none;">
                                                                                    <div class="form-group">
                                                                                        <label for="company_name" class="control-label">Tên công ty</label>
                                                                                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Tên công ty">
                                                                                    </div> 
                                                                                    <div class="form-group">
                                                                                        <label for="company_address" class="control-label">Địa chỉ công ty</label>
                                                                                        <input type="text" class="form-control" id="company_address" name="company_address" placeholder="Địa chỉ công ty">
                                                                                    </div> 
                                                                                    <div class="form-group">
                                                                                        <label for="company_tel" class="control-label">Số điện thoại công ty</label>
                                                                                        <input type="text" class="form-control" id="company_tel" name="company_tel" placeholder="Số điện thoại công ty">
                                                                                    </div> 
                                                                                    <div class="form-group">
                                                                                        <label for="company_email" class="control-label">Email công ty</label>
                                                                                        <input type="text" class="form-control" id="company_email" name="company_email" placeholder="Email công ty">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="company_website" class="control-label">Website công ty</label>
                                                                                        <input type="text" class="form-control" id="company_website" name="company_website" placeholder="Website công ty">
                                                                                    </div>
                                                                                </div> {{-- END SHOW-COMPANY --}}
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="work_specialize">Chuyên môn công việc</label>
                                                                                    <div class="radio radio-info">
                                                                                        <input type="radio" name="work_specialize" id="work_specialize" value="Lập trình viên" checked>
                                                                                        <label for="work_specialize">Lập trình viên</label>
                                                                                    </div>
                                                                                    <div class="radio radio-info">
                                                                                        <input type="radio" name="work_specialize" id="work_specialize" value="Chuyên viên tư vấn CNTT">
                                                                                        <label for="radio5">Chuyên viên tư vấn CNTT</label>
                                                                                    </div>
                                                                                    <div class="radio radio-info">
                                                                                        <input type="radio" name="work_specialize" id="work_specialize" value="Giảng viên/ giáo viên CNTT">
                                                                                        <label for="work_specialize">Giảng viên/ giáo viên CNTT</label>
                                                                                    </div>
                                                                                    <div class="radio radio-info">
                                                                                        <input type="radio" name="work_specialize" id="work_specialize" value="Quản lý">
                                                                                        <label for="work_specialize">Quản lý</label>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="#" class="work-other">Khác</a>
                                                                                <br>
                                                                                <div class="form-group show-work" style="display:none">
                                                                                    <label for="work_name" class="control-label">Tên công việc</label>
                                                                                    <input type="text" class="form-control" id="work_name" name="work_name" placeholder="Tên công việc">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="work_salary">Mức lương</label>
                                                                                    <div class="form-group">
                                                                                        <div class="radio radio-info">
                                                                                            <input type="radio" name="work_salary" id="work_salary" value="Dưới 5 triệu" checked>
                                                                                            <label for="work_salary">Dưới 5 triệu</label>
                                                                                        </div>
                                                                                        <div class="radio radio-info">
                                                                                            <input type="radio" name="work_salary" id="work_salary" value="Từ 5 - 10 triệu">
                                                                                            <label for="work_salary">Từ 5 - 10 triệu</label>
                                                                                        </div>
                                                                                        <div class="radio radio-info">
                                                                                            <input type="radio" name="work_salary" id="work_salary" value="Trên 10 triệu">
                                                                                            <label for="work_salary">Trên 10 triệu</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="work_begin" class="control-label">Ngày vào làm</label>
                                                                                    <input type="date" class="form-control" id="work_begin" name="work_begin" placeholder="Ngày vào làm">
                                                                                </div>
                                                                                {{-- <a href="#" class="nghi-lam">Nghỉ làm</a>
                                                                                <br>
                                                                                <div class="form-group show-nghi-lam" style="display:none;">
                                                                                    <label for="work_end" class="control-label">Ngày nghỉ làm</label>
                                                                                    <input type="date" class="form-control" id="work_end" name="work_end" placeholder="Ngày vào làm">
                                                                                </div> --}}
                                                                                <br>
                                                                                <div class="form-group">
                                                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                                                    <input type="reset" class="btn btn-infor" value="Reset">
                                                                                </div>
                                                                            </form> {{-- END Id="form_work" --}}
                                                                        @else 
                                                                            <h2>Bạn còn đi học</h2>
                                                                        @endif {{-- END $item->status_id == 3 || $item->status_id === 2 --}}
                                                                    @endif {{-- END $item->user_id === Auth::user()->user_id --}}
                                                    
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                @else
                                                    <div class="panel panel-warning">
                                                        <div class="panel-heading"> Bạn còn đi học
                                                            <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                                                        </div>
                                                        <div class="panel-wrapper collapse in" aria-expanded="true">
                                                            <div class="panel-body">
                                                                <p>Bạn còn đi học , nên không thể thêm công việc.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                {{-- END KIỂM TRA TRẠNG THÁI NGƯỜI DÙNG Ở BƯỚC 1 --}}
                                        @endif 
                                        {{-- END $item->user_id === Auth::user()->user_id --}}

                                    @endforeach
                                </div>
                            </div>
                            {{-- end div jobs-add --}}
                        @endif
                            
                    </div>
                </div>
                {{-- end white-box --}}
            </div>
            {{-- end col-md-8 --}}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

{{-- TODO: SCRPT XỬ LÝ NGHỈ VIỆC --}}
<script>
    // script này
    $('.btn-resign').click(function(){
            const confirmResult = confirm("Bạn có chắc muốn nghỉ việc tại đây?");
            if(!confirmResult)
            {
                return false;
            }

            // TODO: Nếu thằng này bị lỗi thì sẽ ko thực thi câu lệnh ở dưới
            $('.submit-resign').click(function(){
                var workEnd = $('#work_end').val();
                console.log(typeof workEnd);
                var workBegin = $('#ngaybd').val();
                console.log(typeof workBegin);
                
                console.log('workEnd <= workBegin',workEnd <= workBegin );
                

                // return false;
            
                // Ngày làm 2019-10-15
                // Ngày nghỉ 2018-10-15

                // Cái nào có keycode lớn hơn thì lớn hơn

                if(new Date(workEnd) <= new Date(workBegin))
                {
                    document.getElementById("error_date").innerHTML = "Ngày nghỉ phải lớn hơn ngày vào làm";
                    return false;
                }
                const workID = $('.btn-resign').attr("data-workID");
                // console.log(workID);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                $.ajax({
                    type: "POST",
                    url: "{{route('accounts/resign_ajax')}}",
                    data: {workEnd:workEnd,workID:workID},
                    dataType: "JSON",
                    success: function (response) {
                        if(response.workEnd === 'successworkEnd')
                        {
                            alert('Đã chọn ngày nghỉ việc!');
                            location.reload();
                        }
                    }
                });
                
                // const workID = $(this).attr('data-workID');
            
                $.ajax({
                    type: "POST",
                    url: "{{route('accounts/resign_ajax')}}",
                    data: {workID:workID},
                    dataType: "JSON",
                    // success: function (response) {
                    //     if(response.result === 'success')
                    //     {
                    //         alert('Đã nghỉ việc!');
                    //     }
                    // }
                    });
                });
            // end chon ngay nghi            
    });
        
</script> 


{{-- TODO: SCRIPT FORM THÊM CÔNG VIỆC --}}
<script>
    $(function () {
        $('.btn-accept').click(function(event){
            event.preventDefault();
            $('.show-company').toggle("slow");
        });
        $('.nghi-lam').click(function(event){
            event.preventDefault();
            $('.show-nghi-lam').toggle("slow");
        })
        $('.work-other').click(function(event){
            event.preventDefault();
            $('.show-work').toggle("slow");
        })
    });
</script>
<script>
    function showOther()
    {
        event.preventDefault();
        $('#showOtherEmail').toggle("slow");
    }
</script>
@endsection