@extends('admin.layouts.master')

@section('page-title')
Edit contractor
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Edit contractor</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edir contractor</li>
        </ol>
        </div>
    </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Contractor</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label>First Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Firstname">
                            </div>
                            <div class="form-group">
                                <label>Last Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Lastname">
                            </div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label>Create Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <input type="number" class="form-control" placeholder="">
                            </div>

                            <div class="dropdown-divider"></div>
                            <h4>Business Informatiom</h4>
                            <div class="form-group">
                                <label>Company's Legal Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Company Name">
                            </div>
                            <div class="form-group">
                                <label>Business Address:</label>
                                <input type="text" class="form-control" placeholder="Address Line 1"><br>
                                <input type="text" class="form-control" placeholder="Address Line 2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label></label>
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label></label>
                                            <select class="form-control" disabled="">
                                                <option>State</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" placeholder="35007">
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <h4>Tax Informatiom</h4>
                            <p>Enter your social security number</p>
                            <div class="form-group">
                                <label>Enter Identification Number (EIN):</label>
                                <input type="number" class="form-control" placeholder="12-1234567">
                            </div>
                            <h4>Bank Informatiom</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <div class="form-group">
                                <label>Account Number</label>
                                <input type="number" class="form-control" placeholder="000-5566-000">
                            </div>
                            <div class="form-group">
                                <label>Confirm Account Number</label>
                                <input type="number" class="form-control" placeholder="000-5566-000">
                            </div>
                            <div class="form-group">
                                <label>Routing Number</label>
                                <input type="number" class="form-control" placeholder="09876543">
                            </div>
                            <div class="form-group">
                                <label>Confirm Routing Number</label>
                                <input type="number" class="form-control" placeholder="09876543">
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
