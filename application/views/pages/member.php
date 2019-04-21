<div class="bg-1nya">
    <div class="background-yellow">
        <div class="height-55">
        </div>
        <div class="bg-breadcrumb">
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url() ;?>">HOME</a></li>
              &nbsp;&nbsp;>&nbsp;&nbsp;
              <li class="active">MEMBER</li>
            </ol>
        </div>
        <div class="mx-auto back-blok-rightcont-gold">
            <div class="container">
              <div class="row mx-auto">
                <div class="col-md-6">
                    <div class="height-40"></div>
                    <span class="top-title-member">Sudah punya account?</span>
                    <h1>Login Juragan Cash</h1>
                    <hr>
                    <form class="form-horizontal" action="<?php echo base_url() ?>Cusers/login" method="post">
                      <div class="form-group ">
                        <div class="row">
                            <label class="control-label col-sm-4 text-right text-dimember" for="nama">Email
                              <span class="text-danger text-dimember">*</span>
                            </label>
                            <div class="col-sm-5">
                              <input type="text" name="email" class="form-control text-dimember">
                            </div>
                        </div>
                      </div>
                      <div class="form-group ">
                        <div class="row">
                            <label class="control-label col-sm-4 text-right text-dimember" for="nama">Password
                              <span class="text-danger text-dimember">*</span>
                            </label>
                            <div class="col-sm-5">
                              <input type="password" name="password" class="form-control text-dimember">
                            </div>
                        </div>
                      </div>
                      <div class="form-group ">
                        <div class="row">
                            <label class="control-label col-sm-4 text-align-right" for="nama">
                            </label>
                            <div class="col-sm-5 text-dimember">
            						    	<button type="submit" class="btn btn-default text-dimember bt-yellow-addcart">LOGIN</button>
            						    	&nbsp;&nbsp;&nbsp;&nbsp;<a  href="#">Lupa Password</a>
                            </div>
                        </div>
                      </div>

                    </form>
                </div>
                <div class="col-md-6">
                  <div class="height-40"></div>
                  <span class="top-title-member">Belum punya account?</span>
                  <h1>Registrasi Juragan Cash</h1>
                  <hr>
                  <form class="" action="<?php echo base_url() ?>Cusers/aksi_tambah_member" method="post">
                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Email
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="email" class="form-control text-dimember">

                          </div>
                          <div class="col-sm-3" style="padding-left:0px; line-height: 2.5;">
                        	<a style="border-radius: 20px; background-color: red; color: #fff; line-height: 1; margin-top:-12px; padding: 2px 5px;"
                        		role="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                        		title="" data-original-title="Silahkan masukkan alamat email yang Valid, karena kami akan mengirimkan LINK aktivasi akun JuraganCash
                        		ke alamat email yg anda masukkan">
                        		<i style="font-size: 14px;" class="fa fa-question"></i>
                        	</a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Password
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="password" class="form-control text-dimember">

                          </div>
                          <div class="col-sm-3" style="padding-left:0px; line-height: 2.5;">
                        	<a style="border-radius: 20px; background-color: red; color: #fff; line-height: 1; margin-top:-12px; padding: 2px 5px;"
                        		role="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                        		title="" data-original-title="Silahkan masukkan alamat email yang Valid, karena kami akan mengirimkan LINK aktivasi akun JuraganCash
                        		ke alamat email yg anda masukkan">
                        		<i style="font-size: 14px;" class="fa fa-question"></i>
                        	</a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Ulangi Password
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="ulangi_password" class="form-control text-dimember">

                          </div>
                          <!-- <div class="col-sm-3" style="padding-left:0px; line-height: 2.5;">
                        	<a style="border-radius: 20px; background-color: red; color: #fff; line-height: 1; margin-top:-12px; padding: 2px 5px;"
                        		role="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                        		title="" data-original-title="Silahkan masukkan alamat email yang Valid, karena kami akan mengirimkan LINK aktivasi akun JuraganCash
                        		ke alamat email yg anda masukkan">
                        		<i style="font-size: 14px;" class="fa fa-question"></i>
                        	</a>
                        </div> -->
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">PIN
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="pin" class="form-control text-dimember">

                          </div>
                          <div class="col-sm-3" style="padding-left:0px; line-height: 2.5;">
                        	<a style="border-radius: 20px; background-color: red; color: #fff; line-height: 1; margin-top:-12px; padding: 2px 5px;"
                        		role="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                        		title="" data-original-title="Silahkan masukkan alamat email yang Valid, karena kami akan mengirimkan LINK aktivasi akun JuraganCash
                        		ke alamat email yg anda masukkan">
                        		<i style="font-size: 14px;" class="fa fa-question"></i>
                        	</a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Ulangi PIN
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="ulangi_pin" class="form-control text-dimember">

                          </div>
                          <!-- <div class="col-sm-3" style="padding-left:0px; line-height: 2.5;">
                        	<a style="border-radius: 20px; background-color: red; color: #fff; line-height: 1; margin-top:-12px; padding: 2px 5px;"
                        		role="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                        		title="" data-original-title="Silahkan masukkan alamat email yang Valid, karena kami akan mengirimkan LINK aktivasi akun JuraganCash
                        		ke alamat email yg anda masukkan">
                        		<i style="font-size: 14px;" class="fa fa-question"></i>
                        	</a>
                        </div> -->
                      </div>
                    </div>
                    <hr>
                    <!-- <br> -->
                    <h4>DATA MEMBER</h4>
                    <br>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Nama Depan
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="nama_depan" class="form-control text-dimember">

                          </div>
                          <div class="col-sm-3" style="padding-left:0px; line-height: 2.5;">
                        	<a style="border-radius: 20px; background-color: red; color: #fff; line-height: 1; margin-top:-12px; padding: 2px 5px;"
                        		role="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                        		title="" data-original-title="Silahkan masukkan alamat email yang Valid, karena kami akan mengirimkan LINK aktivasi akun JuraganCash
                        		ke alamat email yg anda masukkan">
                        		<i style="font-size: 14px;" class="fa fa-question"></i>
                        	</a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Nama Belakang
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="nama_belakang" class="form-control text-dimember">

                          </div>
                          <div class="col-sm-3" style="padding-left:0px; line-height: 2.5;">
                        	<a style="border-radius: 20px; background-color: red; color: #fff; line-height: 1; margin-top:-12px; padding: 2px 5px;"
                        		role="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                        		title="" data-original-title="Silahkan masukkan alamat email yang Valid, karena kami akan mengirimkan LINK aktivasi akun JuraganCash
                        		ke alamat email yg anda masukkan">
                        		<i style="font-size: 14px;" class="fa fa-question"></i>
                        	</a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Handphone
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="handphone" class="form-control text-dimember">
                          </div>
                          <div class="col-sm-3" style="padding-left:0px; line-height: 2.5;">
                        	<a style="border-radius: 20px; background-color: red; color: #fff; line-height: 1; margin-top:-12px; padding: 2px 5px;"
                        		role="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                        		title="" data-original-title="Silahkan masukkan alamat email yang Valid, karena kami akan mengirimkan LINK aktivasi akun JuraganCash
                        		ke alamat email yg anda masukkan">
                        		<i style="font-size: 14px;" class="fa fa-question"></i>
                        	</a>
                        </div>
                      </div>
                    </div>


                    <!-- <div class="form-group">
                      <div class="row">
                        <label class="control-label col-sm-4 text-right text-dimember" for="nama">Tanggal Lahir
                          <span class="text-danger text-dimember">*</span>
                        </label>
                        <div class="col-sm-2">
                          <select class="form-control date-input text-dimember"  name="MeMember[DoB_d]" id="MeMember_DoB_d">
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                          </select>
                        </div>
                        <div class="col-sm-2">
                          <select class="form-control date-input text-dimember" name="MeMember[DoB_m]" id="MeMember_DoB_m">
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                          </select>
                        </div>
                        <div class="col-sm-3">
                          <select class="form-control date-input text-dimember" name="MeMember[DoB_y]" id="MeMember_DoB_y">
                              <option value="2006">2006</option>
                              <option value="2005">2005</option>
                              <option value="2004">2004</option>
                              <option value="2003">2003</option>
                              <option value="2002">2002</option>
                              <option value="2001">2001</option>
                              <option value="2000">2000</option>
                              <option value="1999">1999</option>
                              <option value="1998">1998</option>
                              <option value="1997">1997</option>
                              <option value="1996">1996</option>
                              <option value="1995">1995</option>
                              <option value="1994">1994</option>
                              <option value="1993">1993</option>
                              <option value="1992">1992</option>
                              <option value="1991">1991</option>
                              <option value="1990">1990</option>
                              <option value="1989">1989</option>
                              <option value="1988">1988</option>
                              <option value="1987">1987</option>
                              <option value="1986">1986</option>
                              <option value="1985">1985</option>
                              <option value="1984">1984</option>
                              <option value="1983">1983</option>
                              <option value="1982">1982</option>
                              <option value="1981">1981</option>
                              <option value="1980">1980</option>
                              <option value="1979">1979</option>
                              <option value="1978">1978</option>
                              <option value="1977">1977</option>
                              <option value="1976">1976</option>
                              <option value="1975">1975</option>
                              <option value="1974">1974</option>
                              <option value="1973">1973</option>
                              <option value="1972">1972</option>
                              <option value="1971">1971</option>
                              <option value="1970">1970</option>
                              <option value="1969">1969</option>
                              <option value="1968">1968</option>
                              <option value="1967">1967</option>
                              <option value="1966">1966</option>
                              <option value="1965">1965</option>
                              <option value="1964">1964</option>
                              <option value="1963">1963</option>
                              <option value="1962">1962</option>
                              <option value="1961">1961</option>
                              <option value="1960">1960</option>
                              <option value="1959">1959</option>
                              <option value="1958">1958</option>
                              <option value="1957">1957</option>
                              <option value="1956">1956</option>
                              <option value="1955">1955</option>
                              <option value="1954">1954</option>
                              <option value="1953">1953</option>
                              <option value="1952">1952</option>
                              <option value="1951">1951</option>
                              <option value="1950">1950</option>
                              <option value="1949">1949</option>
                              <option value="1948">1948</option>
                              <option value="1947">1947</option>
                              <option value="1946">1946</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Jenis Kelamin
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <select class="form-control text-dimember" name="MeMember[Sex]" id="MeMember_Sex">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                          </div>
                      </div>
                    </div> -->

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Alamat
                            <span class="text-danger text-dimember">*</span>
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="alamat" class="form-control text-dimember">
                          </div>
                      </div>
                    </div>



                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Provinsi
                            <!-- <span class="text-danger text-dimember">*</span> -->
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="provinsi" class="form-control text-dimember">
                          </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Kota
                            <!-- <span class="text-danger text-dimember">*</span> -->
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="kota" class="form-control text-dimember">
                          </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">Kode POS
                            <!-- <span class="text-danger text-dimember">*</span> -->
                          </label>
                          <div class="col-sm-5">
                            <input type="text" name="kodepos" class="form-control text-dimember">
                          </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">
                            <!-- <span class="text-danger text-dimember">*</span> -->
                          </label>
                          <div class="col-sm-6 text-dimember">
                            <div class="alert alert-warning">
											         <p>Dengan registrasi di Juragan Cash, Saya sudah membaca dan setuju dengan
                                 <a href="#" target="_blank">Syarat dan Ketentuan yang berlaku</a>.
                               </p>
					                   </div>
                          </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <div class="row">
                          <label class="control-label col-sm-4 text-right text-dimember" for="nama">
                            <!-- <span class="text-danger text-dimember">*</span> -->
                          </label>
                          <div class="col-sm-5 text-dimember">
                            <button type="submit" class="btn btn-default text-dimember bt-yellow-addcart">SIGN UP</button>
                          </div>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
        </div>
        <div class="mx-auto backbottom-right-contgold">
        </div>
        <div class="height-55">
        </div>
    </div>
</div>
