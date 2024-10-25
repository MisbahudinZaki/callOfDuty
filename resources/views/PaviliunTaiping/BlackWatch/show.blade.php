@extends('template')
@section('isi')

<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">BLACKWATCH SYSTEM</div>
                    <div class="card-body">
                       <form action="{{ route('image.update', $blackwatch->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <table border="0" width="100%" align="center">
                            <tbody>

                                <tr>
                                    <td rowspan="1">
                                        <div class=" form-group text-center">
                                            <img src="{{ asset('storage/blackwatch/'.$blackwatch->image) }}" readonly value="{{ old('image', $blackwatch->image) }}" width="180" height="180" alt="" readonly value="">
                                        </div>
                                    </td>
                                    <td colspan="3">
                                        <div class=" form-group">
                                            <label class=" font-weight-bold">Blackwatch ID</label>
                                            <input type="text" name="blackwatch_id" class=" form-control @error('blackwatch_id') is-invalid @enderror" readonly value="{{old('blackwatch_id', $blackwatch->blackwatch_id)}}">
                                        </div>
                                    </td>

                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <div class=" form-group">
                                        <label class=" font-weight-bold">Name</label>
                                        <input type="text" name="name" class=" form-control @error('name') is-invalid @enderror" readonly value="{{old('name', $blackwatch->name)}}">
                                    </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <div class=" form-group">
                                        <label class=" font-weight-bold">Initial</label>
                                        <input type="text" name="initial" class=" form-control @error('initial') is-invalid @enderror" readonly value="{{old('initial', $blackwatch->initial)}}">
                                    </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <div class="form-group">
                                        <label for="name">Gender</label>
                                        <input type="text" name="gender" class=" form-control @error('gender') is-invalid @enderror" readonly value="{{old('gender', $blackwatch->gender)}}">
                                    </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <div class=" form-group">
                                            <label class=" font-weight-bold">Rank</label>
                                            <input type="text" name="rank" class=" form-control @error('rank') is-invalid @enderror" readonly value="{{old('rank', $blackwatch->rank)}}">
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <div class=" form-group">
                                            <label class=" font-weight-bold">Role</label>
                                            <input type="text" name="role" class=" form-control @error('role') is-invalid @enderror" readonly value="{{old('role', $blackwatch->role)}}">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <div class=" form-group">
                                            <label class=" font-weight-bold">Status</label>
                                            <input type="text" name="status" class=" form-control @error('status') is-invalid @enderror" readonly value="{{old('status', $blackwatch->status)}}">
                                        </div>
                                    </td>
                                </tr>

<tr>
    <td>
        <a href="{{ route('blackwatch.index') }}" class="btn btn-danger">Back</a>
    </td>
</tr>

                            </tbody>

                        </table>

                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
