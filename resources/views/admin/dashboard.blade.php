@extends('layouts.admin')

@section('content')
    <section class="hero is-small">
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                     {{ config('app.name', 'Laravel') }} Dashboard
                </h1>
                <h2 class="subtitle">
                    A simple control for this script
                </h2>
            </div>
        </div>

        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
            <nav class="level">
                <div class="level-item has-text-centered">
                    <p class="heading">Total Jokes</p>
                    <p class="title">{{$jokes->count()}}</p>
                </div>
                <div class="level-item has-text-centered">
                    <p class="heading">Total Categories</p>
                    <p class="title">{{$categories->count()}}</p>
                </div>
                <div class="level-item has-text-centered">
                    <p class="heading">Unreviewed Jokes</p>
                    <p class="title">{{$jokes->where('status','=','0')->count()}}</p>
                </div>
                <div class="level-item has-text-centered">
                    <p class="heading">Inactive Categories</p>
                    <p class="title">{{$categories->where('status','=','0')->count()}}</p>
                </div>
            </nav>
        </div>
    </section>
    <section class="section">

        <div class="column is-half-desktop is-full-mobile">
            <section class="panel">
                <p class="panel-heading">
                    Jokes to Review
                </p>
                <div class="panel-block">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th>Joke</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($jokes->where('status','=',0)->count() === 0)
                            <tr>
                                    <td>No jokes to review</td>
                            </tr>
                        @else
                        @foreach($jokes as $joke)
                            @if($joke->status === 0)
                            <tr>
                                @foreach($joke->category()->get() as $cat)
                                <td>{{$cat->category}}</td>
                                @endforeach
                                <td>{{$joke->content}}</td>
                                <td class="is-icon">
                                    <a class="button is-success" href="{{ URL::action('admin\DashboardController@approve', ['id' => $joke->id]) }}">
                                      <span class="icon">
                                        <i class="fa fa-check"></i>
                                      </span>
                                        <span>Approve</span>
                                    </a>
                                </td>
                                <td class="is-icon">
                                    {!! Form::open(['route' => ['delete.destroy',$joke->id], 'method'=>'DELETE']) !!}
                                    {!! Form::button('<p class="control">Delete</p>',['class'=>'button is-danger','type'=>'submit']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

    </section>
@endsection
