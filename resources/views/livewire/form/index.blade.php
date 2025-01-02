<div>
    {{-- In work, do what you enjoy. --}}

    <footer class="main-footer">
        <div class="footer-top"
            style="background-image: url({{ asset('assets/images/background/bg.png') }}); height: 100vh; width: 100vw;">
            {{-- buatkan saya card yang berisi form name dan phone, lalu tarok di center --}}
            <div class="container">
                <div class="d-flex justify-content-center align-items-center" style="height: 70vh;">
                    <div class="col-6">
                        <div class="card"
                            style="background-color: rgba(255, 255, 255, 0.5); border: 1px solid #ccc; border-radius: 20px;">
                            <div class="card-body py-5">
                                {{-- alert --}}
                                @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session('error') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <div class="title mb-4 text-center text-dark">
                                    <h5><b>Silahkan mengisi form dibawah</b></h5>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-group"></div>
                                    <input type="text" class="form-control" id="name" wire:model="name"
                                        placeholder="Masukan nama lengkap..."
                                        style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.3); color: dark;">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-group"></div>
                                    <input type="number" class="form-control" id="phone" wire:model="phone"
                                        placeholder="Masukan nomor HP/Whatsapp..."
                                        style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.3); color: dark;">
                                </div>
                                <div class="form-group mb-4">
                                    <div class="datepicker date input-group">
                                        <input type="text" placeholder="dd/mm/yyyy" class="form-control" id="fecha1"
                                            style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.3); color: dark;"
                                            wire:model="dob">
                                        <div class="input-group-append">
                                            <span class="input-group-text"
                                                style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.3); color: dark; margin-left: 10px;"><i
                                                    class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <button class="btn btn-dark btn-block" style="border-radius: 10px;"
                                        wire:click='submit'>Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @push('js')
    <script>
        document.addEventListener('livewire:init', function () {
            Livewire.on('openNewtab', (url) => {
                console.log("JALANNNNN");
                const newWindow = window.open(url, '_blank');
            });
        });
    </script>
    @endpush
</div>
