@extends('layouts.parent')

@section('title')
    Daftar Perubahan Data
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css">
@endsection

@section('content')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1 class="text-info text-uppercase">Data perhitungan</h1>
            <div class="section-header-breadcrumb">
            </div>
          </div>

          <div class="section-body" >
            <div class="section-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Data perhitungan</h4>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-striped" id="example">
                            <thead>
                              <tr>
                                <th> No </td>
                                <th> bulan </th>
                                <th> tahun </th>
                                <th> nip </th>
                                <th> nama </th>
                                <th> golongan </th>
                                <th> istri </th>
                                <th> anak </th>
                                <th> gaji </th>
                                <th> tunjangan istri </th>
                                <th> tunjangan anak </th>
                                <th> tunjangan karir </th>
                                <th> tunjangan beras </th>
                                <th> pph </th>
                                <th> tak </th>
                                <th> lw pegawai </th>
                                <th> taperum </th>
                                <th> tpp </th>
                                <th> pph 21 tpp </th>
                                <th> penerimaan total </th>
                                <th> Option </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($hitung as $item)
                                <tr>
                                    <td> {{$loop->iteration }} </td>
                                    <td> {{$item->bulan}} </td>
                                    <td> {{$item->tahun}} </td>
                                    <td> {{$item->nip}} </td>
                                    <td> {{$item->nama}} </td>
                                    <td> {{$item->golongan}} </td>
                                    <td> {{$item->istri}} </td>
                                    <td> {{$item->anak}} </td>
                                    <td> {{$item->gaji}} </td>
                                    <td> {{$item->tunjangan_istri}} </td>
                                    <td> {{$item->tunjangan_anak}} </td>
                                    <td> {{$item->tunjangan_karir}} </td>
                                    <td> {{$item->tunjangan_beras}} </td>
                                    <td> {{$item->pph}} </td>
                                    <td> {{$item->tak}} </td>
                                    <td> {{$item->lw_pegawai}} </td>
                                    <td> {{$item->taperum}} </td>
                                    <td> {{$item->tpp}} </td>
                                    <td> {{$item->pph_21_tpp}} </td>
                                    <td> {{$item->penerimaan_total}} </td>
                                    <td> 
                                      <a href="{{ url("/hitung/$item->id") }}" class="btn btn-primary">Lihat</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
          </div>
        </section>
      </div>
@endsection

@section('script')
    
    {{-- import --}}

    <!-- Page Specific JS File -->
    <script src="{{ asset("assets/js/page/forms-advanced-forms.js")}}"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
      </script>

@endsection