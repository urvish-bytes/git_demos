@extends('layouts.app')
@section('content')
<div class="container"> 
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->desctription }}</td>
        </tr>
        @endforeach
    </table>
    {!! with(new App\Pagination\HDPresenter($posts))->render(); !!}

</div>
@endsection