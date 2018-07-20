@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>
    
    @if (count($messages) > 0)
        <ul>
            @foreach ($messages as $message)
                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('messages.create', '新規メッセージの投稿') . '<br><br>' !!}

    {{ '<p style="color: red;">htmlentities 関数に通した場合</p>' }}
    {!! '<p style="color: red;">htmlentities 関数に通さなかった場合</p>' !!}

@endsection