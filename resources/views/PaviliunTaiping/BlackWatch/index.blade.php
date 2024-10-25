@extends('template')
@extends('sidebar')
@section('isi')

    <body style="background: lightgray;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class=" card-header">BLACKWATCH SYSTEM</div>
                        <div class="card-body">

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#itemModal">
                                Add Item
                            </button>

                            <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="itemModalLabel">Add Item</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('blackwatch.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf

                                                <div class=" form-group">
                                                    <label class=" font-weight-bold">Blackwatch ID</label>
                                                    <input type="text" name="blackwatch_id" class=" form-control @error('blackwatch_id') is-invalid @enderror" value="{{old('blackwatch_id')}}">
                                                </div>

                                                      <div class=" form-group">
                                                    <label class=" font-weight-bold">Name</label>
                                                    <input type="text" name="name" class=" form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                                                </div>

                                                <div class=" form-group">
                                                    <label class=" font-weight-bold">Initial</label>
                                                    <input type="text" name="initial" class=" form-control @error('initial') is-invalid @enderror" value="{{old('initial')}}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">Gender</label>
                                                    <select name="gender" id="gender" class=" form-control @error('gender') is-invalid  @enderror" value="{{old('gender')}}">
                                                        <option value="..."></option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>

                                                <div class=" form-group">
                                                    <label class=" font-weight-bold">Rank</label>
                                                    <select name="rank" class=" form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}">
                                                        <option value="..."></option>
                                                        <option value="General">Gen</option>
                                                        <option value="Liutenant General">LTG</option>
                                                        <option value="Major General">MG</option>
                                                        <option value="Brigadier General">BG</option>
                                                        <option value="Colonel">COL</option>
                                                        <option value="Liutenant Colonel">LTC</option>
                                                        <option value="Major">MAJ</option>
                                                        <option value="Captain">CPT</option>
                                                        <option value="First Liutenant">1LT</option>
                                                        <option value="Second Liutenant">2LT</option>
                                                        <option value="Command Sergeant Major">CSM</option>
                                                        <option value="Sergeant Major">SGM</option>
                                                        <option value="First Sergeant">1SG</option>
                                                        <option value="Master Sergeant">MSG</option>
                                                         <option value="Sergeant First Class">SFC</option>
                                                        <option value="Staff Sergeant">SSG</option>
                                                        <option value="Sergeant">SGT</option>
                                                        <option value="Corporal">CPL</option>
                                                        <option value="Specialist">SPC</option>
                                                        <option value="Private First Class">PFC</option>
                                                        <option value="Private Second Class">PV2</option>
                                                        <option value="Private">PVT</option>
                                                        <option value=""></option>
                                                    </select>
                                                </div>

                                                <div class=" form-group">
                                                    <label class=" font-weight-bold">Role</label>
                                                    <input type="text" name="role" class=" form-control @error('role') is-invalid @enderror" value="{{old('role')}}">
                                                </div>

                                                <div class=" form-group">
                                                    <label class=" font-weight-bold">Status</label>
                                                    <select name="status" class="form-control @error('status') is-invalid @enderror" id="status" value="{{ old('status') }}">
                                                        <option value="..."></option>
                                                        <option value="Active">Active</option>
                                                        <option value="Retired">Retired</option>
                                                        <option value="K.I.A">Killed In Action</option>
                                                        <option value="Died While in Duty">Died While in Duty</option>
                                                        <option value="D.O.W">Died of Wounds</option>
                                                        <option value="M.I.A">Missing in Action</option>
                                                        <option value="P.O.W">Prisoned of War</option>
                                                        <option value="Detained/Captured">Detained/Captured</option>
                                                        <option value="Deserter">Deserter</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <table class=" table table-bordered">
                                <thead class=" table-dark">
                                    <tr>
                                        <th></th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Codename</th>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Status</th>
                                        <th></th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blackwatch as $item)
                                        <tr>
                                        <td> <img src="{{ asset('storage/blackwatch/'.$item->image) }}" width="180" height="180" alt="">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editItemModal2{{ $item->id }}">
                                                Edit
                                            </button>

                                            <div class="modal fade" id="editItemModal2{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editItemModalLabel2{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editItemModalLabel2{{ $item->id }}">Edit Photo</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="{{ route('image.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label for="image2{{ $item->id }}">Image</label>
                                                                    <input type="file" class="form-control" id="image{{ $item->image }}" name="image">
                                                                    <img src="{{asset('storage/blackwatch/'.$item->image)}}" width="200">
                                                                </div>
                                                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $item->blackwatch_id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->initial }}</td>
                                        <td>{{ $item->rank }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ route('blackwatch.show', $item->id) }}" class="btn btn-primary">Details</a>
                                        </td>
                                        <td>
                                            <form onclick="return confirm('Apakah Anda Yakin?')" action="{{ route('blackwatch.destroy', $item->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('blackwatch.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>


                                        </tr>



                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
