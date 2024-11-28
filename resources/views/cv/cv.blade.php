@extends('layouts.main')
@section('container')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
            
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Curriculum Vitae</h3>
                        <p class="text-subtitle text-muted">Data Curriculum Vitae</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Curriculum Vitae</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex bd-highlight mb-3 align-items-center">
                            <div class="me-auto p-2 bd-highlight">Data Curriculum Vitae</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID User</th>
                                    <th>Nama</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Pekerjaan</th>
                                    <th>Status Pernikahan</th>
                                    <th>Target Menikah </th>
                                    <th>Mahdzab</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 12px">
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->education }}</td>
                                        <td>{{ $item->career }}</td>
                                        <td>{{ $item->marital_status }}</td>
                                        <td>{{ $item->marriage_target }}</td>
                                        <td>{{ $item->mahdzab }}</td>
                                        <td>
                                            <a href="/cv/detail/{{ $item->id }}" class="fa-solid fa-eye p-2"></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection