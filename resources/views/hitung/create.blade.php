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
          <form action="{{ url("/hitung/create") }}" method="post">
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
                              <input required id="frist_name" type="text" class="form-control" name="bulan" value="{{ date("m") }}">
                            </div>
                            <div class="form-group col-12">
                              <label for="last_name">tahun</label>
                              <input required id="last_name" type="text" class="form-control" name="tahun" value="{{  date("Y") }}">
                            </div>

                            <div class="form-group col-12">
                              <label>Nip</label>
                              <input required type="text" class="form-control" name="nip" id="nip">
                            </div>

                            <div class="form-group col-12">
                                <label for="last_name">nama</label>
                                <input required type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">golongan</label>
                                <input required type="text" class="form-control" name="golongan" id="golongan">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">istri</label>
                                <input required type="text" class="form-control" name="istri" id="istri">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">anak</label>
                                <input required type="text" class="form-control" name="anak" id="anak">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">gaji</label>
                                <input required type="text" class="form-control" name="gaji" id="gaji">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">Tunjangan istri</label>
                                <input required type="text" class="form-control" name="tunjangan_istri" id="tunjangan_istri">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">tunjangan anak</label>
                                <input required type="text" class="form-control" name="tunjangan_anak" id="tunjangan_anak">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">tunjangan karir</label>
                                <input required type="text" class="form-control" name="tunjangan_karir" id="tunjangan_karir">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">tunjangan beras</label>
                                <input required type="text" class="form-control" name="tunjangan_beras" id="tunjangan_beras">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">pph</label>
                                <input required type="text" class="form-control" name="pph" id="pph">
                            </div>
                            <div class="form-group col-12">
                                <label for="last_name">Tunjangan Ansuransi dan kesehatan</label>
                                <input required type="text" class="form-control" name="tak" id="tak">
                            </div>

                            <div class="form-group col-12">
                              <label for="last_name">lw pegawai</label>
                              <input required id="lw_pegawai" type="text" class="form-control" name="lw_pegawai">
                          </div>
                          <div class="form-group col-12">
                              <label for="taperum">taperum</label>
                              <input required id="taperum" type="text" class="form-control" name="taperum">
                          </div>
                          <div class="form-group col-12">
                            <label for="gaji_netto">Gaji Netto</label>
                            <input required id="gaji_netto" type="text" class="form-control" name="gaji_netto">
                          </div>
                          <div class="form-group col-12">
                              <label for="tpp">TPP</label>
                              <input required id="tpp" type="text" class="form-control" name="tpp">
                          </div>
                          <div class="form-group col-12">
                              <label for="pph_21_tpp">PPH 21 TPP</label>
                              <input required id="pph_21_tpp" type="text" class="form-control" name="pph_21_tpp">
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
                                <input required id="penerimaan_total" type="text" class="form-control" name="penerimaan_total">
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>

              @csrf
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
          </form>
          </div>
        </section>
      </div>
@endsection

@section('script')
    <!-- Page Specific JS File -->
    <script src="{{ asset("assets/js/page/forms-advanced-forms.js")}}"></script>

    <script>
      $(document).ready(function(){

        $("#nip").change(function(){

          var id = $('#nip').val();

          $.ajax({
            type  :"GET",
            url   : `{{url("/api2/pegawai/")}}` +"/" +id,
            dataType: "json"

          }).done(function(data){
            $("#nama").val(data.pegawai.nama)
            $("#golongan").val(data.pegawai.pangkat_gol)

            $("#istri").val(data.keluarga.jml_istri)
            $("#anak").val(data.keluarga.jml_anak)
            $("#gaji").val(data.gajiPokok.gaji_pokok)

            var t_istri  = 0.1  * parseFloat(data.gajiPokok.gaji_pokok) 
                                * parseFloat(data.keluarga.jml_istri)
            var t_anak   = 0.02 * parseFloat(data.gajiPokok.gaji_pokok) 
                                * parseFloat(data.keluarga.jml_anak)
            var t_beras  = 67960 * (parseFloat(data.keluarga.jml_istri) 
                                  + parseFloat(data.keluarga.jml_anak) + 1)

            $("#tunjangan_istri").val(t_istri)
            $("#tunjangan_anak").val(t_anak)
            $("#tunjangan_beras").val(t_beras)
            $("#tunjangan_karir").val(data.tunjanganKarir.tunjangan)

            var result_lw_pe      = 0.1 * (parseFloat($("#gaji").val())
                                        +  parseFloat($("#tunjangan_istri").val()) 
                                        +  parseFloat($("#tunjangan_anak").val()))

            $("#lw_pegawai").val(Math.round(result_lw_pe))
            $("#taperum").val(parseFloat(data.taperum.potongan))
            $("#gaji_netto").val(parseFloat(data.taperum.potongan) + Math.round(result_lw_pe))
            $("#pph_21_tpp").val((parseFloat(data.golongan.persen) 
                                * parseFloat(data.gajiPokok.gaji_pokok)))

          }).fail(function(err){
            console.log(err.statusText)
          })

        })

          $("#tak").change(function(){
            var tg = $("#tak").val()

            var result_tpp = parseFloat($("#tunjangan_istri").val()) 
                           + parseFloat($("#tunjangan_anak").val()) 
                           + parseFloat($("#tunjangan_karir").val()) 
                           + parseFloat($("#tunjangan_beras").val()) 
                           + parseFloat($("#pph").val()) 
                           + parseFloat($("#tak").val())
            
            $("#tpp").val(result_tpp)
            var pph_21_tpp = parseFloat($("#pph_21_tpp").val())
            var result_tpp_metto  = result_tpp - pph_21_tpp

            $("#penerimaan_total").val(result_tpp_metto)
          })

    })
    </script>
@endsection