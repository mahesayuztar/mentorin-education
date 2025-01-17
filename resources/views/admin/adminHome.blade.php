@extends('admin.layouts.master')

@section('content')
<style>
    .btn {
        display: inline-block;
        padding: 5px 15px;
        background-color: #00345b;
        color: #fff;
        font-size: 12px;
        line-height: 1.5;
        text-align: center;
        text-decoration: none;
        border-radius: 20px;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    .btn.edit {
        background-color: grey; 
        margin-bottom: 5px; 
        display: block;
    }
    
    .btn.confirm {
        margin-bottom: 5px; 
        display: block; 
    }
    
    .btn.delete {
        background-color: red; 
        display: block;
    }
    
    .btn.edit:hover {
        background-color: #555;
        text-decoration: none;
    }
    
    .btn.delete:hover {
        background-color: #b30000;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #6CA6CD;
        color: #fff;
        text-decoration: none;
    }

    .btn:focus,
    .btn.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
</style>
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Halaman Utama</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Halaman Utama</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Beranda</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
                <li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>{{ DB::table('users')->count() }}</h3>
						<p>Pengguna</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-package' ></i>
					<span class="text">
						<h3>{{ DB::table('pakets')->count() }}</h3>
						<p>Paket</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-event' ></i>
					<span class="text">
						<h3>{{ DB::table('soals')->count() }}</h3>
						<p>Soal</p>
					</span>
				</li>
			</ul>

            <style>
                #content main .table-data {
                    text-align: center;
                }
                #content main .table-data .order table th,td {
                    text-align: center;
                }
            </style>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Pesanan Terbaru</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>ID User</th>
								<th>Nama User</th>
								<th>ID Paket</th>
								<th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
							</tr>
						</thead>
						<tbody>
                            @php
                            // Ambil semua data pengguna dan buat map id_user ke name
                            $users = DB::table('users')->pluck('name', 'id');
                            // Ambil semua orders terlebih dahulu
                            $orders = DB::table('orders')->orderBy('created_at', 'desc')->get();
                            @endphp
                            @foreach($orders as $order)
                                <tr>
                                    @php
                                    // Dapatkan nama pengguna dari map
                                    $user_name = isset($users[$order->id_user]) ? $users[$order->id_user] : 'Unknown';
                                    @endphp
                                    <td>{{ $order->id_user }}</td>
                                    <td>{{ $user_name }}</td>
                                    <td>{{ $order->id_paket }}</td>
                                    <td>{{ $order->total_amount }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>
                                        <div style="text-align: center;">
                                            <a href="{{ url('edit-order-status/'.$order->id) }}" class="btn edit">Edit</a>
                                            <a href="{{ url('edit-order-konfirmasi/'.$order->id) }}" class="btn confirm">Konfirmasi</a>
                                            <a href="{{ url('delete-order/'.$order->id) }}" class="btn delete">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Daftar User Terbaru</h3>
					</div>
                    <ul class="todo-list">
                        <p class="todo-list-title" style="text-align: start; margin-bottom: 10px; font-weight: 500;">ID User | Username User | Email User</p>
                        @foreach(DB::table('users')->orderBy('created_at', 'desc')->get() as $user)
                            <li class="completed">
                                <p style="font-size: 12px;">{{ $user->id }} | {{ $user->username }} | {{ $user->email }}</p>
                            </li>
                        @endforeach
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

    @endsection
</body>
</html>
