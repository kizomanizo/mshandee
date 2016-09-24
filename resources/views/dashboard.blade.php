@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h1 class="huge-title">You need to setup a company</h1>
            </div>
            <div class="content">
                <form role="form" method="POST" action="{{ url('/add_company') }}">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control" placeholder="Company Name" name="cname">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Company Initials</label>
                                <input type="text" class="form-control" placeholder="Initials" name="cinitials">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Company Address</label>
                                <input type="text" class="form-control" placeholder="P.O. Box" name="caddress">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Company Location</label>
                                <input type="text" class="form-control" placeholder="City" name="clocation">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-info btn-fill pull-center">Create Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection