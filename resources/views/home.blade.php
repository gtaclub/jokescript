@extends('layouts.app')

@section('content')
    @foreach($jokes as $joke)
        @if($joke->status === 1)
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div class="content">
                            <h1><i class="fa fa-quote-left fa-fw" aria-hidden="true"></i> {{$joke->content}} <i class="fa fa-quote-right fa-fw" aria-hidden="true"></i></h1>
                        </p>
                    </div>
                    <nav class="level">
                        <div class="level-left">
                            <a class="level-item">
                                <span class="icon is-medium"><i class="fa fa-facebook-official"></i></span>
                            </a>
                            <a class="level-item">
                                <span class="icon is-medium"><i class="fa fa-twitter"></i></span>
                            </a>
                        </div>
                    </nav>
                </div>
            </article>
        </div>
        @endif
    @endforeach

    {{ $jokes->links() }}

    <div id="modal" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Submit a Joke</p>
                <button class="delete"></button>
            </header>
            <section class="modal-card-body">
                <div class="content">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/submit') }}">
                        {{ csrf_field() }}
                        <label class="label">Category</label>
                    <p class="control">
                      <span class="select">
                        <select name="category">
                            @foreach($category as $cat)
                                <option value="{{$cat->id}}">{{$cat->category}}</option>
                            @endforeach
                        </select>
                      </span>
                    </p>
                    <label class="label">Joke Content</label>
                    <p class="control">
                        <textarea name="content" class="textarea" maxlength="255" placeholder="Contribute a Joke"></textarea>
                    </p>
                    <span class="countdown"></span>
                </div>
            </section>
            <footer class="modal-card-foot">
                <button type="submit" class="button is-success">Submit</button>
                <a class="button">Cancel</a>
                </form>
            </footer>
        </div>
    </div>


@endsection
