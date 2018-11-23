
@extends('layouts.adminLayout.admin_design')
@section('content')
@include('layouts.adminLayout.menubar')

<div class="main-content">
     <div class="text-center">

        <h1 class="title-1">Add Category</h1> <br>
        </div>

                    <div class="col-lg-11">
                            <div class="card" >
                                <div class="card-header">
                        <strong>Category Details</strong>
                    </div>
                        <div class="card-body card-block">
                        <form action="{{ url('admin/category/create') }}" method = "post">

                                {{csrf_field()}}
                                <div class="row form-group">
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3 form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
                                        <label for="text-input" class=" form-control-label">Category Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="category_name" class="form-control" name="category_name" value="{{ old('category_name')}}" >
                                    <small class="text-danger">{{ $errors->first('category_name') }}</small>
                                    </div>
                                </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Category Level</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="parent_id"  class="form-control" >
                                    <option value="0">Main Categories</option>
                                    @foreach($levels as $level)
                                    <option value="{{$level->id}}">{{$level->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>


                               



                            <div class="form-actions">
                                <input type="submit" value="Add Category" class="btn btn-success">
                            </div>

                            </form>
                        @endsection
