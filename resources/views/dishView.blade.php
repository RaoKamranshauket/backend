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
@php
    $index=0;
@endphp
<body>
  <div class="jumbotron text-center">
    <h1 class="display-4 center bg-light">Back End Task</h1>
      </div>
  <div id="tblDiv" class="container border mt-3">
    <h3 >List all dishes with a price of one thousand and above</h3>
  <table id="example" class="display table-bordered" style="width:100%">
    <thead class="text-center" style="background-color: #333;
    color: #fff;">
        <tr >
            <th>#</th>
            <th>Dish Name</th>
            <th style="width: 100px">Dish Price</th>
            <th>Dish Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dishPrice as $dish)
        <tr>
            <td>{{ $index++ }}</td>
            <td>{{ $dish->dishName }}</td>
            <td style="width: 50px">{{ $dish->dishUnitPrice }}</td>
            <td>{{ $dish->dishDescription}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<script>
    $(document).ready(function() {
    $('#example').DataTable({

        // hide the "Show N entries" label
        "language": {
            "lengthMenu": "_MENU_",
        },
        // hide the search box
        searching: false
    });
} );

</script>
</body>


</html>
