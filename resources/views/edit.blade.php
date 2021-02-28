<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
       <h1>
          blog name
       </h1>
         <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/ value="{{$post->title}}">
                <P class="title_error" style="color:red">{{$errors->first('post.title')}}</P>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{$post->body}}</textarea>
                <p class="body_error" style="color:red">{{$errors->first('post.body')}}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
       <div class='back'>
           [<a href="/{{$post->id}}">戻る</a>]
        </div>
    </body>
</html>
