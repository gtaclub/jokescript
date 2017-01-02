@extends('layouts.admin')

@section('content')
    <div class="content">
        <h1>Jokes</h1>
    <section class="hero is-small">
        <table class="table">
            <thead>
            <tr>
                <th>Category</th>
                <th>Jokes</th>
                <th>Status</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($jokes as $joke)
            <tr>
                @foreach($joke->category()->get() as $cat)
                    <td>{{$cat->category}}</td>
                @endforeach
                <td>{{$joke->content}}</td>
                    @if($joke->status === 0)
                        <td>Pending</td>
                        <td class="is-icon">
                            <a class="button is-success" href="{{ URL::action('admin\DashboardController@approve', ['id' => $joke->id]) }}">
                                <span>Approve</span>
                            </a>
                        </td>
                    @else
                        <td>Approved</td>
                        <td></td>
                    @endif
                    <td class="is-icon">
                        {!! Form::open(['route' => ['delete.destroy',$joke->id], 'method'=>'DELETE']) !!}
                        {!! Form::button('<p class="control">Edit</p>',['class'=>'button is-info','type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td class="is-icon">
                        {!! Form::open(['route' => ['delete.destroy',$joke->id], 'method'=>'DELETE']) !!}
                        {!! Form::button('<p class="control">Delete</p>',['class'=>'button is-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </section>
    </div>

    {{ $jokes->links() }}
@endsection
