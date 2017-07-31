@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-sm-3 profile-sidebar">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.sidebar')
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 profile-content">
                        <notifications></notifications>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
