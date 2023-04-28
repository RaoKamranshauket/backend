<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>BackEndTask</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet"  crossorigin="anonymous"> -->
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

  <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
</head>

<body>
  <div class="jumbotron text-center">
    <h1 class="display-4 center bg-light">Back End Task</h1>
      </div>

  <div class="container border w-50 mt-3">
    <form action="{{url('fetch-dishes')}}" method="POST" >
        @csrf
    <div class="form-group  mt-2"  style="margin-left: 70px!important;">
      <label for="">Chef User Name</label>
      <input type="text" class="form-control w-50" name="chefUserName" id="chefUserName" placeholder="Device User Name">
    </div>
    <button type="submit" class="ml-3 btn btn-primary  mt-2" style="margin-left: 70px!important;">Submit</button>
</form>
</div>
  <div id="tblDiv" class="container border mt-3">
  <table id="example" class="display table-bordered" style="width:100%">
    <thead style="background-color: #333;
    color: #fff;">
        <tr >
            <th>Date</th>
            <th>Book On Image</th>
            <th>Time In</th>
            <th>Book on Location</th>
            {{-- <th>Book Off Image Timeout</th>
            <th>Time Out</th>
            <th>Book Off Location</th>
            <th>Total hours</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($dishPrice as $dish)
        <tr>
            <td>{{ $dish->dishCategory }}</td>
            <td>{{ $dish->dishDescription}}</td>
            <td>{{ $dish->dishName }}</td>
            <td>{{ $dish->dishUnitPrice }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

</body>


</html>
