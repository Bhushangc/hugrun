@extends('admin.layout')

@section('title', 'Contact')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


@section('content')

<table id="table" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <th>{{$contact->id}}</th>
                <th>{{$contact->name}}</th>
                <th>{{$contact->email}}</th>
                <th>{{$contact->phone}}</th>
                <th>{{$contact->subject}}</th>
                <th>{{$contact->message}}</th>    
            </tr>
        @endforeach 
    </tbody>
</table>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            "paging": true,       // Enable pagination
            "pageLength": 10,     // Set the default number of rows per page
            "lengthMenu": [5, 10, 25, 50, 100], // Options for number of rows per page
            "searching": true,    // Enable search functionality
            "ordering": true      // Enable column ordering
        });
    });
</script>

