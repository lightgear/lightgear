{!! Form::model($page, ['route' => ['pages.destroy', $page], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete (i18n)') !!}
{!! Form::close() !!}
