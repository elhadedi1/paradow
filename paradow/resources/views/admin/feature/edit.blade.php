@extends('admin/layout/main')

@section('content')
    
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Basic table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
                <div class="page-content-wrap">          
                    <div class="row" style="margin-right:0px">
                        <div class="col-md-10" style="margin:50px;">                        
                        <h4> Update </h4>
              <br><br>
                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <form  id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/feature/'.$feature->id)}}" method="post" novalidate="novalidate">
                                <input type="hidden" name="_method" value="PUT">

                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="panel-body" >      
                                   
                                    @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)                                      
  <div class="form-group row @if($errors->has('title')) has-error @endif">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
<div class="col-sm-6">
<input type="text" class="form-control" name="title[{{$key}}]" placeholder="" value="{{$fullData1[$key]}}">
<strong class="help-block">{{ $errors->first('title') }}</strong> 
<br>
</div>
</div>
<div class="form-group row @if($errors->has('description')) has-error @endif">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-6">

      <textarea type="text" class="form-control" id="description" name="description[{{$key}}]" placeholder="" row="4">{{$fullData2[$key]}}</textarea>
      <strong class="help-block">{{ $errors->first('description') }}</strong> 
      <br>

    </div>
  </div>
  <hr>
  @endforeach
  <div class="form-group row @if($errors->has('image')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">image</label>
    <div class="col-sm-6">
      <input type="file" class="form-control" id="inputPassword" value="{{$feature->image}}" name="image">
      <strong class="help-block">{{ $errors->first('image') }}</strong> 

    </div>
    <img src="/images/{{$feature->image}}" style="    position: relative;
        top: -26px;height: 82px;">
  </div>
  
                                                                                                                        
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-primary center" type="submit" style="width: 150px;
    position: relative;
    left: -385%;
    ">Update Photo</button>
                                        </div>                                                                                                                          
                                    </div>                                               
                                    </form>
                                </div>
                            </div>
                            <!-- END JQUERY VALIDATION PLUGIN -->
                            </div>
                        </div>
                    </div>
                    @stop
