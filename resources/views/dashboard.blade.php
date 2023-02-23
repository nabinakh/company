@extends('layouts.backend')

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
        <div class="flex-grow-1">
          <h1 class="h3 fw-bold mb-2">
            Dashboard
          </h1>
       
        </div>
        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-alt">
            <li class="breadcrumb-item">
              <a class="link-fx" href="javascript:void(0)">App</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
              Dashboard
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <div class="row items-push">
      <div class="col-md-12">
        <div class="block block-rounded h-100 mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Welcome</h3>
          </div>
          <div class="block-content fs-sm text-muted">
            <p>
              Click here to import participants from excel file &nbsp &nbsp
              <a href="{{ route('participant.create')}}" class="btn btn-sm btn-outline-secondary">Import Participants</a> 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Page Content -->
@endsection
