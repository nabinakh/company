@extends('layouts.backend')
@section('content')
<!-- Hero -->
<!-- END Hero -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title center">Files</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
                    <form class="space-y-3" action="{{ route('testomonial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label class="col-sm-3 col-form-label" for="image">Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-alt form-control" id="participants" name="name" placeholder="Enter Name" value="{{ old('name')? old('name'): '' }}" required>
                                @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }} </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label" for="image">Designation<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-alt form-control" id="participants" name="designation" placeholder="Enter Designation" value="{{ old('designation')? old('designation'): '' }}" required>
                                @if($errors->has('designation'))
                                <span class="text-danger">{{ $errors->first('designation') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label" for="image">Company<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-alt form-control" id="participants" name="company" placeholder="Enter Company" value="{{ old('company')? old('company'): '' }}" required>
                                @if($errors->has('company'))
                                <span class="text-danger">{{ $errors->first('company') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label" for="image">Description<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control-alt form-control" id="participants" name="description" placeholder="Enter Description" value="{{ old('description')? old('description'): '' }}" required>
                                    </textarea>
                                @if($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }} </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label" for="image">Files<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" accept="image/png, image/jpeg" class="form-control-alt form-control" id="participants" name="image" placeholder="Usable date start period" value="{{ old('image')? old('image'): '' }}" required>
                                @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }} </span>
                                @endif
                            </div>
                            


                        </div>

                        <div class="row">
                            <div class="col-sm-9 ms-auto">
                                <button type="submit" class="btn text-white btn-dark">Submit</button>
                                <button type="reset" class="btn text-white btn-danger">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- END Page Content -->
@endsection
