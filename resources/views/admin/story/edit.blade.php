@extends('admin.master')

@section('content')

    <section id="main-content">
        <section class="wrapper">
        <div class="container" style="height: 100%;width: 100%;">
            <div class="" >
                <div class="item" style="margin-top: 1%; box-shadow: 1px 1px 1px black;">
                    <div class="thumbnail" style="margin-top: 1%">
                        <h1 style="margin-left: 5%">EDIT Story</h1>
                        <hr>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal form-label-left" novalidate style="margin-top: 5%; width:90%;margin-left: 5%;" action="{{ URL::to('/adminpanel/story') }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h1>English</h1>
                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> title
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="title" class="form-control col-md-7 col-xs-12"  name="title_en" value="{{$story->title_en}}" type="text">
                            </div>
                        </div>


                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> subtitle
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="text" class="form-control col-md-7 col-xs-12"  name="subtitle_en"  value="{{$story->subtitle_en}}" type="text">
                            </div>
                        </div>

                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> text
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="text" class="form-control col-md-7 col-xs-12"  name="text_en" value="{{$story->text_en}}"  type="text">
                            </div>
                        </div>

                        <hr>
                        <h1>Russian</h1>
                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> title
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="title" class="form-control col-md-7 col-xs-12"  name="title_ru" value="{{$story->title_ru}}" type="text">
                            </div>
                        </div>


                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> subtitle
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="text" class="form-control col-md-7 col-xs-12"  name="subtitle_ru"  value="{{$story->subtitle_ru}}" type="text">
                            </div>
                        </div>

                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> text
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="text" class="form-control col-md-7 col-xs-12"  name="text_ru" value="{{$story->text_ru}}"  type="text">
                            </div>
                        </div>
                        <hr>
                        <h1>Azerbaijani</h1>
                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> title
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="title" class="form-control col-md-7 col-xs-12"  name="title_az" value="{{$story->title_az}}" type="text">
                            </div>
                        </div>


                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> subtitle
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="text" class="form-control col-md-7 col-xs-12"  name="subtitle_az"  value="{{$story->subtitle_az}}" type="text">
                            </div>
                        </div>

                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> text
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="text" class="form-control col-md-7 col-xs-12"  name="text_az" value="{{$story->text_az}}"  type="text">
                            </div>
                        </div>

                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> link
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="text" class="form-control col-md-7 col-xs-12"  name="link"  value="{{$story->link}}" type="text">
                            </div>
                        </div>

                        <input type="hidden"  name="id" value="{{$story->id}}"><br>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">

                                <input type="file" name="image"  class="btn btn-file"  accept="image/*">

                                <br>
                                <button type="button" class="btn btn-primary"  onclick="redirect()">Cancel</button>
                                <input type="submit" class="btn btn-success"  value="Save" >
                            </div>
                        </div>
                    </form>
                    <!-- /page content -->
                </div>
            </div>
        </div>
        </div>
        <script>
            function redirect(){
                window.location="{{URL::to('/adminpanel/story')}}";
            }
        </script>
        </section>
    </section>
@stop
