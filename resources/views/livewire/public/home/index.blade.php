<div>
    {{-- In work, do what you enjoy. --}}
    <footer class="main-footer">
        <div class="footer-top" style="background-image: url(assets/images/background/bg-1.png);">
            <div class="auto-container">
                <div class="footer-content">
                    <!-- Logo Ogan Ilir & Kominfo -->
                    <div class="logo-right">
                        <img src="assets/images/background/logo_oi.png" alt="Logo Ogan Ilir" class="logo">
                        <img src="assets/images/background/logo_diskominfo_shadow.png" alt="Logo Kominfo" class="logo">
                    </div>

                    <!-- Center Content -->
                    <div class="center-content">
                        <div class="marquee">
                            <p>Selamat Datang di Stand Diskominfo</p>
                        </div>
                    </div>

                    <!-- Logo HUT OI -->
                    <div class="logo-left">
                        <img src="assets/images/background/lanjutkerja21.png" alt="Logo HUT OI" class="logo">
                    </div>
                </div>

                <div class="widget-section">
                    <!-- pricing-section -->
                    <section class="pricing-section sec-pad">
                        <div class="container">
                            <div class="col-12">
                                <div class="row clearfix">
                                    <!-- AI CHAT ROASTING -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                        <div class="card mx-auto" data-toggle="modal" data-target="#modalDetail" wire:click.prevent="pilihType('rosting')"
                                            style="cursor: pointer">
                                            <div class="content">
                                                <div class="back">
                                                    <div class="back-content">
                                                        <img src="{{ asset('assets/images/icon_game/ai_chatbot.jpeg') }}"
                                                            alt="cek khodam">
                                                        <strong>AI Chatbot Roasting
                                                        </strong>
                                                    </div>
                                                </div>

                                                <div class="front">
                                                    <div class="img">
                                                        <div class="circle">
                                                        </div>
                                                        <div class="circle" id="right">
                                                        </div>
                                                        <div class="circle" id="bottom">
                                                        </div>
                                                    </div>
                                                    <div class="front-content">
                                                        <img src="{{ asset('assets/images/icon_game/ai_chatbot.jpeg') }}"
                                                            alt="cek khodam">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END AI CHAT ROASTING -->

                                    <!-- START CEK KHODAM -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                        <div class="card mx-auto" data-toggle="modal" data-target="#modalDetail" wire:click.prevent="pilihType('kodam')"
                                            style="cursor: pointer">
                                            <div class="content">
                                                <div class="back">
                                                    <div class="back-content">
                                                        <img src="{{ asset('assets/images/banner/cek-khodam.jpeg') }}"
                                                            alt="cek khodam">
                                                        <strong>Cek Khodam</strong>
                                                    </div>
                                                </div>

                                                <div class="front">
                                                    <div class="img">
                                                        <div class="circle">
                                                        </div>
                                                        <div class="circle" id="right">
                                                        </div>
                                                        <div class="circle" id="bottom">
                                                        </div>
                                                    </div>

                                                    <div class="front-content">
                                                        <img src="{{ asset('assets/images/banner/cek-khodam.jpeg') }}"
                                                            alt="cek khodam">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END CEK KHODAM -->

                                    <!-- START TEBAK LIRIK LAGU -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                        <div class="card mx-auto" data-toggle="modal" data-target="#modalDetail" wire:click.prevent="pilihType('nyanyi')"
                                            style="cursor: pointer">
                                            <div class="content">
                                                <div class="back">
                                                    <div class="back-content">
                                                        <img src="{{ asset('assets/images/icon_game/tebak-lagu.jpeg') }}"
                                                            alt="cek khodam">
                                                        <strong>Tebak Lirik Lagu</strong>
                                                    </div>
                                                </div>

                                                <div class="front">

                                                    <div class="img">
                                                        <div class="circle">
                                                        </div>
                                                        <div class="circle" id="right">
                                                        </div>
                                                        <div class="circle" id="bottom">
                                                        </div>
                                                    </div>

                                                    <div class="front-content">
                                                        <img src="{{ asset('assets/images/icon_game/tebak-lagu.jpeg') }}"
                                                            alt="cek khodam">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END TEBAK LIRIK LAGU -->
                                </div>
                                <div class="row clearfix mt-3">
                                    <!-- START EMOJI CHALLENGE -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                        <div class="card mx-auto" style="cursor: pointer" data-toggle="modal" wire:click.prevent="pilihType('emoji')"
                                            data-target="#modalDetail">
                                            <div class="content">
                                                <div class="back">
                                                    <div class="back-content">
                                                        <img src="{{ asset('assets/images/icon_game/emoji.jpeg') }}"
                                                            alt="cek khodam">
                                                        <strong>Emoji Challenge</strong>
                                                    </div>
                                                </div>
                                                <div class="front">

                                                    <div class="img">
                                                        <div class="circle">
                                                        </div>
                                                        <div class="circle" id="right">
                                                        </div>
                                                        <div class="circle" id="bottom">
                                                        </div>
                                                    </div>

                                                    <div class="front-content">
                                                        <img src="{{ asset('assets/images/icon_game/emoji.jpeg') }}"
                                                            alt="cek khodam">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END EMOJI CHALLENGE -->

                                    <!-- START WISHING FOR OGAN ILIR -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                        <div class="card mx-auto" data-toggle="modal" data-target="#modalDetail" wire:click.prevent="pilihType('wish')"
                                            style="cursor: pointer">
                                            <div class="content">
                                                <div class="back">
                                                    <div class="back-content">
                                                        <img src="{{ asset('assets/images/icon_game/harapan.jpeg') }}"
                                                            alt="cek khodam">
                                                        <strong>Wishing For Ogan Ilir</strong>
                                                    </div>
                                                </div>

                                                <div class="front">

                                                    <div class="img">
                                                        <div class="circle">
                                                        </div>
                                                        <div class="circle" id="right">
                                                        </div>
                                                        <div class="circle" id="bottom">
                                                        </div>
                                                    </div>

                                                    <div class="front-content">
                                                        <img src="{{ asset('assets/images/icon_game/harapan.jpeg') }}"
                                                            alt="cek khodam">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END WISHING FOR OGAN ILIR -->

                                    <!-- START QUIZ -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                        <div class="card mx-auto" data-toggle="modal" data-target="#modalDetail" wire:click.prevent="pilihType('kuis')"
                                            style="cursor: pointer">
                                            <div class="content">
                                                <div class="back">
                                                    <div class="back-content">
                                                        <img src="{{ asset('assets/images/icon_game/quiz.jpeg') }}"
                                                            alt="quiz">
                                                        <strong>Quiz</strong>
                                                    </div>
                                                </div>

                                                <div class="front">

                                                    <div class="img">
                                                        <div class="circle">
                                                        </div>
                                                        <div class="circle" id="right">
                                                        </div>
                                                        <div class="circle" id="bottom">
                                                        </div>
                                                    </div>

                                                    <div class="front-content">
                                                        <img src="{{ asset('assets/images/icon_game/quiz.jpeg') }}"
                                                            alt="quiz">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END QUIZ -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <!-- END QUIZ -->
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetailLabel">Data Peserta {{ $type ?? ''}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                        <input type="text" class="form-control" id="name" {{-- wire:model="name" --}}
                            placeholder="Masukan nama lengkap..."
                            style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.3); color: dark;">
                    </div>
                    <div class="input-group mb-3">
                        <div class="form-group"></div>
                        <input type="number" class="form-control" id="phone" {{-- wire:model="phone" --}}
                            placeholder="Masukan nomor HP/Whatsapp..."
                            style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.3); color: dark;">
                    </div>
                    <div class="form-group mb-4">
                        <div class="datepicker date input-group">
                            <input type="text" placeholder="dd/mm/yyyy" class="form-control" id="fecha1"
                                style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.3); color: dark;"
                                {{-- wire:model="dob" --}}>
                            <div class="input-group-append">
                                <span class="input-group-text"
                                    style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.3); color: dark; margin-left: 10px;"><i
                                        class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="input-group">
                        <button class="btn btn-dark btn-block" style="border-radius: 10px;"
                            wire:click='submit'>Simpan</button>
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" wire:click='submit' class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            overflow: visible;
            width: 190px;
            height: 254px;
        }

        .content {
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 300ms;
            box-shadow: 0px 0px 10px 1px #000000ee;
            border-radius: 5px;
        }

        .front,
        .back {
            background-color: #151515;
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            border-radius: 5px;
            overflow: hidden;
        }

        .back {
            width: 100%;
            height: 100%;
            justify-content: center;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .back::before {
            position: absolute;
            content: ' ';
            display: block;
            width: 160px;
            height: 160%;
            background: linear-gradient(90deg, transparent, #ff9966, #ff9966, #ff9966, #ff9966, transparent);
            animation: rotation_481 5000ms infinite linear;
        }

        .back-content {
            position: absolute;
            width: 99%;
            height: 99%;
            background-color: #151515;
            border-radius: 5px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            /* Atur jarak antar elemen */
            text-align: center;
            /* Pusatkan teks */
            padding: 10px;
            /* Tambahkan padding untuk ruang tambahan */
            box-sizing: border-box;
            /* Pastikan padding tidak menambah dimensi elemen */
            font-size: 14px;
            /* Sesuaikan ukuran teks */
            line-height: 1.5;
            /* Atur jarak baris untuk keterbacaan */
        }


        .card:hover .content {
            transform: rotateY(180deg);
        }

        @keyframes rotation_481 {
            0% {
                transform: rotateZ(0deg);
            }

            0% {
                transform: rotateZ(360deg);
            }
        }

        .front {
            transform: rotateY(180deg);
            color: white;
        }

        .front .front-content {
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .front-content .badge {
            background-color: #00000055;
            padding: 2px 10px;
            border-radius: 10px;
            backdrop-filter: blur(2px);
            width: fit-content;
        }

        .description {
            box-shadow: 0px 0px 10px 5px #00000088;
            width: 100%;
            padding: 10px;
            background-color: #00000099;
            backdrop-filter: blur(5px);
            border-radius: 5px;
        }

        .title {
            font-size: 11px;
            max-width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .title p {
            width: 50%;
        }

        .card-footer {
            color: #ffffff88;
            margin-top: 5px;
            font-size: 8px;
        }

        .front .img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .circle {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background-color: #ffbb66;
            position: relative;
            filter: blur(15px);
            animation: floating 2600ms infinite linear;
        }

        /* LOGO */
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo-left img,
        .logo-right img {
            max-height: 90px;
            /* Atur tinggi logo */
        }

        .center-content {
            text-align: center;
            flex: 1;
            /* Mengisi ruang di tengah */
            padding: 0 20px;
        }

        /* END LOGO */

        /* MARQUEE */
        .marquee {
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            width: 100%;
            /* Sesuaikan dengan kebutuhan */
        }

        .marquee p {
            display: inline-block;
            animation: scroll 10s linear infinite;
            white-space: nowrap;
            margin: 0;
            font-size: 26px;
            /* Adjust the font size as needed */
            font-weight: bold;
            /* Make the text bold */
            color: white;
            /* Change the text color to white */
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }


        #bottom {
            background-color: #ff8866;
            left: 50px;
            top: 0px;
            width: 150px;
            height: 150px;
            animation-delay: -800ms;
        }

        #right {
            background-color: #ff2233;
            left: 160px;
            top: -80px;
            width: 30px;
            height: 30px;
            animation-delay: -1800ms;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(0px);
            }
        }
    </style>

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
