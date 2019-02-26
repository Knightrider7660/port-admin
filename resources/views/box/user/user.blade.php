@section('box')
    <div id="userUpdate" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="fa fa-edit"></i> &nbsp;Update Profile Information</h4>
                </div>
                <form action="{{action('MainController@update')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <div class="modal-body">
                        <div class="input-group">
                            <span class="input-group-addon">Name</span>
                            <input name="name" class="form-control" placeholder="Name" type="text" value="{{$user->name}}">
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Email</span>
                            <input name="email" class="form-control" placeholder="Email" type="text" value="{{$user->email}}">
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Position</span>
                            <input name="position" class="form-control" placeholder="Position" type="text" value="{{$user->position}}">
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Company</span>
                            <input name="company" class="form-control" placeholder="Company" type="text" value="{{$user->company}}">
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Address</span>
                            <textarea name="address" class="form-control" placeholder="Address"  cols="4" rows="6">{{$user->address}}</textarea>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Image</span>
                            <input style="padding-bottom: 40px;" name="imageName" class="form-control" onchange="document.getElementById('update').src = window.URL.createObjectURL(this.files[0])" type="file">
                        </div><br/>
                        @if($user->imageName != null)
                            <img id="update" src="{{asset('public/profile/user/'.$user->imageName)}}" alt="your image" width="300" height="200" />
                        @endif

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection