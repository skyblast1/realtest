@extends('layouts.app')

@section('content')
<div class="row mt-5">
    @foreach($articles as $article)
        <div class="col-4 pb-3">
            <div class="card">
                <img src="{{$article->img}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->getBodyWithLimit()}}</p>
                    <p>{{$article->createdAtForHumans()}}</p>
                    <a href="{{route('articles.one', $article->slug)}}" class="btn btn-primary">Подробнее</a>
                    <div class="mt-3">
                        <span class="badge bg-primary"><i class="far fa-thumbs-up">{{$article->states->likes}}</i></span>
                        <span class="badge bg-primary"><i class="far fa-eye">{{$article->states->views}}</i></span>
                    </div>
                    <div class="mt-4">
                        Теги:
                        @foreach($article->tags as $tag)
                            <a href="{{route('articles.tag', $tag)}}" class="badge bg-danger">{{$tag->label}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="mx-auto" style="width: max-content">{{$articles->links()}}</div>
</div>
@endsection
