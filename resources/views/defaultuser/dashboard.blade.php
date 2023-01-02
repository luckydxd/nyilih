@extends('layoutadmin.main')
@section('content')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Starter Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Empty Page</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->    
                    <!-- CONTENT AREA -->
                    <div class="row layout-top-spacing">
                        
                        <div class="col-12">
                            <div class="alert alert-arrow-right alert-icon-right alert-light-warning alert-dismissible fade show mb-4" role="alert">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                                        class="rounded-circle img-fluid" style="width: 150px;">
                                      <h5 class="my-3">John Smith</h5>
                                      <p class="text-muted mb-1">User</p>
                                      <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                                      <div class="d-flex justify-content-center mb-2">
                                        <button type="button" class="btn btn-danger rounded-3 btn-lg">Simpan</button>
                                        <button type="button" class="btn btn-outline-dark ms-1 text-danger rounded-3">Save</button>
                                      </div>
                                    </div>
                                  </div>
                            
                                  <div class="col-lg-8">
                                    <div class="card mb-4">
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                          </div>
                                          <div class="col-sm-9">
                                            <p class="text-muted mb-0">Johnatan Smith</p>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                          <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                          </div>
                                          <div class="col-sm-9">
                                            <p class="text-muted mb-0">example@example.com</p>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                          <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                          </div>
                                          <div class="col-sm-9">
                                            <p class="text-muted mb-0">(097) 234-5678</p>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                          <div class="col-sm-3">
                                            <p class="mb-0">Password</p>
                                          </div>
                                          <div class="col-sm-9">
                                            <p class="text-muted mb-0">****************</p>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                          <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                          </div>
                                          <div class="col-sm-9">
                                            <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    
                            </div>
                        </div>  
                        
                        <div class="col-md-12">
                        </div>

                    </div>
                    <!-- CONTENT AREA -->
                </div>
            </div>

    @endsection