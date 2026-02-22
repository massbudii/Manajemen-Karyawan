@extends('app')
@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card-box">
                <h4 class="header-title">Basic Form</h4>
                <p class="sub-header">
                    Parsley is a javascript form validation library. It helps you provide your users with feedback on their
                    form submission before sending it to your server.
                </p>

                <form class="parsley-examples" action="#">
                    <div class="form-group">
                        <label for="userName">User Name<span class="text-danger">*</span></label>
                        <input type="text" name="nick" parsley-trigger="change" required placeholder="Enter user name"
                            class="form-control" id="userName">
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                        <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email"
                            class="form-control" id="emailAddress">
                    </div>
                    <div class="form-group">
                        <label for="pass1">Password<span class="text-danger">*</span></label>
                        <input id="pass1" type="password" placeholder="Password" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                        <input data-parsley-equalto="#pass1" type="password" required placeholder="Password"
                            class="form-control" id="passWord2">
                    </div>
                    <div class="form-group">
                        <div class="checkbox checkbox-purple">
                            <input id="checkbox6a" type="checkbox">
                            <label for="checkbox6a">
                                Remember me
                            </label>
                        </div>

                    </div>

                    <div class="form-group text-right mb-0">
                        <button class="btn btn-gradient waves-effect waves-light" type="submit">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-light waves-effect ml-1">
                            Cancel
                        </button>
                    </div>

                </form>
            </div> <!-- end card-box -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card-box">
                <h4 class="header-title">Horizontal Form</h4>
                <p class="sub-header">
                    Parsley is a javascript form validation library. It helps you provide your users with feedback on their
                    form submission before sending it to your server.
                </p>

                <form role="form" class="parsley-examples">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-4 col-form-label">Email<span
                                class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="email" required parsley-type="email" class="form-control" id="inputEmail3"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hori-pass1" class="col-4 col-form-label">Password<span
                                class="text-danger">*</span></label>
                        <div class="col-7">
                            <input id="hori-pass1" type="password" placeholder="Password" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hori-pass2" class="col-4 col-form-label">Confirm Password
                            <span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input data-parsley-equalto="#hori-pass1" type="password" required placeholder="Password"
                                class="form-control" id="hori-pass2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="webSite" class="col-4 col-form-label">Web Site<span
                                class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="url" required parsley-type="url" class="form-control" id="webSite"
                                placeholder="URL">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-8 offset-4">
                            <div class="checkbox checkbox-purple">
                                <input id="checkbox6" type="checkbox">
                                <label for="checkbox6">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-8 offset-4">
                            <button type="submit" class="btn btn-gradient waves-effect waves-light">
                                Register
                            </button>
                            <button type="reset" class="btn btn-light waves-effect ml-1">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div> <!-- end col -->
    </div>
@endsection
