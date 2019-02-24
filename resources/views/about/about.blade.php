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
                            <td class="text-center"><button data-id="{{$row->aboutID}}" data-name="{{$row->position}}" data-des1="{{$row->description_1}}" data-des2="{{$row->description_2}}" data-img="{{$row->imageName}}" class="btn btn-xs btn-flat btn-success ediModal"  data-toggle="modal" data-target="#categoryEdiModal">Edit</button></td>
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
                var des1 = $(this).data('des1');
                var des2 = $(this).data('des2');
                var img = $(this).data('img');

                $('#ediCategoryForm [name=id]').val(id);
                $('#ediCategoryForm [name=position]').val(name);
                $('#ediCategoryForm [name=description_1]').val(des1);
                $('#ediCategoryForm [name=description_2]').val(des2);
                $('#ediCategoryForm [name=image]').val(img);

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