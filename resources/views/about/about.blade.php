@extends('layouts.masterinner')
@extends('box.about.about')

@section('title')
    About
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 btn_mod">
            @if($count == 0)
            <button class="btn btn-social btn-primary btn-flat" data-toggle="modal" data-target="#categoryModal">
                <i class="fa fa-plus"></i>
                Add About Section
            </button>
             @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <table id="dataTable" class="table table-striped table-hover table-condensed table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Image</th>
                        <th>Position</th>
                        <th class="text-center">Description-1</th>
                        <th class="text-center">Description-2</th>
                        <th class="text-right">Edit</th>
                        <th class="text-right">Del</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($table as $row)
                        <tr>
                            <td class="text-center">
                                @if($row->imageName != null)
                                    <img width="30" height="30" src="{{asset('public/uploads/about/'.$row->imageName)}}" alt="spurkayastha83@gmail.com">
                                @else
                                    <img width="30" height="30" src="{{asset('public/profile/user/user.png')}}" alt="spurkayastha83@gmail.com">
                                @endif
                            </td>
                            <td>{{$row->position}}</td>
                            <td>{{str_limit($row->description_1,50,'...')}}</td>
                            <td>{{str_limit($row->description_2,50,'...')}}</td>
                            <td class="text-center"><button data-id="" data-name="" class="btn btn-xs btn-flat btn-success ediModal"  data-toggle="modal" data-target="#categoryEdiModal">Edit</button></td>
                            <td class="text-right"><a href="#" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a></td>
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

                $('#ediCategoryForm [name=id]').val(id);
                $('#ediCategoryForm [name=name]').val(name);

            });
        });
        $(function () {
            $('#dataTable').DataTable({
                "order": [[ 0, "DESC" ]],
                "iDisplayLength": 25,
                "columnDefs": [
                    { "orderable": false, "targets": [4,5]}//For Column Order
                ]
            });
        });



    </script>

@endsection