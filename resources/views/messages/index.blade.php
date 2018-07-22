@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>
    
    @if (count($messages) > 0)
        <table class="table table-striped">
            <tread>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </tread>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>
                        <td>{{ $message->title }}</td>
                        <td width="200">{{ $message->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('messages.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) . '<br><br>' !!}

    {{ '<p style="color: red;">htmlentities 関数に通した場合</p>' }}
    {!! '<p style="color: red;">htmlentities 関数に通さなかった場合</p>' !!}

@endsection