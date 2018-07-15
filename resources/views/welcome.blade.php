
        @extends('layouts.app')
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto"> 
                       <h1 class="display-2 text-center">Useful Links</h1>
                       @foreach ($links as $link)
                            <ul class="list-group">
                                <li class = "list-group-item">{{$link->title}}</li> 
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>    
        @endsection
   
