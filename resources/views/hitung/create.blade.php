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
            <h1 class="text-info text-uppercase">Hitung</h1>
            <div class="section-header-breadcrumb">
              
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
                              <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                            </div>
                            <div class="form-group col-12">
                              <label for="last_name">tahun</label>
                              <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">nama</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">nip</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">golongan</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">istri</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">anak</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">gaji</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">Tunjangan istri</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">tunjangan anak</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">tunjangan karir</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">tunjangan beras</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">pph</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">Tunjangan Ansuransi dan kesehatan</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                          </div>
        
                          <div class="form-group">
                            <label for="email">Instansi</label>
                            <input id="email" type="email" class="form-control" name="email">
                            <div class="invalid-feedback">
                            </div>
                          </div>
    
                        </form>
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Profil Anda</h4>
                    </div>l
                        <div class="card-body">
                          <div class="row">
                            <div class="form-group col-12">
                                <label for="last_name">lw pegawai</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">taperum</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">TPP</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                          </div>
        
                          <div class="form-group">
                            <label for="email">Instansi</label>
                            <input id="email" type="email" class="form-control" name="email">
                            <div class="invalid-feedback">
                            </div>
                          </div>
        
                        </form>
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
                                <label for="last_name">Penerimaan Total</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                          </div>
    
                        </form>
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                          Buat
                        </button>
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