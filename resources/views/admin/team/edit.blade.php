@extends('layouts.backend')
@section('content')
<!-- Hero -->
<!-- END Hero -->

<!-- Page Content -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title center">Files</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
                    <form class="space-y-3" action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label class="col-sm-3 col-form-label" for="title">Select Prize or regulation <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select name="type" id="phase" data-required="1" class="form-control-alt form-control">
                                    <option value="" selected disabled>Select Type</option>
                                    <option value="prize" > Prize</option>
                                    <option value="regulation" > Regulations</option>
                                </select>
                                @if($errors->has('type'))
                                <span class="text-danger">{{ $errors->first('type') }} </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label" for="image">Files<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" accept="application/pdf" class="form-control-alt form-control datetimepicker" id="participants" name="file" placeholder="Usable date start period" value="{{ old('file')? old('file'): '' }}" required>
                                @if($errors->has('file'))
                                <span class="text-danger">{{ $errors->first('file') }} </span>
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
<!-- END Page Content -->
@endsection
