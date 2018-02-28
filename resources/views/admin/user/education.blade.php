@extends('adminMaster')
{{--@section('content-header')--}}
    {{--<h1>--}}
        {{--Education--}}
        {{--<small>Control panel</small>--}}
    {{--</h1>--}}
{{--@endsection--}}
{{--@section('breadcrumb')--}}
    {{--<ol class="breadcrumb">--}}
        {{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
        {{--<li class="active">Dashboard</li>--}}
    {{--</ol>--}}
{{--@endsection--}}
@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-heading font-14">
                    <i class="fa fa-plus-circle"></i>

                </div>
                <div class="panel-body">
                    <p>
                    Welcome to our page, please add complete your profile so you can get the better data.
                    </p>
                    {{--<div class="form-group">--}}
                        {{--<div class="radio">--}}
                            {{--<label>--}}
                                {{--<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>--}}
                                {{--Option one is this and that&mdash;be sure to include why it's great--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        {{--<div class="radio">--}}
                            {{--<label>--}}
                                {{--<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">--}}
                                {{--Option two can be something else and selecting it will deselect option one--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<a id="new-team-memeber" style="background: #1ABB9C; color: #fff;" class="btn btn-default create-new"--}}
                       {{--data-toggle="modal" data-target="#form_modal" href="/admin/city/addTeam">--}}
                        {{--<i class="fa fa-plus"></i>--}}
                        {{--Add Member--}}
                    {{--</a>--}}

                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Horizontal Form</h3>
                            <i class="fa fa-plus-circle"></i>
                            <a id="new-team-memeber" style="background: #1ABB9C; color: #fff;" class="btn btn-default create-new pull-right"
                               data-toggle="modal" data-target="#form_modal" href="/admin/user/addEducation">
                                <i class="fa fa-plus"></i>
                                Add Education
                            </a>
                        </div>
                        <form class="form-horizontal">

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">Review Application and Continue</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
