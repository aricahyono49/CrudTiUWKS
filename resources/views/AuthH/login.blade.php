@extends('template.template')
@section('title')
Login
@endsection
@section('content')

<div class="row">
    <div class="offset-4 col-4">

        <form class="px-4 py-3">
            <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword1">Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        Remember me
                    </label>
                </div>
            </div>
            <div class="offset-9 ">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
        
    </div>
</div>
@endsection
