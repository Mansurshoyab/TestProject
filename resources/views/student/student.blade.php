<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album example · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">

  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>


<body>

    <div class="container">
        <a class="btn btn-success mt-5" href="{{ route('address') }}">Address</a>

        <a class="btn btn-success mt-5" href="{{ url('/admin') }}">Admin</a>
        <form action="{{ route('student.store') }}" method="POST" class="mt-5">
            @csrf
            {{-- @dd($students); --}}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
                <label for="">Thana</label>
                <select name="thana_id" id="" class="form-control">
                    @foreach ($addresses as $item)
                            <option value="{{ $item->id }}">{{ $item->thana}}</option>
                    @endforeach
                </select>
                <label for="">District</label>
                <select name="district_id" id="" class="form-control">
                    @foreach ($addresses as $item)
                        <option value="{{ $item->id }}">{{ $item->district }}</option>
                    @endforeach
                </select>
                <button type="submit">submit</button>
            </div>
        </form>

        <div class="body">
            <div class="mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Thana</th>
                            <th>District</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                         <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->address->thana }}</td>
                                <td>{{ $item->address->district }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>