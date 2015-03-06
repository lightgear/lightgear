{!! Form::model($page, ['route' => ['pages.destroy', $page->slug], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete (i18n)') !!}
{!! Form::close() !!}
