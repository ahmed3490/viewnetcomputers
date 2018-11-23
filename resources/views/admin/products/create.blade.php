
@extends('layouts.adminLayout.admin_design')
@section('content')
@include('layouts.adminLayout.menubar')

<div class="main-content">
        <div class="text-center">
            <h1 class="title-1">Add Product</h1> <br>
        </div>

                    <div class="col-lg-11">
                        <div class="card" >
                            <div class="card-header">
                        <strong>Product Details</strong>
                    </div>

                    <div class="card-body card-block">
                        <form  enctype="multipart/form-data"    action="{{ url('admin/product/create') }}" method = "post">
                                {{csrf_field()}}
                        <div class="row form-group">
                    </div>
                             <div class="row form-group">
                                    <div class="col col-md-3 form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                                        <label for="text-input" class=" form-control-label">Product Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <small class="text-danger">{{ $errors->first('product_name') }}</small>
                                        <input  id="product_name" class="form-control" name="product_name" value="{{ old('product_name')}}" >

                                    </div>
                                </div>

                                 <div class="row form-group">
                                    <div class="col col-md-3 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label for="text-input" class=" form-control-label">Product Category</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <select name="category_id" id="category_id" class="form-control" >

                                        <?php echo $categories_dropdown; ?>

                                    </select>
                                    <small class="text-danger">{{ $errors->first('category_id') }}</small>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3 form-group{{ $errors->has('product_SKU') ? ' has-error' : '' }}">
                                        <label for="text-input" class=" form-control-label">Product Sku</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input   id="product_SKU" class="form-control" name="product_SKU" value="{{ old('product_SKU')}}" >
                                    <small class="text-danger">{{ $errors->first('product_SKU') }}</small>
                                    </div>
                                </div>

                               <div class="row form-group">
                                    <div class="col col-md-3 form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="text-input" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <textarea id="description" class="form-control" name="description" value="{{ old('description')}}"></textarea>
                                    <small class="text-danger">{{ $errors->first('description') }}</small>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3 form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                        <label for="text-input" class=" form-control-label">Product Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input   id="price" class="form-control" name="price" value="{{ old('price')}}" >
                                    <small class="text-danger">{{ $errors->first('price') }}</small>
                                    </div>
                                </div>

                              
                                <div class="row form-group">
                                    <div class="col col-md-3 form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label for="text-input" class=" form-control-label">Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type = "file"   id="image" class="form-control" name="image" value="{{ old('image')}}" >
                                    <small class="text-danger">{{ $errors->first('image') }}</small>
                                    </div>
                                </div>



                            <div class="form-actions">
                                <input type="submit" value="Create Product" class="btn btn-success">
                            </div>

                            </form>
                        @endsection
