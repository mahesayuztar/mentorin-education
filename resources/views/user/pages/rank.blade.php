@extends('user.layouts.sidebar')

@section('content')
<style>
    .dropdown {
        position: relative;
        display: inline-block;
        margin-bottom: 20px;
        margin-left: 1.5rem;
    }

    .dropbtn {
        padding: 5px 10px;
        display: flex;
        align-items: center;
        background-color: #fff;
        border: 1px solid #001e26;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
        top: 100%;
        left: 60%;
    }

    .dropdown-content a {
        color: #001e26;
        padding: 15px 20px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #77B0AA;
        color: #001e26;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #77B0AA;
        color: #001e26;
        border: 1px solid #001e26;
    }
</style>

<h1 class="card-title" id="kategoriTitle">Lihat Peringkat Semua</h1>
<div class="dropdown" id="myDropdown">
    <button class="dropbtn" onclick="toggleDropdown()">Pilih Kategori <ion-icon name="chevron-down-outline" style="margin-left: 5px;"></ion-icon></button>
    <div class="dropdown-content">
        @foreach($daftar_paket as $p)
        <a href="#" onclick='changeCategory({!! json_encode($p["id_paket"]) !!}, {!! json_encode($p["nama_paket"]) !!})'>{{$p['nama_paket']}}</a>
        @endforeach
    </div>
</div>

@foreach($daftar_paket as $p)
<div class="history-content" 
@if($p['id_paket']!='semua')
style="display: none;"
@endif
id="{{$p['id_paket'].'ranking'}}">
    <div class="history-info">
        <table class="history-table" id="mainTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Paket Try Out</th>
                    <th>Waktu</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=0;
                @endphp
                @foreach($riwayat_pakets as $r)
                @if($p['id_paket']=="semua" or $r->id_paket==$p['id_paket'])
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$r->nama_user}}</td>
                    <td>{{$r->nama_paket}}</td>
                    <td>{{$r->waktu_digunakan}}</td>
                    <td>{{$r->score}}</td>
                </tr>
                @php
                $i++;
                @endphp
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endforeach

<script>
    function toggleDropdown() {
        var dropdownContent = document.getElementById("myDropdown").querySelector(".dropdown-content");
        dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
    }

    function changeCategory(category, namaPaket) {
        var allRank = document.querySelectorAll('.history-content');

        allRank.forEach(function(rank) {
            rank.style.display = 'none';
        });

        var idCategory = category+"ranking";

        document.getElementById(idCategory).style.display = "block";
        document.getElementById("kategoriTitle").innerText = "Lihat Peringkat " + namaPaket;
    }

    // function showTable(category) {
    //     var mainTable = document.getElementById("mainTable");
    //     var tableBody = mainTable.querySelector("tbody");

    //     // Clear current table content
    //     tableBody.innerHTML = "";

    //     // Populate table based on selected category
    //     switch (category) {
    //         @foreach($daftar_paket as $p)
    //         case {!! json_encode($p['nama_paket']) !!}:
    //             tableBody.innerHTML = `
    //                 @foreach($riwayat_pakets as $key => $r)
    //                 @if($r->id_paket==$p['id_paket'])
    //                 <tr>
    //                     <td>{!! json_encode($key+1) !!}</td>
    //                     <td>{!! json_encode($r->nama_user) !!}</td>
    //                     <td>{!! json_encode($r->nama_paket) !!}</td>
    //                     <td>{!! json_encode($r->waktu_digunakan) !!}</td>
    //                     <td>{!! json_encode($r->score) !!}</td>
    //                 </tr>
    //                 @endif
    //                 @endforeach
    //             `;
    //             break;
    //         @endforeach
    //         default:
    //             // Default to show all data
    //             tableBody.innerHTML = `
    //                 @foreach($riwayat_pakets as $key => $r)
    //                 <tr>
    //                     <td>{!! json_encode($key+1) !!}</td>
    //                     <td>{!! json_encode($r->nama_user) !!}</td>
    //                     <td>{!! json_encode($r->nama_paket) !!}</td>
    //                     <td>{!! json_encode($r->waktu_digunakan) !!}</td>
    //                     <td>{!! json_encode($r->score) !!}</td>
    //                 </tr>
    //                 @endforeach
    //             `;
    //     }
    // }
</script>

@endsection
