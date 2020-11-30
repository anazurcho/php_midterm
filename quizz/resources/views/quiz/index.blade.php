@extends("layout.layout")
@section("content")
    <body class="antialiased container">
    <div class="container">
        @if(count($questions) > 0)
        <h1 class="text-primary">Here you can see questions</h1>
        <form method="post" enctype="multipart/form-data" action="{{route('quiz.save')}}">
        <div class="row row-cols-1 row-cols-md-2">
            @foreach($questions as $question)
                <div class="col mb-4 ">
                    <div class="card text-white bg-primary mb-4 ">
                        <div class="p-6">
                            <div class="info">
                                <div class="flex items-center">
                                    <h2>{{$question->name}}</h2>
                                </div>
                                <div>
                                    answers:
                                    @foreach($question -> answers as $answer)
                                        <div>
                                            {{$answer->name}}
                                        </div>
                                    @endforeach
                                    <select name="{{$question->id}}">
                                        <option value="0">Select Answer</option>
                                        @foreach($question->answers as $answer)
                                            <option value="{{$answer->id}}">{{$answer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
        </div>
        </form>
        @else
            <p>No questions found</p>
        @endif
    </div>
    </body>
@endsection
