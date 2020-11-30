@extends("layout.layout")
@section("content")
    <div class="container">
        <form method="post" action="{{route('post_register')}}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
