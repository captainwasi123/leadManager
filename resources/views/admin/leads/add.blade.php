@extends('admin.includes.master')
@section('title', 'Add Lead')
@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Column -->
         <div class="col-lg-4 col-md-6">
            <div class="card card-main">
                <div class="card-body main-panel">
                    <!-- Row -->

                    <div class="row">
                        <div class="col-3 p-l-0 p-r-0" align="center">
                            <img src="{{URL::to('/public/assets/')}}/images/icon.png" width="70px">
                        </div>
                        <div class="col-9">
                            <div class="sec-1">
                                <h6>Total Leads</h6>
                                <h2>{{$total_leads}}</h2> 
                            </div>
                                                                   
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-main">
                <div class="card-body main-panel">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-3 p-l-0 p-r-0" align="center">
                            <img src="{{URL::to('/public/assets/')}}/images/icon.png" width="70px">
                        </div>
                        <div class="col-9">
                            <div class="sec-1">
                                <h6>Total Converted Leads</h6>
                                <h2>0</h2> 
                            </div>
                                                                   
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-main">
                <div class="card-body main-panel">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-3 p-l-0 p-r-0" align="center">
                            <img src="{{URL::to('/public/assets/')}}/images/icon.png" width="70px">
                        </div>
                        <div class="col-9">
                            <div class="sec-1">
                                <h6>Total Pending Leeds</h6>
                                <h2>0</h2> 
                            </div>
                                                                   
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>             
    </div>
 
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" class="form-horizontal">
                        @csrf
                        <h3 class="add-lead-head">Lead Information</h3> 
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="form-body">

                                                               
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Full Name *</label>
                                        <div class="col-md-12">                                                        
                                            <input type="text" class="form-control" name="fullname" required>
                                        </div>
                                    </div>                                                
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Email *</label>
                                        <div class="col-md-12">                                                        
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                    </div>                                                
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Company Name</label>
                                        <div class="col-md-12">                                                        
                                            <input type="text" class="form-control" name="company">
                                        </div>
                                    </div>                                                
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Business Email</label>
                                        <div class="col-md-12">                                                        
                                            <input type="email" class="form-control" name="business_email">
                                        </div>
                                    </div>                                                
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Designation</label>
                                        <div class="col-md-12">                                                        
                                            <input type="text" class="form-control" name="designation">
                                        </div>
                                    </div>                                                
                                </div> 
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">City *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="city" required>
                                        </div>
                                    </div>                                                
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Country *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="country" required>
                                        </div>
                                    </div>                                                
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Mobile No *</label>
                                        <div class="col-md-12">                                                        
                                            <input type="number" class="form-control" name="mobile" required>
                                        </div>
                                    </div>                                                
                                </div> 
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Source *</label>
                                        <div class="col-md-12">
                                            <select class="form-control custom-select" name="source" required>
                                                <option value="">Select</option>
                                                @foreach($source as $val)
                                                    <option value="{{$val->id}}">{{$val->source}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>                                                
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Profile Url</label>
                                        <div class="col-md-12">                                                        
                                            <input type="text" class="form-control" name="profile_url">
                                        </div>
                                    </div>                                                
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Website Urls</label>
                                        <div class="col-md-12">                                                        
                                            <input type="text" class="form-control" name="website_url">
                                        </div>
                                    </div>                                                
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Phone No</label>
                                        <div class="col-md-12">                                                        
                                            <input type="number" class="form-control" name="phone">
                                        </div>
                                    </div>                                                
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control custom-select" name="description" rows="4"></textarea> 
                                        </div>
                                    </div>                                                
                                </div>                                                                                      
                            </div>                                        
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-offset-3 text-center col-md-12">
                                            <button type="submit" class="btn btn-success search-submit" style="background:#00d664;">Update Record</button> 
                                            <button type="submit" class="btn btn-success search-submit">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
@section('addScript')


@endsection