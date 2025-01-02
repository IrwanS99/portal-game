<?php

namespace App\Livewire\Form;

use App\Models\Pengguna;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{

    #[Layout('components.layouts.app')]

    public $name, $phone, $dob, $type;

    public function mount()
    {
        $this->type = request()->type;
    }

    public function render()
    {
        return view('livewire.form.index');
    }

    public function submit()
    {
        try {
            $this->validate([
                'name' => 'required|unique:penggunas,nama',
                'phone' => 'required',
                'dob' => 'required',
            ], [
                'name.required' => 'Nama wajib diisi.',
                'name.unique' => 'Nama sudah ada.',
                'phone.required' => 'Nomor telepon wajib diisi.',
                'dob.required' => 'Tanggal lahir wajib diisi.',
            ]);

            Pengguna::create([
                'nama' => $this->name,
                'phone' => $this->phone,
                'dob' => $this->dob,
                'type' => $this->type,
            ]);

            session()->flash('success', 'Data berhasil disimpan.');

            $url = "";
            if ($this->type == 'kodam') {
                $url = "http://kodam.test";
            } elseif ($this->type == 'nyanyi') {
                $url = "http://nyanyi.test";
            } elseif ($this->type == 'emoji') {
                $url = "http://emoji.test";
            } elseif ($this->type == 'rosting') {
                $url = "http://rosting.test";
            } elseif ($this->type == 'wish') {
                $url = "http://wish.test";
            } elseif ($this->type == 'kuis') {
                $url = "http://kuis.test";
            }

            $this->dispatch('openNewtab', $url);
            redirect()->route('home');
            $this->reset();
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
    }
}
