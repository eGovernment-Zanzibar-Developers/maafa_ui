@extends('layout.app')
@section('title','Omba Kibali')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

        
            <div class="card card-body">
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Taarifa Binafsi</strong></li>
                        <li id="personal"><strong>Taarifa za Safari</strong></li>
                        <li id="payment"><strong>Taarifa za Fedha</strong></li>
                        <li id="confirm"><strong>Thibitisha Taarifa Ulizojaza</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Taarifa Binafsi:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Hatua 1 - 4</h2>
                                </div>
                            </div> 
                            <div class="row text-left">
                                <table class="table table-striped table-sm">
      
                                        <tr>
                                            <th>Jina Kamili</th>
                                            <td>Hussei Suleiman Mkendwa</td>
                                            <th>Cheo</th>
                                            <td>Afisa TEHAMA</td>
                                        </tr>
                                        <tr>
                                            <th>Wizara</th>
                                            <td>Katiba, Sheria Utumishi na Utawala Bora</td>
                                            <th>Idara</th>
                                            <td>Wakala wa Serikali Mtandao</td>
                                        </tr>
                                </table>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button" value="Mbele" />
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Taarifa za Safari</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Hatua 2 - 4</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-globe"></i>
                                            </div>
                                        </div>
                                        <select  class="form-control" >
                                            <option selected disabled>..Chagua nchi..</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-building-o"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Kampuni unayosafiria">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-certificate"></i>
                                            </div>
                                        </div>
                                        <select  class="form-control" >
                                            <option selected disabled>..Madhumuni ya Safari..</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-file"></i>
                                            </div>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Weka viambatanisho...</label>
                                          </div>
                                    </div>
                                </div>
                            </div>`
                        </div>
                        <div class="form-group text-left">
                            <div class="row">
                                <div class="col-md-6">
                                    <small>Tarehe ya kwenda</small>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="date" class="form-control" placeholder="Tarehe ya Kwenda">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <small>Tarehe ya kurudi</small>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="date" class="form-control" >
                                    </div>
                                </div>
                            
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        
                                        <textarea name="" id="" class="form-control" rows="6" placeholder="Faida/Tija inayotarajiwa kupatikana kutokana na safari hiyo"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        
                                        <textarea name="" id=""  class="form-control" rows="6" placeholder="Hasara inayotarajiwa kupatikana kutokana na kutofanyika safari hiyo"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button" value="Mbele" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Nyuma" />
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Gharama za Safari (USD):</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Hatua 3 - 4</h2>
                                </div>
                            </div> 
                            <table class="table table-striped table-bordered text-left table-sm">
                                <tr>
                                    <th>Anayegharamia Safari</th>
                                    <th>Nauli</th>
                                    <th>Posho</th>
                                    <th>Nyenginezo</th>
                                    <th>Jumla</th>
                                </tr>
                                <tr>
                                    <td>Serikali</td>
                                    <td><input type="number" class="form-control from-control-sm"></td>
                                    <td><input type="number" class="form-control from-control-sm"></td>
                                    <td><input type="number" class="form-control from-control-sm"></td>
                                    <td><input type="number" class="form-control from-control-sm" disabled></td>
                                    
                                </tr>
                                <tr>
                                    <td>Mfadhili/Mhisani</td>
                                    <td><input type="number" class="form-control from-control-sm"></td>
                                    <td><input type="number" class="form-control from-control-sm"></td>
                                    <td><input type="number" class="form-control from-control-sm"></td>
                                    <td><input type="number" class="form-control from-control-sm" disabled></td>
                                </tr>
                                <tr>
                                    <td>Binafsi</td>
                                      <td><input type="number" class="form-control from-control-sm"></td>
                                    <td><input type="number" class="form-control from-control-sm"></td>
                                    <td><input type="number" class="form-control from-control-sm"></td>
                                    <td><input type="number" class="form-control from-control-sm" disabled></td>
                                </tr>
                                <tr>
                                    <th>Jumla</th>
                                    <td><input type="number" class="form-control from-control-sm" disabled></td>
                                    <td><input type="number" class="form-control from-control-sm" disabled></td>
                                    <td><input type="number" class="form-control from-control-sm" disabled></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div> 
                        <input type="button" name="next" class="next action-button" value="Mbele" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Nyuma" />
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Thibitisha Taarifa Ulizojaza:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Hatua 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Tuma" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Nyuma" />
                    </fieldset>
                </form>
            </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   var current_fs, next_fs, previous_fs; //fieldsets
   var opacity;
   var current = 1;
   var steps = $("fieldset").length;
   
   setProgressBar(current);
   
   $(".next").click(function(){
   
   current_fs = $(this).parent();
   next_fs = $(this).parent().next();
   
   //Add Class Active
   $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
   
   //show the next fieldset
   next_fs.show();
   //hide the current fieldset with style
   current_fs.animate({opacity: 0}, {
   step: function(now) {
   // for making fielset appear animation
   opacity = 1 - now;
   
   current_fs.css({
   'display': 'none',
   'position': 'relative'
   });
   next_fs.css({'opacity': opacity});
   },
   duration: 500
   });
   setProgressBar(++current);
   });
   
   $(".previous").click(function(){
   
   current_fs = $(this).parent();
   previous_fs = $(this).parent().prev();
   
   //Remove class active
   $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
   
   //show the previous fieldset
   previous_fs.show();
   
   //hide the current fieldset with style
   current_fs.animate({opacity: 0}, {
   step: function(now) {
   // for making fielset appear animation
   opacity = 1 - now;
   
   current_fs.css({
   'display': 'none',
   'position': 'relative'
   });
   previous_fs.css({'opacity': opacity});
   },
   duration: 500
   });
   setProgressBar(--current);
   });
   
   function setProgressBar(curStep){
   var percent = parseFloat(100 / steps) * curStep;
   percent = percent.toFixed();
   $(".progress-bar")
   .css("width",percent+"%")
   }
   
   $(".submit").click(function(){
   return false;
   })
   
   });
</script>
@endsection