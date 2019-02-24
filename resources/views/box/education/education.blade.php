@section('box')

    <div id="categoryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add Education</h4>
                </div>
                <form action="{{action('Education\EducationController@save')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon">Degree</span>
                            <input name="name" class="form-control" placeholder="Degree" type="text" required>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Institution</span>
                            <input name="institution" class="form-control" placeholder="Institution" type="text" required>
                        </div><br/>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
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
                    <h4 class="modal-title">Edit Education</h4>
                </div>
                <form id="ediCategoryForm" action="{{action('Education\EducationController@edit')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id">
                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon">Degree</span>
                            <input name="name" class="form-control" placeholder="Degree" type="text" required>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Institution</span>
                            <input name="institution" class="form-control" placeholder="Institution" type="text" required>
                        </div><br/>

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