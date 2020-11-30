@extends("layout.layout")
@section("content")
    <body class="antialiased container">
    <div class="container">
        @if(count($questions) > 0)
            <h1 class="text-primary">Here you can see questions</h1>
            <div class="row row-cols-1 row-cols-md-2">
                @foreach($questions as $question)
                    <div class="col mb-4 ">
                        <div class="card text-white bg-primary mb-4 ">
                            <div class="p-6">
                                <div class="info">
                                    <div class="flex items-center">
                                        <h2>{{$question->name}}</h2>
                                    </div>
                                    @foreach($question -> answers as $answer)
                                        <div>
                                            {{$answer->name}}
                                            @can('is_student')
                                                :
                                                @if($answer->is_correct == 1)
                                                    <td>True</td>
                                                @else
                                                    <td></td>
                                                @endif
                                            @endcan
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No questions found</p>
        @endif
    </div>
    </body>
@endsection
