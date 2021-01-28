<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">Upload Excel to Database</div>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">X</a>
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
        @endif
        @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <strong>{{ $message }}</strong>
        </div>
        @endif

        <div class="card-body">
          <form action="{{ url('import-excel') }}" method="POST" name="importform" enctype="multipart/form-data">
            @csrf
            <input type="file" name="import_file" class="form-control">
            <br>
            <button class="btn btn-success">Import Campus File</button>
          </form>
          {{-- <form action="{{ url('import-excel-1') }}" method="POST" name="importform" enctype="multipart/form-data">
            @csrf
            <input type="file" name="import_file_1" class="form-control">
            <br>
            <button class="btn btn-success">Import Faculty File</button>
          </form> --}}
          {{-- <form action="{{ url('import-excel-2') }}" method="POST" name="importform" enctype="multipart/form-data">
            @csrf
            <input type="file" name="import_file_2" class="form-control">
            <br>
            <button class="btn btn-success">Import Program File</button>
          </form> --}}
        </div>
        </div>
    
    
        <div class="panel panel-default mt-4">
          <div class="panel-heading"><h3 class="panel-title">Campus Data</h3></div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Program ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Category ID</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($program as $c)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->program_id }}</td>
                    <td>{{ $c->code }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->category_id }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>