@extends('layouts.front')

@section('front')
				<div class="wrapper">
								<!-- Navbar -->
								<x-front-dashboard-navbar></x-front-dashboard-navbar>
								<!-- /.Navbar -->

								<!-- Main Sidebar Container -->
								<aside class="main-sidebar sidebar-dark-primary elevation-4">
												<!-- Brand Logo -->
												<a href="/dashboard" class="brand-link">
																
																<span class="brand-text font-weight-light">Visit Tasik</span>
												</a>

												<!-- Sidebar Menu -->
												<x-front-sidemenu></x-front-sidemenu>
												<!-- /.sidebar Menu -->
								</aside>

								<!-- Content Wrapper. Contains page content -->
								<div class="content-wrapper">
												<!-- Content Header (Page header) -->
												<section class="content-header">
																<div class="container-fluid">
																				<div class="row mb-2">
																								<div class="col-sm-6">
																												<h1>Penginapan</h1>
																								</div>
																								<div class="col-sm-6">
																												<ol class="breadcrumb float-sm-right">
																																<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
																																<li class="breadcrumb-item active">Penginapan</li>
																												</ol>
																								</div>
																				</div>
																</div><!-- /.container-fluid -->
												</section>

												<!-- Main content -->
												<section class="content">
																<div class="container-fluid">
																				<div class="row">
																								<div class="col-12">


																												<div class="card">
																																<div class="card-header">
																																				@if (session('update'))
																																								<div class="alert alert-success">
																																												{{ session('update') }}
																																								</div>
																																				@endif

																																				@if (session('delete'))
																																								<div class="alert alert-success">
																																												{{ session('delete') }}
																																								</div>
																																				@endif

																																				@if (session('store'))
																																								<div class="alert alert-success">
																																												{{ session('store') }}
																																								</div>
																																				@endif

																																				@if (session('sameRoute'))
																																								<div class="alert alert-danger">
																																												{{ session('sameRoute') }}
																																								</div>
																																				@endif

																																				<div class="row mb-2">
																																								<div class="col-sm-6">
																																												<h3 class="card-title">Data Penginapan</h3>
																																								</div>
																																								@can('isAdmin')
																																												<div class="col-sm-6">
																																																<button class="btn btn-warning btn-sm float-sm-right" type="button"
																																																				data-toggle="modal" data-target="#modal-tambah-type"
																																																				id="button-tambah-harga">Tambah Penginapan
																																																</button>

																																																<div class="modal fade" id="modal-tambah-type">
																																																				<div class="modal-dialog modal-lg">
																																																								<div class="modal-content">
																																																												<div class="modal-header">
																																																																<h4 class="modal-title">Form Tambah Penginapan</h4>
																																																																<button type="button" class="close" data-dismiss="modal"
																																																																				aria-label="Close">
																																																																				<span aria-hidden="true">&times;</span>
																																																																</button>
																																																												</div>

																																																												<form action="/tracks" method="POST">
																																																																@csrf
																																																																@method('POST')

																																																																<div class="modal-body">
																																																																				<div class="form-group row">
																																																																								<label class="col-sm-3 col-form-label">Nama Penginapan</label>
																																																																								<input type="text" class="col-sm-9 form-control"
																																																																												name="from_route"
																																																																												placeholder="Masukkan Penginapan">
																																																																				</div>

																																																																				<div class="form-group row">
																																																																								<label class="col-sm-3 col-form-label">Jenis Penginapan</label>
																																																																								<input type="text" class="col-sm-9 form-control"
																																																																												name="to_route"
																																																																												placeholder="Masukkan Jenis Penginapan">
																																																																				</div>
																																																																</div>

																																																																<div class="modal-footer">
																																																																				<input type="submit" class="btn btn-success" name="submit"
																																																																								value="Submit" />
																																																																</div>
																																																												</form>
																																																								</div>

																																																				</div>
																																																</div>
																																												</div>
																																								@endcan
																																				</div>
																																</div>
																																<!-- /.card-header -->
																																<div class="card-body">
																																				<table id="example1" class="table table-bordered table-striped">
																																								<thead>
																																												<tr>
																																																<th>No</th>
																																																<th>ID</th>
																																																<th>Nama Penginapan</th>
																																																<th>Jenis Penginapan</th>
																																																<th>Action</th>
																																												</tr>
																																								</thead>
																																								<tbody>
																																												@foreach ($tracks as $track)
																																																<tr>
																																																				<td>
																																																								{{ $loop->iteration }}
																																																				</td>
																																																				<td>
																																																								@isset($track->id)
																																																												{{ $track->id }}
																																																								@endisset
																																																				</td>
																																																				<td>
																																																								@isset($track->from_route)
																																																												{{ $track->from_route }}
																																																								@endisset
																																																				</td>
																																																				<td>
																																																								@isset($track->to_route)
																																																												{{ $track->to_route }}
																																																								@endisset
																																																				</td>
																																																				<td>
																																																								<a class='btn btn-primary btn-xs mx-1' data-toggle="modal"
																																																												data-target="#modal-ubah-{{ $track->id }}">Ubah</a>
																																																								<form action="/tracks/{{ $track->id }}" method="POST"
																																																												onsubmit="return confirm('Yakin ingin menghapus?');">
																																																												@csrf
																																																												@method('DELETE')

																																																												<button class='btn btn-danger btn-xs mx-1'>Delete</button>
																																																								</form>
																																																				</td>
																																																				<div class="modal fade" id="modal-ubah-{{ $track->id }}">
																																																								<div class="modal-dialog modal-lg">
																																																												<div class="modal-content">
																																																																<div class="modal-header">
																																																																				<h4 class="modal-title">Form Ubah Data Penginapan</h4>
																																																																				<button type="button" class="close"
																																																																								data-dismiss="modal" aria-label="Close">
																																																																								<span aria-hidden="true">&times;</span>
																																																																				</button>
																																																																</div>
																																																																<form action="/tracks/{{ $track->id }}" method="POST">
																																																																				@csrf
																																																																				@method('PUT')

																																																																				<div class="modal-body">
																																																																								<div class="form-group row">
																																																																												<label class="col-sm-3 col-form-label">Nama Penginapan</label>
																																																																												<input type="text"
																																																																																class="col-sm-9 form-control"
																																																																																name="from_route"
																																																																																placeholder="Nama Penginapan"
																																																																																value="{{ old('from_route', $track->from_route) }}">
																																																																								</div>

																																																																								<div class="form-group row">
																																																																												<label class="col-sm-3 col-form-label">Nama Penginapan</label>
																																																																												<input type="text"
																																																																																class="col-sm-9 form-control"
																																																																																name="to_route"
																																																																																placeholder="Masukkan Nama Penginapan"
																																																																																value="{{ old('to_route', $track->to_route) }}">
																																																																								</div>
																																																																				</div>
																																																																				<div class="modal-footer">
																																																																								<input type="submit" class="btn btn-success"
																																																																												name="submit" />
																																																																				</div>
																																																																</form>
																																																												</div>
																																																								</div>
																																																				</div>
																																																</tr>
																																												@endforeach



																																				</table>
																																</div>
																																<!-- /.card-body -->
																												</div>
																												<!-- /.card -->
																								</div>
																								<!-- /.col -->
																				</div>
																				<!-- /.row -->
																</div>
																<!-- /.container-fluid -->
												</section>
												<!-- /.content -->
								</div>
								<!-- /.content-wrapper -->
								<footer class="main-footer">
												<strong>Visit Tasik &copy; 2024.</strong>
												All rights reserved.
												<div class="float-right d-none d-sm-inline-block">
												</div>
								</footer>

								<!-- Control Sidebar -->
								<aside class="control-sidebar control-sidebar-dark">
												<!-- Control sidebar content goes here -->
								</aside>
								<!-- /.control-sidebar -->
				</div>
@endsection
