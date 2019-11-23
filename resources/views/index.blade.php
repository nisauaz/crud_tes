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
                    <a href="/add_book" class="btn btn-primary">Add Book</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Date Published</th>
                      <th>Number of Pages</th>
                      <th>Type of Books</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=1;
                    ?>
                    @foreach($book as $b)
                 
                    <tr>
                        <td><?php echo $i++?></td>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->author }}</td>
                        <td><?php if($b->date_published != null){?>
                        {{ date('d-m-Y', strtotime($b->date_published))}}
                        <?php } 
                        else{

                        }
                        ?>
                        </td>
                        <td>{{ $b->number_ofpages }}</td>
                        <td>{{ $b->type_ofbooks }}</td>
                        <td>
                            <a href="/book/edit/{{ $b->id }}" class="btn btn-warning">Edit</a>
    
                            <a href="/book/delete/{{$b->id }}" onclick="return confirm('Are you sure delete this data?')" class="btn btn-danger">Hapus</a>
                        </td
                       
                    </tr>
                    @endforeach
                
                  </tbody>
                    </table>
                    <br><br>
                    <br/>
                        Pages : {{ $book->currentPage() }} <br/>
                        Data Count : {{ $book->total() }} <br/>
                        Data/Pages : {{ $book->perPage() }} <br/>
                    
                    
                        {{ $book->links() }}
                </div>
            </div>
        </div>
    </body>
</html>