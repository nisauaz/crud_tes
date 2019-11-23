<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Book</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                CRUD BOOK TEST M+-SOFTWARE
                </div>
                <div class="card-body">
                    <a href="/book" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/book/update/{{$book->id}}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required="required" placeholder="Title .." value="{{ $book->title }}">

                            @if($errors->has('title'))
                                <div class="text-danger">
                                    {{ $errors->first('title')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" required="required" placeholder="Author .." value="{{ $book->author }}">

                             @if($errors->has('author'))
                                <div class="text-danger">
                                    {{ $errors->first('author')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Date Published</label>
                            <input type="date" name="dateb" class="form-control" value="{{ $book->date_published }}" >

                             @if($errors->has('dateb'))
                                <div class="text-danger">
                                    {{ $errors->first('dateb')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Number of Pages</label>
                            <input type="number" min="1" name="pages" class="form-control" placeholder="Number of Pages.." value="{{ $book->number_ofpages }}">

                             @if($errors->has('pages'))
                                <div class="text-danger">
                                    {{ $errors->first('pages')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Type of Books</label>
                            <select name="type" class="form-control">
                                <option value="" {{ $book->type_ofbooks == null ? 'selected' : '' }}>Choose type of books</option>
                                <option value="Novel" {{ $book->type_ofbooks == "Novel" ? 'selected' : '' }}>Novel</option>
	                            <option value="Documentation" {{ $book->type_ofbooks == "Documentation" ? 'selected' : '' }}>Documentation</option>
	                            <option value="Comic" {{ $book->type_ofbooks =="Comic" ? 'selected' : '' }}>Comic</option>
	                        </select>
                             @if($errors->has('type'))
                                <div class="text-danger">
                                    {{ $errors->first('type')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>