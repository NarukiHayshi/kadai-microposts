
   
        @if(Auth::user()->is_favorite($micropost->id))
            <div class="col-sm-4">
            {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id],  'method' => 'delete']) !!}
                {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-block"]) !!}
            {!! Form::close() !!}
            </div>
        @else
            <div class="col-sm-4">
            {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
                {!! Form::submit('Favorite', ['class' => "btn btn-default btn-block"]) !!}
            {!! Form::close() !!}
            </div>
        @endif
    
