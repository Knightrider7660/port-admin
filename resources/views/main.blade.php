@extends('layouts.master')
@extends('box.user.user')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="box box-success">
                <div class="panel-body">
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-orange">
                            <div class="inner">
                                <h3>{{date('F j')}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6 rounded-circle">
                        <!-- small box -->
                        <div class="small-box bg-gray">
                            <div class="inner p-20">
                                @if($user->imageName != null)
                                    <img src="{{asset('public/profile/user/'.$user->imageName)}}" alt="Sukanta">
                                @else
                                <img src="{{asset('public/profile/user/user.png')}}" alt="Sukanta">
                                @endif
                                <h3>{{$user->name}}</h3>
                                <h4>{{$user->position}}</h4>
                                <h4>{{$user->company}}</h4>
                                <h4>{{$user->address}}</h4>
                                <a class="btn btn-sm btn-info pr-2 pl-2 mt-10" href="{{action('MainController@inner_view',['id'=>$user->id])}}"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>{{date('Y')}}</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">

    </script>
@endsection
