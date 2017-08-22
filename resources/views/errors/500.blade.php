@extends('layouts.app')
@section('title', "404 not found")
@section('content')
    <div class="container text-center">

        <div class="content-404">

                <div class="jumbotron">
                    <p class="lead">The web server is returning an internal error for <em><span id="display-domain"></span></em>.</p>
                    <a href="javascript:document.location.reload(true);" class="btn btn-default btn-lg text-center"><span class="green">Try This Page Again</span></a>
                </div>
            </div>
            <div class="container">
                <div class="body-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>What happened?</h2>
                            <p class="lead">A 500 error status implies there is a problem with the web server's software causing it to malfunction.</p>
                        </div>
                        <div class="col-md-6">
                            <h2>What can I do?</h2>
                            <p class="lead">If you're a site visitor</p>
                            <p> Nothing you can do at the moment. If you need immediate assistance, please send us an email instead. We apologize for any inconvenience.</p>
                            <p class="lead">If you're the site owner</p>
                            <p>This error can only be fixed by server admins, please contact your website provider.</p>
                        </div>
                    </div>

            </div>
            <h2><a href="{{URL::to('/')}}">Bring me back Home</a></h2>
        </div>
    </div>
@endsection