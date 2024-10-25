@extends('template')
@section('isi')

<body style="background: lightgray;">
    <div class=" container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class=" card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('blackwatch.update', $blackwatch->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class=" form-group">
                                <label class=" font-weight-bold">Blackwatch ID</label>
                                <input type="text" name="blackwatch_id" class=" form-control @error('blackwatch_id') is-invalid @enderror" value="{{old('blackwatch_id', $blackwatch->blackwatch_id)}}">
                            </div>

                            <div class=" form-group">
                                <label class=" font-weight-bold">Name</label>
                                <input type="text" name="name" class=" form-control @error('name') is-invalid @enderror" value="{{old('name', $blackwatch->name)}}">
                            </div>

                            <div class=" form-group">
                                <label class=" font-weight-bold">Initial</label>
                                <input type="text" name="initial" class=" form-control @error('initial') is-invalid @enderror" value="{{old('initial', $blackwatch->initial)}}">
                            </div>

                            <div class="form-group">
                                <label for="name">Gender</label>
                                <select name="gender" id="gender" class=" form-control @error('gender') is-invalid  @enderror" value="{{old('gender', $blackwatch->gender)}}">
                                    <option value="{{old('gender', $blackwatch->gender)}}">{{old('gender', $blackwatch->gender)}} (recent)</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class=" form-group">
                                <label class=" font-weight-bold">Rank</label>
                                <select name="rank" class=" form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}">
                                    <option value="{{ old('rank', $blackwatch->rank) }}">{{ old('rank', $blackwatch->rank) }} (recent)</option>
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
                                <input type="text" name="role" class=" form-control @error('role') is-invalid @enderror" value="{{old('role', $blackwatch->role)}}">
                            </div>

                            <div class=" form-group">
                                <label class=" font-weight-bold">Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror" id="status" value="{{ old('status', $blackwatch->status) }}">
                                    <option value="{{ old('status', $blackwatch->status) }}">{{ old('status', $blackwatch->status) }} (recent)</option>
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
                            <button type="reset" class=" btn btn-warning">Reset</button>
                            <a href="{{ route('blackwatch.index') }}" class="btn btn-danger">Cancel</a>


                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
