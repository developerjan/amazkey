
{!! Form::open(array('rout' => 'queries.search', 'class'=>'form navbar-form navbar-right searchform')) !!}
{!! Form::text('search', null,
                       array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Search for a tutorial...')) !!}
{!! Form::submit('Search',
                           array('class'=>'btn btn-default')) !!}
{!! Form::close() !!}
@if (count($articles) === 0)
    ... html showing no articles found
@elseif (count($articles) >= 1)
    ... print out results
    @foreach($articles as $article)
        print article
    @endforeach
@endif