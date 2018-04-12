@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                    
            <div class="panel-heading" style="font-size:17px; font-weight:bold; font-family:Helvetica Neue; background-color:#282929; color:#ffff">
                        <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
                        | {{ $post->category->name }}
                        
                        <div class="pull-right" style="padding-left:5px">
                            <form action="{{ route('post.destroy', $post) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="byn btn-xs btn-danger">Delete</button>
                            </form>
                        </div>
                        <div class="pull-right" style="padding-left:5px">
                            <a href="{{ route('post.edit', $post) }}" class="btn btn-xs btn-default">Edit</a>
                        </div>

                        <h5> Posted by <a href=""> {{$post->user->name}} </a> on {{ $post->created_at->format('l, d F Y [H:i]')}} </h5>

                    </div>
                    <div class="panel-body">
                        
                        <p style="font-size:20px; font-family:Verdana"> {{ $post->content }} </p>
                    </div>

                    <div class="panel-footer">
                    <div class="panel panel-default">
                    <div class="panel-heading" style="font-weight:bold; background-color:#C0CCF8">Comments</div>
                    
                    @foreach($post->comments()->get() as $comment)
                    <div class="panel-body" style="font-family:cursive">
                        by <a href="" style="font-size:15px; font-weight:bold">{{ $comment->user->name }} </a> || {{ $comment->created_at->diffForHumans() }}
                       
                         <div class="pull-right">
                            <form action="{{ route('post.comment.destroy', $post) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="byn btn-xs btn-danger">Delete</button>
                            </form>
                        </div>
                        <p style="font-size:15px"> {{ $comment->message }} </p>
                    </div>
                    @endforeach

                            <form action="{{ route('post.comment.store', $post) }}" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                                <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Write your comment here"></textarea>
                                <input type="submit" value="Submit" class="byn btn-s btn-primary" style="margin:7px">
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div> 

@endsection