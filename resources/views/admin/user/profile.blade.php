@extends('admin.admin-master')


@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">{{ __('User Profile') }}</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">{{ __('User') }}</li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('profile') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">

                <div class="row">
                    <div class="col-12 col-lg-5 col-xl-4">

                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black">
                                <h3 class="widget-user-username">{{ $userProfile->name }}</h3>
                                <h6 class="widget-user-desc">{{ $userProfile->usertype }}</h6>
                            </div>
                            <div class="widget-user-image">
                                
                                @if ($userProfile->profile_photo)
                                    <img class="rounded-circle" src="{{ asset($userProfile->profile_photo) }}"  alt="{{$userProfile->name}}">
                                @else
                                    <img class="rounded-circle" src="{{asset('backend/assets/images/avatar/avatar-1.png')}}" alt="{{$userProfile->name}}">
                                @endif  
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">12K</h5>
                                            <span class="description-text">FOLLOWERS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 br-1 bl-1">
                                        <div class="description-block">
                                            <h5 class="description-header">550</h5>
                                            <span class="description-text">FOLLOWERS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">158</h5>
                                            <span class="description-text">TWEETS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- Profile Image -->
                        <div class="box">
                            <div class="box-body box-profile">
                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <p>{{__('Email :')}}<span class="text-gray pl-10">{{$userProfile->email}}</span> </p>
                                            <p>{{__('Phone :')}}<span class="text-gray pl-10">{{$userProfile->mobile}}</span></p>
                                            <p>{{__('Address :')}}<span class="text-gray pl-10">{{$userProfile->address}}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="pb-15">
                                            <p class="mb-10">Social Profile</p>
                                            <div class="user-social-acount">
                                                <a href="{{$userProfile->facebook}}" target="__blank" class="btn btn-circle btn-social-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="{{$userProfile->twitter}}" target="__blank"  class="btn btn-circle btn-social-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="{{$userProfile->instagram}}" target="__blank"  class="btn btn-circle btn-social-icon btn-instagram"><i
                                                        class="fa fa-instagram"></i></a>
                                                <a href="{{$userProfile->youtube}}" target="__blank"  class="btn btn-circle btn-social-icon btn-youtube"><i
                                                    class="fa fa-youtube-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <div class="map-box">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329"
                                                    width="100%" height="100" frameborder="0" style="border:0"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>

                        <!-- /.box -->


                        <div class="box box-inverse" style="background-color: #3b5998">
                            <div class="box-header no-border">
                                <span class="fa fa-facebook font-size-30"></span>
                                <div class="box-tools pull-right">
                                    <h5 class="box-title box-title-bold">Facebook feed</h5>
                                </div>
                            </div>

                            <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                <p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly
                                    incubate cross functional action.</p>
                                <div class="flexbox">
                                    <time class="text-white" datetime="2017-11-21 20:00">21 November, 2017</time>
                                    <span><i class="fa fa-heart"></i> 75</span>
                                </div>
                            </blockquote>
                        </div>

                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <a href="{{ route('edit.user', $userProfile->id) }}" class="btn btn-primary">Edit Profile</a>
                                    
                                    </div>
                                    <div >
                                        <a href="{{route('reset.pass', $userProfile->id)}}" class="btn btn-secondary">Reset Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-7 col-xl-8">




                        <div class="box p-15">
                            <div class="timeline timeline-single-column timeline-single-full-column">


                                <span class="timeline-label">
                                    <span class="badge badge-info badge-pill">Descripton</span>
                                </span>
                                <div class="timeline-item">
                                    <div class="timeline-point timeline-point-info">
                                        <i class="ion ion-chatbubble-working"></i>
                                    </div>
                                    <div class="timeline-event">
                                        
                                        <div class="timeline-body">
                                            <p>{!! $userProfile->description !!}</p>
                                        </div>

                                    </div>
                                </div>
                                <span class="timeline-label">
                                    <span class="badge badge-info badge-pill">Images</span>
                                </span>

                                <div class="timeline-item">
                                    <div class="timeline-point timeline-point-success">
                                        <i class="fa fa-image"></i>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"><a href="#">Rakesh Kumar</a><small> uploaded new
                                                    photos</small></h4>
                                        </div>
                                        <div class="timeline-body">
                                            <img src="../images/150x100.png" alt="..." class="m-10">
                                            <img src="../images/150x100.png" alt="..." class="m-10">
                                            <img src="../images/150x100.png" alt="..." class="m-10">
                                            <img src="../images/150x100.png" alt="..." class="m-10">
                                        </div>

                                    </div>
                                </div>

                                <span class="timeline-label">
                                    <span class="badge badge-info badge-pill">Video</span>
                                </span>
                                <div class="timeline-item">
                                    <div class="timeline-point timeline-point-danger">
                                        <i class="ion ion-ios-videocam"></i>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"><a href="#">Jone Doe</a><small> shared a
                                                    video</small></h4>
                                        </div>
                                        <div class="timeline-body">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe width="854" height="480"
                                                    src="https://www.youtube.com/embed/k85mRPqvMbE" frameborder="0"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <span class="timeline-label">
                                    <button class="btn btn-rounded btn-danger"><i class="fa fa-clock-o"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    </div>
    <!-- /.row -->

    </section>
    </div>
    </div>
@endsection
