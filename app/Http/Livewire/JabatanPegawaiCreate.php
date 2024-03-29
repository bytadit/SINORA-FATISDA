<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JabatanPegawai;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\RoleUser;
use App\Models\Unit;
use App\Models\Role;
use App\Models\Team;

class JabatanPegawaiCreate extends Component
{
    public $pegawai_nama, $team_nama, $jabatan_nama, $team_id, $role_id;
    public function render()
    {
        return view('livewire.jabatan-pegawai-create', [
            // 'units' => Unit::latest()->get(),
            // 'units' => Unit::whereIn('id', JabatanPegawai::where('id_pegawai', Pegawai::where('id_user', auth()->user()->id)->first()->id)->pluck('id_unit'))->get(),
            'teams' => Team::where('name', 'like', Team::where('id', $this->team_id)->first()->name . '%')->get(),
            // 'units' => Unit::where('kode', 'like', )
            'jabatans' => Jabatan::latest()->get(),
//            'pegawais' => Pegawai::latest()->get(),
            'pegawais' => Pegawai::whereNotIn('id', JabatanPegawai::where('id_team', $this->team_nama)->pluck('id_pegawai'))->get(),
            'users' => User::latest()->get()
        ]);
    }
    public function mount($team_id)
    {
        $this->team_id = $team_id;
    }
    protected $messages = [
        'pegawai_nama.required' => 'Input Nama Pegawai tidak boleh kosong !',
        'team_nama.required' => 'Input Nama Unit tidak boleh kosong !',
        'jabatan_nama.required' => 'Input Nama Jabatan tidak boleh kosong !',
    ];
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'pegawai_nama' => 'required',
            'team_nama' => 'required',
            'jabatan_nama' => 'required'
        ]);
    }
    private function resetInput()
    {
        $this->team_nama = '';
        $this->jabatan_nama = '';
        $this->pegawai_nama = '';
    }
    public function cancel()
    {
        $this->resetInput();
    }
    public function storeJabatanPegawai()
    {
        $this->validate([
            'team_nama' => 'required',
            'jabatan_nama' => 'required',
            'pegawai_nama' => 'required'
        ]);

        $jabatanPegawai = JabatanPegawai::create([
            'id_team' => $this->team_nama,
            'id_pegawai' => $this->pegawai_nama,
            'id_jabatan' => $this->jabatan_nama
        ]);
        if($jabatanPegawai != null){
            RoleUser::create([
                'role_id' => Role::where('name', 'user')->first()->id,
                'user_id' => Pegawai::where('id', $jabatanPegawai->id_pegawai)->first()->id_user,
                'user_type' => 'App\Models\User',
                'team_id' => $jabatanPegawai->id_team
            ]);
        }
        $this->resetInput();
        $this->emit('jabatanPegawaiStored', $jabatanPegawai);
        $this->dispatchBrowserEvent('close-create-modal');
    }
}
