<div>
    @section('title')
        Atur User Permission
    @endsection
    @component('dashboard.layouts.breadcrumb')
        @slot('li_1')
            Menu Admin
        @endslot
        @slot('li_2')
            Atur Pejabat
        @endslot
        @slot('li_2_link')
            {{ route('manage-pejabat', ['team' => $team]) }}
        @endslot
        @slot('title')
            Permission {{$user_name}}
        @endslot
    @endcomponent
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form wire:submit.prevent="updatePermission">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name">User Name</label>
                            <input wire:model='user_name' type="text" class="form-control" id="user_name"
                                   placeholder="Masukkan Nama User" disabled>
                        </div>
                        <label class="form-label mb-3">Daftar Role User di Unit {{$team_name}}</label>
                        <div class="row">
                            @foreach($roles as $role)
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <div class="d-inline input-group">
                                            <input wire:model.defer="role_array" class="form-check-input" type="checkbox"
                                                   id="role{{ $role->id }}"
                                                   value={{ $role->id }}
                                                {{ $role_users->where('user_id', $user_id)->where('team_id', $team)->pluck('role_id')->contains($role->id) ? 'checked': '' }}>
                                            <label for="role{{ $role->id }}" class="form-label">{{$role->display_name}}</label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <label class="form-label mb-3">Daftar Permission di Unit {{$team_name}}</label>
                        <div class="row">
                            @foreach($permissions as $permission)
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <div class="d-inline input-group">
                                            <input wire:model.defer="permission_array" class="form-check-input" type="checkbox"
                                                   id="permission{{ $permission->id }}"
                                                   value={{ $permission->id }}
                                                {{ $permission_users->where('user_id', $user_id)->where('team_id', $team)->pluck('permission_id')->contains($permission->id) ? 'checked': '' }}>
                                            <label for="permission{{ $permission->id }}" class="form-label">{{$permission->display_name}}</label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-end mb-4">
                <button type="submit" class="btn btn-success w-sm">Simpan</button>
            </div>
        </div>
    </form>
</div>
