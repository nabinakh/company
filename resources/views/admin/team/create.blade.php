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
                    @if (!empty(@$data))
                    <form class="space-y-3" action="{{route('team.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @else
                        <form class="space-y-3" action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
                            @endif
                            @csrf
                            @csrf
                            <div class="row">
                                <label class="col-sm-3 col-form-label" for="image">Name<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-alt form-control" id="participants" name="name"  value="{{ @$data->name }}" placeholder="Enter Name" value="{{ old('name')? old('name'): '' }}" required>
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }} </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label" for="image">Designation<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-alt form-control" id="participants" name="designation"  value="{{ @$data->designation }}" placeholder="Enter Designation" value="{{ old('designation')? old('designation'): '' }}" required>
                                    @if($errors->has('designation'))
                                    <span class="text-danger">{{ $errors->first('designation') }} </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label" for="image">Description<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control-alt form-control" id="participants" name="description" value="{{ @$data->description }}" placeholder="Enter Description" value="{{ old('description')? old('description'): '' }}" required>
                                    </textarea>
                                    @if($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }} </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label" for="image">Facebook<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control-alt form-control" id="facebook" name="facebook" value="{{ @$data->facebook }}" placeholder="Enter facebook URL" value="{{ old('facebook')? old('facebook'): '' }}">
                                    @if($errors->has('facebook'))
                                    <span class="text-danger">{{ $errors->first('facebook') }} </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label" for="image">LInkedin<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control-alt form-control" id="linkedin" name="linkedin" value="{{ @$data->linkedin }}" placeholder="Enter linkedin URL" value="{{ old('linkedin')? old('linkedin'): '' }}">
                                    @if($errors->has('linkedin'))
                                    <span class="text-danger">{{ $errors->first('linkedin') }} </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label" for="image">Twitter<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control-alt form-control" id="twitter" name="twitter" value="{{ @$data->twitter }}" placeholder="Enter twitter URL" value="{{ old('twitter')? old('twitter'): '' }}">
                                    @if($errors->has('twitter'))
                                    <span class="text-danger">{{ $errors->first('twitter') }} </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label" for="image">Instagram<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control-alt form-control" id="instagram" name="instagram" value="{{ @$data->instagram }}" placeholder="Enter Instagram URL" value="{{ old('instagram')? old('instagram'): '' }}">
                                    @if($errors->has('instagram'))
                                    <span class="text-danger">{{ $errors->first('instagram') }} </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label" for="image">Files<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="file" accept="image/png, image/jpeg" value="{{ @$data->image }}" class="form-control-alt form-control" id="participants" name="image" placeholder="Usable date start period" value="{{ old('image')? old('image'): '' }}" 
                                    @if(empty($data)) required @endif >


@if(@$data->image)
<img src="{{asset('images/'.$data->image)}}" alt="" width="100px" height="100px" class = "mt-2">
                                    @endif

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