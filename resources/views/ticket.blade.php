@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <div class="card shadow">
            <div class="card-header">
                <h3>Jadwal Operational dan Harga Tiket</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Museum</th>
                            <th>Hari Buka</th>
                            <th>Jam Operational</th>
                            <th>Harga Tiket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Museum Barli</td>
                            <td>Senin - Sabtu</td>
                            <td>11.00 WIB - 17.00 WIB</td>
                            <td>Rp25.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Museum Kota Bandung</td>
                            <td>
                                Senin - Jumat <br>
                                Sabtu - Minggu
                            </td>
                            <td>08.00 WIB - 16.00 WIB <br>
                                09.00 WIB - 17.00 WIB
                            </td>
                            <td>Gratis</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Museum Geologi Bandung</td>
                            <td>
                                Selasa - Kamis <br>
                                Sabtu - Minggu
                            </td>
                            <td>09.00 WIB - 15.00 WIB <br>
                                09.00 WIB - 14.00 WIB
                            </td>
                            <td>
                                Pelajar :  Rp2.000 <br>
                                Umum : Rp3.000 <br>
                                Wisatawan asing : Rp10.000
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Museum Konverensi Asia Afrika </td>
                            <td>Selasa, Kamis, Sabtu, dan Minggu </td>
                            <td>09.00 WIB - 16.00 WIB</td>
                            <td>Gratis</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Museum Sri Baduga</td>
                            <td>Senin - Jumat</td>
                            <td>08.00 WIB - 16.00 WIB</td>
                            <td>
                                Pelajar : Rp2.000 - Rp3.000 <br>
                                Wisatawan asing : Rp4.000 - Rp5.000
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Museum Mandala Wangsit Siliwangi</td>
                            <td>Senin - Sabtu</td>
                            <td>08.00 WIB - 14.00 WIB</td>
                            <td>Gratis</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Museum Pos Indonesia</td>
                            <td>Senin - Sabtu</td>
                            <td>09.00 WIB - 16.00 WIB</td>
                            <td>Gratis</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Museum Puspa Iptek Sundial</td>
                            <td>Senin - Minggu</td>
                            <td>09.00 WIB - 16.00 WIB</td>
                            <td>
                                Anak :  Rp15.000 <br>
                                Dewasa : Rp20.000 <br>
                                Lansia : Rp10.000 <br>
                                Mahasiswa : Rp15.000 <br>
                                Group : Rp15.000
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Museum Amazing Artgamas</td>
                            <td>Senin - Minggu</td>
                            <td>09.00 WIB - 18.00 WIB</td>
                            <td>
                                Weekday : Rp35.000 <br>
                                Weekend : Rp50.000
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Museum NuArt Sculpture Park</td>
                            <td>Selasa - Minggu</td>
                            <td>09.00 WIB - 17.00 WIB</td>
                            <td>
                                Pelajar : Rp25.000 <br>
                                Umum : Rp50.000
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Museum Wot Batu</td>
                            <td>Selasa - Minggu</td>
                            <td>10.00 WIB - 17.00 WIB</td>
                            <td>Rp50.000</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Museum Virajati Seskoad</td>
                            <td>Selasa - Jumat</td>
                            <td>07.00 WIB - 19.00 WIB</td>
                            <td>Gratis</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
