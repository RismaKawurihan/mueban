<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-title" style="font-family: Georgia, serif;">Jumlah Data</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Total Points</h4>
                            <p style="font-size: 32pt">{{ $total_points }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                            <h4><i class="fa-solid fa-route"></i> Total Polylines</h4>
                            <p style="font-size: 32pt">{{ $total_polylines }}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <p style="font-family: Georgia, serif;"> Anda Login Sebagai <b>{{ Auth::user()->name }}</b> dengan email
                    <i>{{ Auth::user()->email }}</i>
                </p>
            </div>
        </div>
    </div>

    <div class="container py-10">
        <div class="card shadow">
            <h1 class="card-title text-center mt-3" style="font-family: Georgia, serif;  font-size: 2rem;">Bandung dan
                Museumnya</h1>
            <div class="card-body">
                <div class="row">
                    <div class=" " style="display: flex; justify-content: flex-start; padding-left: 20px; padding-right: 20px;"">
                        <h2 style="font-family: Georgia, serif;"> Bandung, yang sering disebut sebagai "Paris van Java,"
                            adalah kota yang kaya akan keindahan
                            alam, arsitektur kolonial, dan keberagaman budaya. Terletak di dataran tinggi Jawa Barat,
                            Bandung menawarkan pemandangan alam yang menakjubkan dengan pegunungan yang mengelilingi
                            kota,
                            seperti Gunung Tangkuban Perahu dan Gunung Burangrang yang menjulang di kejauhan.

                            Keindahan alam Bandung juga tercermin dalam keberadaan banyak taman dan area terbuka hijau
                            seperti Taman Hutan Raya Ir. H. Djuanda, yang menjadi tempat favorit bagi penduduk setempat
                            untuk rekreasi dan berolahraga di tengah udara segar pegunungan.

                            Selain alamnya, Bandung membanggakan arsitektur kolonial Belanda yang masih terawat dengan
                            baik,
                            terutama di sepanjang Jalan Asia Afrika dan Jalan Braga. Bangunan-bangunan ini memancarkan
                            pesona masa lalu dengan gaya arsitektur yang klasik dan penuh karakter, memberikan sentuhan
                            sejarah yang kental di tengah kesibukan kota modern.

                            Tidak hanya itu, Bandung juga dikenal dengan kehidupan seni dan budayanya yang berkembang
                            pesat.
                            Berbagai galeri seni, museum, dan pertunjukan seni panggung memperkaya pengalaman budaya
                            bagi
                            pengunjung dan penduduk lokal. Bukan hanya tempat bagi seniman lokal untuk berkreasi, tetapi
                            Bandung juga menjadi tempat acara-acara budaya dan festival yang menarik perhatian wisatawan
                            dari berbagai belahan dunia.

                            Kota Bandung juga memiliki daya tarik kuliner yang khas dengan beragam makanan dan minuman
                            tradisional serta modern yang dapat dinikmati di berbagai warung, kafe, dan restoran di
                            seluruh
                            kota.

                            Dengan semua keindahan alamnya, pesona arsitekturalnya, dan kehidupan seni yang bersemangat,
                            Bandung tidak hanya menjadi destinasi wisata yang populer tetapi juga menciptakan pengalaman
                            yang tak terlupakan bagi siapa pun yang mengunjunginya.</h2>
                    </div>
                </div>
            </div>
        </div>


</x-app-layout>
