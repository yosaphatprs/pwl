  <!-- Content Wrapper. Contains page content -->
  @extends('layouts.template')
  @section('content')
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Daftar Artikel</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Daftar Artikel</li>
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
                              <h3 class="card-title">Daftar Artikel</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover">
                                  <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Judul</th>
                                          <th>Author</th>
                                          <th>Likes</th>
                                          <th>Dislikes</th>
                                          <th>Tanggal Upload</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($articles as $articles)
                                      <tr>
                                          <td>{{ $articles->id }}</td>
                                          <td>{{ $articles->judul }}</td>
                                          <td>{{ $articles->author }}</td>
                                          <td>{{ $articles->likes }}</td>
                                          <td>{{ $articles->dislikes }}</td>
                                          <td>{{ $articles->created_at }}</td>
                                      </tr>
                                      @endforeach
                                  </tbody>
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
  @endsection('content')