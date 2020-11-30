@extends("layout.layout")
@section("content")
    <body>
    <h1>hi create new post</h1>
    <div class="container">
        <form method="post" enctype="multipart/form-data" action="{{route('questions.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Question Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                           placeholder="name" name="name" value="{{old('name')}}"/>
                    @error('name')
                    <p class="text-danger">{{$errors->first('name')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Answer 1</label>
                    <input type="text" class="form-control {{$errors->first('title') ? 'is-invalid' : ''}}"
                           placeholder="answer_1_name" name="answer_1_name"/>
                    @error('answer_1_name')
                    <p class="text-danger">{{$errors->first('answer_1_name')}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Answer 2</label>
                    <input type="text" class="form-control {{$errors->first('title') ? 'is-invalid' : ''}}"
                           placeholder="answer_2_name" name="answer_2_name"/>
                    @error('answer_2_name')
                    <p class="text-danger">{{$errors->first('answer_2_name')}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Answer 3</label>
                    <input type="text" class="form-control {{$errors->first('title') ? 'is-invalid' : ''}}"
                           placeholder="answer_3_name" name="answer_3_name"/>
                    @error('answer_3_name')
                    <p class="text-danger">{{$errors->first('answer_3_name')}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Answer 4</label>
                    <input type="text" class="form-control {{$errors->first('title') ? 'is-invalid' : ''}}"
                           placeholder="answer_4_name" name="answer_4_name"/>
                    @error('answer_4_name')
                    <p class="text-danger">{{$errors->first('answer_4_name')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="is_true">Answer 4 correct</label>
                    <select name="is_true">
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                    </select>
                    @error('is_true')
                    <p class="text-danger">{{$errors->first('is_true')}}</p>
                    @enderror

                </div>
                <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>

    </body>
@endsection
