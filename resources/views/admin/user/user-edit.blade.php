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
                            <h2>{{__('Update user details')}}</h2>
                        </div>
                        <div class="box-body">
                            <form method="POST" action="{{route('update.user')}}" enctype="multipart/form-data" >
                                @csrf
                                <input type="hidden" name="id" value="{{$editUser->id}}">
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
                                            <input class="form-control" type="text" name="name" value="{{$editUser->name}}">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">{{__('E-mail')}}</label>
                                            <input class="form-control" type="email" name="email" value="{{$editUser->email}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">{{__('Mobile')}}</label>
                                            <input class="form-control" type="text" name="mobile" value="{{$editUser->mobile}}">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">{{__('Address')}}</label>
                                            <input class="form-control" type="text" name="address" value="{{$editUser->address}}">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">{{__('Description')}}</label>
                                            <textarea id="posteditor" class="form-control" name="description" rows="10" cols="80">
                                                {{$editUser->description}}
                                            </textarea>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>{{__('Select Gender')}}</label>
                                            <select name="gender" class="form-control select2" style="width: 100%;">
                                                <option {{ $editUser->gender == 'Male' ? 'selected' : ''}}>{{__('Male')}}</option>
                                                <option {{ $editUser->gender == 'Female' ? 'selected' : ''}}>{{__('Female')}}</option>
                                                <option {{ $editUser->gender == 'Others' ? 'selected' : ''}}>{{__('Others')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">{{__('Facebook')}}</label>
                                            <input class="form-control" type="text" name="facebook" value="{{$editUser->facebook}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">{{__('Twitter')}}</label>
                                            <input class="form-control" type="text" name="twitter" value="{{$editUser->twitter}}">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">{{__('Instagram')}}</label>
                                            <input class="form-control" type="text" name="instagram" value="{{$editUser->instagram}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">{{__('Youtube')}}</label>
                                            <input class="form-control" type="text" name="youtube" value="{{$editUser->youtube}}">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="profile_photo">{{ __('Profile Photo') }}</label>
                                            <input type="file" name="profile_photo" id="profile_photo">
                                        </div>
                                        <div>
                                            @if ($editUser->profile_photo)
                                                <img src="{{ asset($editUser->profile_photo) }}" class="img-thumbnail" id="profileThmb" alt="user" style="width: 200px; height: 200px;">
                                            @else
                                                <img src="{{asset('backend/assets/images/avatar/avatar-1.png')}}" class="img-thumbnail" id="profileThmb" alt="{{Auth::User()->name}}" style="width: 200px; height: 200px;">
                                            @endif    
                                            <input type="hidden" name="oldimage" value="{{ $editUser->profile_photo }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary mr-2">{{ __('Update Profile') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/r24p9oqicwy6ccj2ntw3q6u2jal1ex8hzk0fpu8qj7ys77ob/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    $(document).ready(function(){
        tinymce.init({
            selector: 'textarea#posteditor',
            height: 300,
            menubar: true,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	        "searchreplace wordcount visualblocks visualchars code fullscreen",
	        "insertdatetime media nonbreaking save table contextmenu directionality",
	        "emoticons template paste textcolor colorpicker textpattern imagetools"
            ],
            
            
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor emoticons | print preview media | code fullscreen",
	    
	    a11y_advanced_options: true,
	     image_title: true,
		  /* enable automatic uploads of images represented by blob or data URIs*/
		  automatic_uploads: true,
		  /*
		    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
		    images_upload_url: 'postAcceptor.php',
		    here we add custom filepicker only to Image dialog
		  */
		  file_picker_types: 'file image media',
		  image_uploadtab: true,
		  image_advtab: true,
		  image_caption: true,
		  images_upload_credentials: true,
		  /* and here's our custom image picker*/
		  file_picker_callback: function (cb, value, meta) {
		    var input = document.createElement('input');
		    input.setAttribute('type', 'file');
		    input.setAttribute('accept', 'image/*');
		
		    /*
		      Note: In modern browsers input[type="file"] is functional without
		      even adding it to the DOM, but that might not be the case in some older
		      or quirky browsers like IE, so you might want to add it to the DOM
		      just in case, and visually hide it. And do not forget do remove it
		      once you do not need it anymore.
		    */
		
		    input.onchange = function () {
		      var file = this.files[0];
		
		      var reader = new FileReader();
		      reader.onload = function () {
		        /*
		          Note: Now we need to register the blob in TinyMCEs image blob
		          registry. In the next release this part hopefully won't be
		          necessary, as we are looking to handle it internally.
		        */
		        var id = 'blobid' + (new Date()).getTime();
		        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
		        var base64 = reader.result.split(',')[1];
		        var blobInfo = blobCache.create(id, file, base64);
		        blobCache.add(blobInfo);
		
		        /* call the callback and populate the Title field with the file name */
		        cb(blobInfo.blobUri(), { title: file.name });
		      };
		      reader.readAsDataURL(file);
		    };
		
		    input.click();
		  },
	    content_css: '//www.tiny.cloud/css/codepen.min.css'
        });

        //user profile
        $('#profile_photo').change(function() {

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#profileThmb').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
    });
</script>
@endsection