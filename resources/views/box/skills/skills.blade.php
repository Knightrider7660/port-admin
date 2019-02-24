@section('box')

    <div id="categoryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add Skill</h4>
                </div>
                <form action="{{action('Skill\SkillController@save')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon">Name</span>
                            <input name="name" class="form-control" placeholder="Name" type="text" required>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Capability</span>
                            <input name="capability" class="form-control" value="0" min="0" type="number" required>
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
                <form id="ediCategoryForm" action="{{action('Skill\SkillController@edit')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id">
                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon">Name</span>
                            <input name="name" class="form-control" placeholder="Name" type="text" required>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Capability</span>
                            <input name="capability" class="form-control" value="0" min="0" type="number" required>
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