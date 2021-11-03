@extends('admin.admin-master')


@section('content')
<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">{{__('All Users')}}</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">{{__('User')}}</li>
								<li class="breadcrumb-item active" aria-current="page">{{__('Data Table')}}</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <div class="row">
                    <div class="col-6"><h3 class="box-title">User Data</h3></div>
                    <div class="col-6 text-right">
                        <a href="{{route('add.user')}}" class="btn btn-success">{{__('Add New User')}}</a>
                    </div>
                  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>{{__('SL')}}</th>
								<th>{{__('Name')}}</th>
								<th>{{__('Role')}}</th>
								<th>{{ __('Status') }}</th>
								<th>{{__('E-mail')}}</th>
								<th>{{__('Photo')}}</th>
								<th>{{__('Action')}}</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $key => $user )
								<tr>
									<td>{{$key+1}}</td>
									<td>{{$user->name}}</td>
									<td>{{$user->usertype}}</td>
									<td>
										@if ($user->status == 1)
											<button class="btn btn-success">{{__('Active')}}</button>
											@else
											<button class="btn btn-danger">{{__('Blocked')}}</button>
										@endif
									</td>
									<td>{{$user->email}}</td>
									<td>
										@if ($user->profile_photo)
											<img src="{{ asset($user->profile_photo) }}" alt="{{$user->name}}" style="width: 80px; height: 80px;">
										@else
											<img src="{{asset('backend/assets/images/avatar/avatar-1.png')}}" alt="{{$user->name}}" style="width: 80px; height: 80px;">
										@endif  
									</td>
									<td>
										<a href="{{ route('view.user.profile', $user->id) }}" class="btn btn-primary"><i class="ti-eye"></i></a>
										@if ($user->status == 1)
											<a href="{{ route('block.user', $user->id) }}" class="btn btn-warning"><i class="ti-close"></i></a>
										@else
											<a href="{{ route('unblock.user', $user->id) }}" class="btn btn-success"><i class="ti-unlock"></i></a>
										@endif
										<a href="{{ route('edit.user', $user->id) }}" class="btn btn-success"><i class="ti-pencil-alt"></i></a>
										<a href="{{route('delete.user',$user->id)}}" class="btn btn-danger" id="deleteUser"><i class="ti-trash"></i></a>
									</td>
								</tr>
							@endforeach
							
							
						</tbody>
						
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <!-- /.box -->          
			</div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>
@endsection