@extends('layouts.parent')

@section('title')
    Hitung
@endsection

@section('style')
    
@endsection

@section('content')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-breadcrumb">
                <h1>Data hitung</h1>
            </div>
          </div>

          <div class="section-body" >
            <h2 class="section-title">Hitung Gaji</h2>
            <div class="container">    
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Hitung</h4>
                      </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-12">
                                <label for="frist_name">bulan</label>
                                <input disabled  id="frist_name" type="text" class="form-control" name="bulan" value="{{ $hitung->bulan }}">
                              </div>
                              <div class="form-group col-12">
                                <label for="last_name">tahun</label>
                                <input disabled  id="last_name" type="text" class="form-control" name="tahun" value="{{  $hitung->tahun }}">
                              </div>
  
                              <div class="form-group col-12">
                                <label>Nip</label>
                                <input disabled  type="text" class="form-control" name="nip" id="nip" value="{{ $hitung->nip }}">
                              </div>
  
                              <div class="form-group col-12">
                                  <label for="last_name">nama</label>
                                  <input disabled  type="text" class="form-control" name="nama" id="nama" value="{{ $hitung->nama }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">golongan</label>
                                  <input disabled  type="text" class="form-control" name="golongan" id="golongan" value="{{ $hitung->golongan }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">istri</label>
                                  <input disabled  type="text" class="form-control" name="istri" id="istri" value="{{ $hitung->istri }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">anak</label>
                                  <input disabled  type="text" class="form-control" name="anak" id="anak" value="{{ $hitung->anak }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">gaji</label>
                                  <input disabled  type="text" class="form-control" name="gaji" id="gaji" value="{{ $hitung->gaji }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">Tunjangan istri</label>
                                  <input disabled  type="text" class="form-control" name="tunjangan_istri" id="tunjangan_istri" value="{{ $hitung->tunjangan_istri }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">tunjangan anak</label>
                                  <input disabled  type="text" class="form-control" name="tunjangan_anak" id="tunjangan_anak" value="{{ $hitung->tunjangan_anak }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">tunjangan karir</label>
                                  <input disabled  type="text" class="form-control" name="tunjangan_karir" id="tunjangan_karir" value="{{ $hitung->tunjangan_karir }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">tunjangan beras</label>
                                  <input disabled  type="text" class="form-control" name="tunjangan_beras" id="tunjangan_beras" value="{{ $hitung->tunjangan_beras }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">pph</label>
                                  <input disabled  type="text" class="form-control" name="pph" id="pph" value="{{ $hitung->pph }}">
                              </div>
                              <div class="form-group col-12">
                                  <label for="last_name">Tunjangan Ansuransi dan kesehatan</label>
                                  <input disabled  type="text" class="form-control" name="tak" id="tak" value="{{ $hitung->tak }}">
                              </div>
  
                              <div class="form-group col-12">
                                <label for="last_name">lw pegawai</label>
                                <input disabled  id="lw_pegawai" type="text" class="form-control" name="lw_pegawai" value="{{ $hitung->lw_pegawai }}">
                            </div>
                            <div class="form-group col-12">
                                <label for="taperum">taperum</label>
                                <input disabled  id="taperum" type="text" class="form-control" name="taperum" value="{{ $hitung->taperum}}">
                            </div>
                            <div class="form-group col-12">
                                <label for="tpp">TPP</label>
                                <input disabled  id="tpp" type="text" class="form-control" name="tpp" value="{{ $hitung->tpp}}">
                            </div>
                            <div class="form-group col-12">
                                <label for="pph_21_tpp">PPH 21 TPP</label>
                                <input disabled  id="pph_21_tpp" type="text" class="form-control" name="pph_21_tpp" value="{{ $hitung->pph_21_tpp }}">
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-12">
                                  <label for="penerimaan_total">Penerimaan Total</label>
                                  <input disabled  id="penerimaan_total" type="text" class="form-control" name="penerimaan_total">
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
  
                <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                          <a href="{{ url("/hitung/cetak/$hitung->id") }}" class="btn btn-primary btn-lg btn-block">Cetak</a>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </section>
      </div>
@endsection

@section('script')
    <!-- Page Specific JS File -->
    <script src="{{ asset("assets/js/page/forms-advanced-forms.js")}}"></script>
@endsection