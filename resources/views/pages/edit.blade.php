@extends ('app')

@section ('content')

    {!! FormBuilder::create('App\Forms\Content\Page',  [
                    'route' => ['pages.update', $page->slug],
                    'method' => 'PATCH',
                    'model' => $page
                    ])->renderForm() !!}
@stop
