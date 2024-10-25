@extends('template')
@section('isi')
    
<body style="background: lightgray;">
    <div class=" container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class=" card-header" style="font-family: 'Times New Roman';">UNITED STATES ARMY RANGER</div>
                    <div class="card-body">
                        <table class=" table table-striped">
                            <thead class=" table-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Role</th>
                                    <th></th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($usa as $us)
                                    <tr>
                                        <td>{{ $us->ranger_id }}</td>
                                        <td>{{ $us->name }}</td>
                                        <td>{{ $us->gender }}</td>
                                        <td>{{ $us->rank }}</td>
                                        <td>{{ $us->role }}</td>
                                        <td></td>
                                        <td>

                                        </td>
                                    </tr>
                                @empty
                                    <div class=" alert alert-danger">
                                        Data Empty
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection