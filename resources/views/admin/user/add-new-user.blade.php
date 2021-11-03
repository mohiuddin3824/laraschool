@extends('admin.admin-master')


@section('content')
<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">{{__('Add New User')}}</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">{{__('User')}}</li>
								<li class="breadcrumb-item active" aria-current="page">{{__('Form')}}</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box mt-4">
                        <div class="box-header">
                            <h2>{{__('Add user details')}}</h2>
                        </div>
                        <div class="box-body">
                            <form method="POST" action="{{route('store.user')}}" >
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>{{__('Select Role')}}</label>
                                            <select name="usertype" class="form-control select2" style="width: 100%;">
                                            
                                            <option>Admin</option>
                                            <option>User</option>
                                            
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">{{__('Name')}}</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">{{__('E-mail')}}</label>
                                            <input class="form-control" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="name">{{__('Password')}}</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">{{ __('Add New User') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>        
@endsection