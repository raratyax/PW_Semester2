<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Form Pendaftaran IT Club</h5>
              </div>
              <div class="card-body">
                  <?php 
                    $ar_prodi = ["SI"=>"Sistem informasi","TI"=>"Teknik Informatika","BD"=>"Bisnis Digital"];
                    $ar_skill = ["HTML"=>10,"CSS"=>10,"Javascript"=>20,"RWD Bootstrap"=>20,"PHP"=>30,"Python"=>30,"Java"=>50];
                    $ar_domisili = ["Jakarta","Bogor","Depok","Tangerang","Bekasi","Lainnya"]
                  ?>
                  <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12 mt-4">
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="form-group row">
                                    <label for="nim" class="col-4 col-form-label">NIM</label> 
                                    <div class="col-8">
                                    <div class="input-group">
                                        <input id="nim" name="nim" type="text" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                                    <div class="col-8">
                                    <div class="input-group">
                                        <input id="nama" name="nama" type="text" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Jenis Kelamin</label> 
                                    <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki"> 
                                        <label for="jk_0" class="custom-control-label">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
                                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                                    <div class="col-8">
                                    <select id="prodi" name="prodi" class="custom-select">
                                      <?php 
                                      foreach($ar_prodi as $k => $v){
                                        echo "<option value='$k'>$v</option>";
                                      }
                                      ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Skill</label> 
                                    <div class="col-8">
                                      <?php 
                                      foreach($ar_skill as $k => $v){
                                          echo "<div class='custom-control custom-checkbox custom-control-inline'>";
                                          echo "<input name='skill[$k]' id='$k' type='checkbox' class='custom-control-input' value='$v'>";
                                          echo "<label for='$k' class='custom-control-label'>$k</label>";
                                          echo "</div>";
                                      }
                                      ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                                    <div class="col-8">
                                        <select id="domisili" name="domisili" class="custom-select">
                                          <?php 
                                          foreach($ar_domisili as $dom){
                                            echo "<option value='$dom'>$dom</option>";
                                          }
                                          ?>
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label> 
                                    <div class="col-8">
                                    <div class="input-group">
                                        <input id="email" name="email" type="text" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php 

                            function skor_skill($skill){
                                $total = 0;
                                foreach($skill as $k => $v){
                                    $total = $total + $v;
                                }
                                return $total;

                            }

                            function kategori_skill($total){
                                if($total <= 0){
                                    $predikat = "Tidak memadai";
                                }else if($total <= 40){
                                    $predikat = "Kurang";
                                }else if($total <= 60){
                                    $predikat = "Cukup";
                                }else if($total <= 100){
                                    $predikat = "Baik";
                                }else{
                                    $predikat = "Sangat Baik";
                                }
                                return $predikat;
                            }
                            if(isset($_POST["submit"])){
                              $nama = $_POST["nama"];
                              $jk = $_POST["jk"];
                              $prodi = $_POST["prodi"];
                              $domisili = $_POST["domisili"];
                              $skill = $_POST["skill"];
                              $skor = skor_skill($skill);
                              $predikat = kategori_skill($skor);

                              echo $skor;
                              echo $predikat;


                            }
                                                    
                            
                            ?>
                        </div>
                      </div>
                  </div>

              </div>
          </div>
        </div>
        </div>
    </main>
<?php include_once('footer.php'); ?>


