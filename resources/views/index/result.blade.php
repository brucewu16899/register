@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>报名系统</h4></div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-md-offset-3 text-center">
                                @if($register->state == 1)
                                    <h2 class="fast"><i class="fa fa-hand-peace-o"></i> 恭喜您初审成功 </h2>
                                    <p>你提交的苏州科技大学敬文新教育书院报名申请表单已经通过初审啦！请等待通知~~</p>
                                    @elseif($register->state == 2)
                                    <h2 class="fast"><i class="fa fa-hand-peace-o"></i> 恭喜您已被录取 </h2>
                                    <p>你已成功被苏州科技大学敬文新教育书院录取！请等待通知~~</p>
                                    @else
                                    <h2 class="fast"><i class="fa fa-clock-o"></i> 您已经成功报名 </h2>
                                    <p>请等待管理员审核，如需修改，请联系管理员！</p>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
