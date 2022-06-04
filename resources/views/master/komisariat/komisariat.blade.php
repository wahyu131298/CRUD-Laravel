@extends('layout.admin')
@section('title','Data Komisariat')
@section('body')
<div class="pagetitle">
      <h1>Data Komisariat</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a href="/formkomisariat" class="btn btn-outline-primary">Tambah Data</a></h5>
              @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-1"></i>
                        {{Session::get('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-1"></i>
                        {{Session::get('fail')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
              <div class="table-responsive">
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Komisariat</th>
                    <th scope="col">Universitas</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($komisariat as $kom)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$kom->nama_komisariat}}</td>
                      
                        <td>{{$kom->univ}}</td>
                        <td style="width: 20%;" class="text-center"><img style="width: 60%;" calass="logo-kom" src="file/logo/{{$kom->logo}}" alt="Logo"></td>
                        <td>
                            <a href="/komisariat/edit/{{$kom->id_komisariat}}" class="btn btn-outline-success"><i class="bi bi-pencil-fill"></i></a>
                            <a href="/komisariat/hapus/{{$kom->id_komisariat}}" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Akan Menghapus Data?')"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              </div><!--responsif-->
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection