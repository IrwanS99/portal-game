<?php

namespace App\Livewire\Public\Home;

use Livewire\Component;
use App\Models\Pengguna;

class Index extends Component
{
    public $name, $phone, $dob, $type;

    public function render()
    {
        return view('livewire.public.home.index')->layout('components.layouts.app');
    }

    // pilih type
    public function pilihType($type)
    {
        $this->type = $type;
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
                $url = "https://relanda.my.id";
            } elseif ($this->type == 'nyanyi') {
                $url = "http://tebak_lirik.test";
            } elseif ($this->type == 'emoji') {
                $url = "http://emoji.test";
            } elseif ($this->type == 'rosting') {
                $url = "http://192.168.100.194:8001";
            } elseif ($this->type == 'wish') {
                $url = "http://laravel11.test";
            } elseif ($this->type == 'kuis') {
                $url = "https://kahoot.it/solo/?quizId=e9832160-3e73-48e5-8f0c-e275ff54f54b";
            }

            $this->dispatch('openNewtab', $url);
            redirect()->route('home');
            $this->reset();
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
    }


}
