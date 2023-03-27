@extends('vendor.include.master')

@section('vendor')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="p-5">
                    <div class="text-start">
                        <img src="{{asset('backend')}}/assets/images/logo-img.png" width="180" alt="">
                    </div>
                    <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                    <p class="text-muted">We received your reset password request. Please enter your new password!</p>

                <form action="{{route('vendor.updatepassword')}}" method="post">
                        @csrf

                    
                    <div class="mb-3 mt-5">
                        <label class="form-label">Old Password</label>
                        <input  name="oldpass" type="text" class="form-control" placeholder="Enter new password" />
                        @error('oldpass')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 mt-5">
                        <label class="form-label">New Password</label>
                        <input name="newpass"  type="text" class="form-control" placeholder="Enter new password" />
                        @error('newpass')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input name="cpass" type="text" class="form-control" placeholder="Confirm password" />
                        @error('cpass')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button  type="submit"  class="btn btn-primary">Change Password</button> <a class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>


@endsection