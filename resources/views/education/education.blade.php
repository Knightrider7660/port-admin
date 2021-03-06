@extends('layouts.masterinner')
@extends('box.education.education')

@section('title')
    Education
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 btn_mod">
                <button class="btn btn-social btn-primary btn-flat" data-toggle="modal" data-target="#categoryModal">
                    <i class="fa fa-plus"></i>
                    Add Education
                </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <table id="dataTable" class="table table-striped table-hover table-condensed table-bordered">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th class="">Name</th>
                        <th class="">Institution</th>
                        <th class="text-right">Edit</th>
                        <th class="text-right">Del</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->eduID}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->institution}}</td>
                            <td class="text-center"><button data-id="{{$row->eduID}}" data-name="{{$row->name}}" data-institution="{{$row->institution}}" class="btn btn-xs btn-flat btn-success ediModal"  data-toggle="modal" data-target="#categoryEdiModal">Edit</button></td>
                            <td class="text-right"><a href="{{action('Education\EducationController@del',['id' => $row->eduID])}}" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('.ediModal').click(function () {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var institution = $(this).data('institution');

                $('#ediCategoryForm [name=id]').val(id);
                $('#ediCategoryForm [name=name]').val(name);
                $('#ediCategoryForm [name=institution]').val(institution);

            });
        });
        $(function () {
            $('#dataTable').DataTable({
                "order": [[ 0, "DESC" ]],
                "iDisplayLength": 25,
                "columnDefs": [
                    { "orderable": false, "targets": [3,4]}//For Column Order
                ]
            });
        });



    </script>

@endsection