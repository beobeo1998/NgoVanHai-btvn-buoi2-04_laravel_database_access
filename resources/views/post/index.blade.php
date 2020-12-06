<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="col-lg-4 col-sm-4">
        <form action="" method="get">

            <div class="col-md-4 mb-3">
                <label for="name"> name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder=" name" value="{{ Request::get('name') }}" >
                <div class="valid-tooltip">
                  Looks good!
                </div>
            </div>
              <div class="col-md-4 mb-3">
                <label for="content">content</label>
                <input type="text" name="content" class="form-control" id="content" placeholder="content" value="{{ Request::get('content') }}" >
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="form-group row">
                {{--  <label for="example-date-input" class="col-2 col-form-label">Date</label>  --}}
                <div class="col-10">
                  <input class="form-control" name="date" type="date" value="{{ Request::get('date')  }}" id="example-date-input">
                </div>
            </div>
              <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
    <div class="col-lg-4 col-sm-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">content</th>
                    <th scope="col">title</th>
                    <th scope="col">created_at</th>
                </tr>
            </thead>
            <tbody>
            @if($posts)
            @php
                $i=1;
            @endphp
                @foreach ($posts as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->content }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->created_at }}</td>
                </tr>
                @endforeach
            @endif
            </tbody>
          </table>
    </div>
</body>
</html>
