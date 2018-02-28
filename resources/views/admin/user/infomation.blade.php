@extends('adminMaster')
@section('content-header')
    <h1>
        Overview
        <small>Control panel</small>
    </h1>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-color panel-inverse">
                <div class="panel-heading font-14">
                    <i class="fa fa-plus-circle"></i>
                    <a id="new-team-memeber" style="background: #1ABB9C; color: #fff;" class="btn btn-default create-new"
                       data-toggle="modal" data-target="#form_modal" href="/admin/city/addTeam">
                        <i class="fa fa-plus"></i>
                        Add Member
                    </a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        testing
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
