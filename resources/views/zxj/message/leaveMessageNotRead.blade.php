@extends('zxj.layout')

@section('title', '后台管理首页')

@section('content')
            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">未读留言</h3> 
                </div>

                <div class="row">
                	@foreach($message as $m)
                		{{$m->name}}
                	@endforeach

                </div> <!-- end row -->


            </div>

@endsection