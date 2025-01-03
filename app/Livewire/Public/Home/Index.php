<?php

namespace App\Livewire\Public\Home;

use Livewire\Component;
use App\Models\Pengguna;

class Index extends Component
{
    public $name, $phone, $dob, $type;

    public $linkQuiz = [
        "https://kahoot.it/solo/?quizId=a2c50a43-0c57-4382-988c-75ca3f96d104",
        "https://kahoot.it/solo/?quizId=b21b7d93-a3ca-4e1f-acae-c01b500400d0",
        "https://kahoot.it/solo/?quizId=08d4e73d-5e23-43bf-aeac-02b2b88bdee6",
        "https://kahoot.it/solo/?quizId=0aa745a7-2e22-44b5-8352-37cff002cae5",
        "https://kahoot.it/solo/?quizId=e6e64fd7-dbd5-4693-98f9-dbb2d5935f2c",
        "https://kahoot.it/solo/?quizId=59ee0f18-497c-433c-aee2-fe14bc7d77c9",
    ];

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
                $url = "https://relanda.my.id/?name=" . $this->name . "&phone=" . $this->phone;
            } elseif ($this->type == 'nyanyi') {
                $url = "http://tebak_lirik.test";
            } elseif ($this->type == 'emoji') {
                $url = "http://emoji.test/?name=" . $this->name . "&phone=" . $this->phone;
            } elseif ($this->type == 'rosting') {
                $url = "http://192.168.100.194:8001";
            } elseif ($this->type == 'wish') {
                $url = "http://laravel11.test/?name=" . $this->name . "&phone=" . $this->phone;
            } elseif ($this->type == 'kuis') {
                $url = $this->linkQuiz[rand(0, 5)];
            }

            $this->dispatch('openNewtab', $url);
            redirect()->route('home');
            $this->reset();
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
    }
}
