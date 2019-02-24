@section('box')

    <div id="categoryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add About Section</h4>
                </div>
                <form action="{{action('Portfolio\AboutController@save')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon">Position</span>
                            <input name="position" class="form-control" placeholder="Position" type="text" required>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Description-1</span>
                            <textarea name="description_1" class="form-control" placeholder="Description"  cols="4" rows="6"></textarea>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Description-2</span>
                            <textarea name="description_2" class="form-control" placeholder="Description"  cols="4" rows="6"></textarea>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Image</span>
                            <input style="padding-bottom: 40px;" name="imageName" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" type="file">
                        </div><br/>
                        <img id="blah" alt="your image" width="300" height="200" />

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <div id="categoryEdiModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Edit Accessories Category</h4>
                </div>
                <form id="ediCategoryForm" action="{{action('Portfolio\AboutController@edit')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id">
                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon">Position</span>
                            <input name="position" class="form-control" placeholder="Position" type="text" required>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Description-1</span>
                            <textarea name="description_1" class="form-control" placeholder="Description"  cols="4" rows="6"></textarea>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Description-2</span>
                            <textarea name="description_2" class="form-control" placeholder="Description"  cols="4" rows="6"></textarea>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Image</span>
                            <input style="padding-bottom: 40px;" name="imageName" class="form-control" onchange="document.getElementById('update').src = window.URL.createObjectURL(this.files[0])" type="file">
                        </div><br/>

                        @if($row->imageName != null)
                            <img id="update" src="{{asset('public/uploads/about/'.$row->imageName)}}" alt="your image" width="300" height="200" />
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