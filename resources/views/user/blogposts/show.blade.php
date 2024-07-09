@include('header')
<div class="container">
    <h1>{{ $blogPost->title }}</h1>
    <img src="{{ env('AWS_URL') . '/' . $blogPost->image }}" class="img-fluid" alt="{{ $blogPost->title }}">
    <p>{{ $blogPost->content }}</p>
    <p><strong>Author:</strong> {{ $blogPost->author }}</p>
</div>

 @include('footer')
    <style>#popup_11 .theme-title .jwset{font-size:px;font-family:;font-weight:;line-height:;letter-spacing:}#popup_11 .theme-subtitle .jwset{font-size:px;font-family:;font-weight:;line-height:;letter-spacing:}</style><style>.banner2-popup{position:fixed;top:0;left:0;z-index:9999;background:rgba(0,0,0,.7);width:100%;height:100vh;display:none}.banner2-popup-content{width:60%;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);z-index:9999;padding:0;position:relative;border:2px solid var(--white);max-height:90vh;overflow-y:auto;overflow-x:hidden}.banner2-popup-content2{width:40%}.banner2-popup-content::-webkit-scrollbar{width:1px}.close-popup{position:absolute;top:0;right:0;z-index:9999}.close-popup a{padding:4px 8px;font-size:13px;color:var(--color1);background:var(--color5)}.banner2-list{margin-bottom:1rem}@media(max-width:768px){.banner2-popup-content{width:90%}}.banner2-form2 li{list-style:none;margin-bottom:1rem}.banner2-form2 label{margin-bottom:.5rem;font-size:13px}.banner2-form2 .jw_dynamic_form li{width:100%}.banner2-form2 form .dynamicField input{margin-bottom:0rem}.banner2-form2 input,.banner2-form2 select,.banner2-form2 textarea{width:100%;padding:.8rem;background:none;border:1px solid #bbb}.banner2-form2 input:focus,.banner2-form2 textarea:focus,.banner2-form2 select:focus{border-color:var(--color1);outline:0}.banner2-form2 input::placeholder{font-size:12px}.banner2-form2 input[type=submit]{background:var(--color1);color:var(--color5);width:100%;padding:1rem 3rem}.banner2-form2 input[type=submit]:hover{background:var(--color5);color:var(--color1);border:1px solid var(--color1)}.banner2-media img{width:100%;height:100%;object-fit:cover}</style><div class="banner2-popup" id="popup_11" data-popup="248962"><div class="banner2-popup-content background5 banner2-popup-content2"><div class="close-popup"><a href="#" class="popup-close" id="popup-close"><i class="fa-solid fa-x"></i></a></div><div class="row "><div class="col-sm-6 d-flex flex-column justify-content-center flex-grow-1"><div class="p-3"><div class="fontStyle3 mg-0 theme-title">Book a Test</div></div><div class="banner2-form2 p-4 fontStyle7"><form class="jw_dynamic_form" name="form_v_11"><signature style="display:none">W10=</signature><li class="dynamicField" data-input="text" data-mode="system"><label>Full Name</label><input type="text" data-name="firstName" date-mode="system" data-input="text" class="jw_dynamic_input " tooltip="" placeholder="Enter Name" maxlength="100" errmsg="" required></li><li class="dynamicField" data-input="email" data-mode="system"><label>Email</label><input type="email" data-name="email" date-mode="system" data-input="email" class="jw_dynamic_input " tooltip="" placeholder="Enter Your Email" maxlength="100" errmsg="" required></li><li class="dynamicField" data-input="tel" data-mode="system"><label>Mobile Number</label><input type="tel" data-name="mobileNumber" date-mode="system" data-input="tel" class="jw_dynamic_input " tooltip="" placeholder="Enter Number" maxlength="100" errmsg="" required></li><li class="dynamicField" data-input="text" data-mode="system"><label>Your location</label><input type="text" data-name="subject" date-mode="system" data-input="text" class="jw_dynamic_input " tooltip="" placeholder="Enter Location" maxlength="100" errmsg="" required></li><li class="dynamicField" data-input="singlefile" data-mode="normal"><label>Upload Prescription</label><input type="file" data-name="UploadPrescription_683" name="UploadPrescription_683" data-input="singlefile" date-mode="normal" class="jw_dynamic_input" name="jw_files[]" accept=".pdf,.doc,.docx,.txt,.xls,.ppt"/></li><li style="display:none;" class="dynamicField otpcode" data-input="otpcode" data-mode="system"><label>Enter OTP</label><input type="text" data-name="otpcode" date-mode="system" data-input="text" class="jw_dynamic_input " tooltip="" placeholder="Enter OTP" maxlength="6" minlength="3" errmsg=""><a href="javascript:void(0);" class="_back2form">Change Email</a></li><input type="hidden" class="_tx_" value="76657"><li><input type="submit" class="see-button" value= "Book Now"></li></form></div></div></div></div></div><script>try{
$('#popup_11 .popup-close').click(function(event){
        event.preventDefault();
        $('#popup_11').fadeOut();
    });
  }
  catch(err) {
  console.log(err.message);
}</script><popups class='see-dp-none'></popups><div id='jw-popup-overlay'></div><div id="jw-popup-container"><div id="jw-popup-close" class="fade">&#10006;</div><div id="jw-popup-iframe-container"></div></div>
    </div>


                <style>
                  .floating-left{position: fixed;bottom: 10px;left: 20px; z-index: 999999999999;}
                  .floating-right{position: fixed;bottom: 10px;right: 20px; z-index: 999999999999;}
                  .floating-left .see_float_btn,.floating-right .see_float_btn{border-radius: 50%;height: 60px;width: 60px;display: flex;align-items: center;justify-content: center;color: var(--see_light_color);margin: 5px 0;}
                  .see_float_btn.small{height: 40px;width: 40px;}
                  .see_float_btn.large{height: 60px;width: 60px;font-size: 30px;}
                  .see_float_btn.medium{ height: 50px;width: 50px;font-size: 25px;}
                  .see_float_btn .comm-btn{display: flex;align-items: center;justify-content: center;}
                  .jwFloatApp[data-type="scrollTop"]{opacity:0;}
                  @keyframes bounce{0%,20%,50%,80%,100%{transform:translateY(0)}40%{transform:translateY(-15px)}60%{transform:translateY(-7px)}}
                </style>
                <script>
                    function scrollToTop() {
                      // Define the duration of the scroll animation (in milliseconds)
                      const duration = 500; // Adjust this value to control the scroll speed
                      const start = window.scrollY;
                      const startTime = performance.now();
                      function step(timestamp) {
                        const currentTime = timestamp - startTime;
                        window.scrollTo(0, easeInOutCubic(currentTime, start, -start, duration));
                        if (currentTime < duration) {
                          window.requestAnimationFrame(step);
                        }
                      }
                      function easeInOutCubic(t, b, c, d) {
                        t /= d / 2;
                        if (t < 1) return (c / 2) * t * t * t + b;
                        t -= 2;
                        return (c / 2) * (t * t * t + 2) + b;
                      }
                      window.requestAnimationFrame(step);
                    }
                    
                   function fadeIn(element) {
                        element.style.transition = "opacity 0.5s";
                        element.style.opacity = "1";
                    }
                    
                    function fadeOut(element) {
                        element.style.transition = "opacity 0.5s";
                        element.style.opacity = "0";
                    }
                    
                    function handleScroll() {
                        var jwFloatAppElements = document.querySelectorAll('.jwFloatApp[data-type="scrollTop"]');
                        if (window.scrollY < 180) {
                            jwFloatAppElements.forEach(function (element) {
                                fadeOut(element); // Apply fadeOut effect
                            });
                        } else {
                            jwFloatAppElements.forEach(function (element) {
                                fadeIn(element); // Apply fadeIn effect
                            });
                        }
                    }
                    window.addEventListener("scroll", handleScroll);
                    document.addEventListener("DOMContentLoaded", handleScroll);
                    
                    
                </script>
                                    <div class="floating-right">
                                                          <a class="jwFloatApp" data-type="scrollTop" href="javascript:scrollToTop();" target="_self">
                                    <div class="see_float_btn medium"  style="background:#7e75ff;color:#ffffff;animation: bounce 1s infinite;">
                                      <div class="comm-btn">
                                        <i class="fas fa-arrow-up"></i>
                                      </div>
                                    </div>  
                                  </a>
                                                                  <a class="jwFloatApp" data-type="whatsapp" href="https://wa.me/917055001141" target="_blank">
                                    <div class="see_float_btn large"  style="background:#25d366;color:#ffffff;animation: bounce 1s infinite;">
                                      <div class="comm-btn">
                                        <i class="fab fa-whatsapp"></i>
                                      </div>
                                    </div>  
                                  </a>
                                                    </div>
                    <script src="ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" defer></script> 
<script>
   
        if( $('form.jw_dynamic_form').length > 0){
            $(document).on('input','.jw_dynamic_input[data-name]',function(){
                let xfs = $(this).closest('form.jw_dynamic_form');
                let xsc_r = xfs.children('signature').text();
                if(xsc_r != ''){
                    userRules = atob(xsc_r);
                    userRules = $.parseJSON(userRules);
                    //console.log(userRules);
                    if(userRules.conditions){
                        userRules.conditions.forEach(function (rule) {
                        let selcInput =  xfs.find(`.jw_dynamic_input[data-name="${rule.if}"]`).attr('data-input');
                        let selectedValue = xfs.find(`.jw_dynamic_input[data-name="${rule.if}"]`).val();
                         if(selcInput == "radio" || selcInput == "multicheckbox" || selcInput == "checkbox"){
                             selectedValue = xfs.find(`.jw_dynamic_input[data-name="${rule.if}"]:checked`).val();
                         }
                        if (rule.operator) {
                            // Handle conditions with operators
                            var comparisonValue = parseFloat(rule.value);
                            var selectedValueNumeric = parseFloat(selectedValue);
                            if (rule.operator === ">" && selectedValueNumeric > comparisonValue) {
                                applyActions(rule.actions, xfs);
                            } else if (rule.operator === "=" && selectedValue === rule.value) {
                                applyActions(rule.actions, xfs);
                            }
                            // Add more operator handling as needed
                        } else {
                            if(rule.is && rule.is == 'is_empty' && selectedValue == ''){
                                applyActions(rule.actions, xfs);
                            }
                            else if(rule.is && rule.is == 'not_empty' && selectedValue != ''){
                                applyActions(rule.actions, xfs);
                            }
                            else if (rule.is && selectedValue === rule.is) {
                                applyActions(rule.actions, xfs);
                            }
                            else if (rule.is_not && selectedValue != rule.is_not) {
                                applyActions(rule.actions, xfs);
                            }
                        }
                    });
                    }
                }
            });
            // $('form.jw_dynamic_form').each(function(__zz,jw__){
            //     let xfs = $(this);
            //     let xsc_r = $(this).children('signature').text();
            //     if(xsc_r != ''){
            //         userRules = atob(xsc_r);
            //         userRules = $.parseJSON(userRules);
            //         if(userRules.conditions){
            //             userRules.conditions.forEach(function (rule) {
            //             let selectedValue = xfs.find(`.jw_dynamic_input[data-name="${rule.if}"]`).val();
            //             if (rule.operator) {
            //                 // Handle conditions with operators
            //                 var comparisonValue = parseFloat(rule.value);
            //                 var selectedValueNumeric = parseFloat(selectedValue);
            //                 if (rule.operator === ">" && selectedValueNumeric > comparisonValue) {
            //                     applyActions(rule.actions, xfs);
            //                 } else if (rule.operator === "=" && selectedValue === rule.value) {
            //                     applyActions(rule.actions, xfs);
            //                 }
            //                 // Add more operator handling as needed
            //             } else {
            //                 if (selectedValue === rule.is) {
            //                     applyActions(rule.actions, xfs);
            //                 }else{
            //                     applyActions(rule.actions, xfs, false);
            //                 }
            //             }
                     
            //         });
            //         }
            //     }
            // })
            function applyActions(actions, xfd,matched=true,condit='is') {
                actions.forEach(function (action) {
                    let $targetInput = xfd.find(`.jw_dynamic_input[data-name="${action.target}"]`);
                    let $target = $targetInput.closest('.dynamicField');
                    if (action.type === "show") {
                        if(matched){ $target.show();  }else{     $target.hide();    }
                    } else if (action.type === "hide") {
                        if(matched){ $target.hide();  }else{     $target.show();    }
                    } else if (action.type === "enable") {
                        $target.prop("disabled", false);
                    } else if (action.type === "disable") {
                        $target.prop("disabled", true);
                    } else if (action.type === "required") {
                        $target.prop("required", true);
                    } else if (action.type === "optional") {
                        $target.prop("required", false);
                    }
                });
            }
        }
    
    
    $(document).on('submit','form.jw_dynamic_form',function(e){
        var that = $(this);var _dfltValue =  $(this).find('input[type="submit"]').val();  $(this).find('input[type="submit"]').val('Sending...'); $(this).find('input[type="submit"]').prop('disabled', true);var fid = $(this).find('._tx_').val();var otp = $(this).find('._otp_').val(); e.preventDefault();
        var formData = [],  currentInputs = $(this).find('li.dynamicField'), $obj = {}, fd = new FormData();
        $.each(currentInputs, function(i, inputParent){  
            var thevalue = $(this).find('.jw_dynamic_input').val(),  type = $(this).data('input');  
            if(type == "singlefile"){  var name = $(this).find('.jw_dynamic_input').data('name');  var file_data = $(this).find('.jw_dynamic_input').prop('files')[0];   fd.append(name, file_data); }
            var mode = $(this).data('mode'); if(mode == "system" ||  mode == "normal"){   var name = $(this).find('.jw_dynamic_input').data('name');   $obj[name] = thevalue;  }
        });
        fd.append('_fid', fid);  
        fd.append('_otp_', otp);
        formData.push($obj);
        if(formData.length > 0){
            var _tx = JSON.stringify(formData);  fd.append('_form_', _tx);
            $.ajax({ 
                type: 'POST',  dataType: 'json',  url: '', data: fd, processData: false, contentType: false, success: function(es){
                    if(es.code == 1){  
                        that.find('input[type="submit"]').val('Sent!');
                        if(es.msg.t){  
                            var rType = es.msg.t;
                            if(rType == "t"){  var randomId = 1 + fid;
                                var dhtml = `
                                <div class="response_${randomId} see-padding-left-right-8 see-padding-8 see-light-green see-border">
                                    ${es.msg.v}
                                </div>`;
                                var newappend = that.append(dhtml);
                                setTimeout(() => {  $('.response_'+randomId+'').fadeOut(function(res){   $(this).remove();  });    }, 10000);  }else if(rType == "r"){  location.href = es.msg.v;  }
                                
                        }
                        that.reset();
                    }
                    else{   
                        that.find('input[type="submit"]').prop('disabled', false);  
                        if(es.msg.t){
                            var rType = es.msg.t;
                            var randomId = 1 + fid;
                            $(`.response_${randomId}`).remove();
                            var dhtml = `
                            <div class="response_${randomId} see-padding-left-right-8 see-padding-8 see-red-text see-border" style="color:red;">
                                ${es.msg.v}
                            </div>`;
                            if($(`.response_${randomId}`).length > 0){ $(`.response_${randomId}`).remove();  }
                            var newappend = that.prepend(dhtml);
                            if(rType == "ovs"){
                                that.find('.otpcode input').val('');
                                that.find('li.dynamicField').hide();
                                that.find('li.dynamicField.otpcode').fadeIn();
                                that.find('._back2form').click(function(){
                                    that.find('li.dynamicField').show();
                                    that.find('.otpcode').hide();
                                    $(`.response_${randomId}`).remove();
                                })
                            }
                            that.find('input[type="submit"]').val(_dfltValue);
                        }
                    }
                }
            });
        }
    });
            
    /* CUSTOM UPLOAD ATTRIBUTE */
    var _URL = window.URL || window.webkitURL;
    var max_image_size = 1024 * 1000 // 1 MB Maximum

    $('input[type="file"]').change(function(e) { var file, img, that = $(this);
        if ((file = this.files[0])) {  if(file.size > max_image_size){  alert("File size should be maximum of " + (max_image_size / 1024) + " KB");  }  } 
    });
            
    var navList = document.getElementById("nav-lists");
    function Show() { navList.classList.add("_Menus-show");  }
    function Hide() { navList.classList.remove("_Menus-show"); }
       
    $(document).ready(function(){ 
                loadDatePicker();
    });
    function jwpopup(__popId, deley=0, trans='fade'){
        __popId = __popId.split("seepoup")[1];
        console.log(__popId);
        //$("." + __popId).fadeIn();
        $(`[data-popup="${__popId}"]`).fadeIn();
        $(`[data-popup="${__popId}"]`).find('.close').click(function(){$(`[data-popup="${__popId}"]`).fadeOut();})
    }
    
    function popAlert(title,content){
        let XHTML = `
         <div class="rs-modal">
            <div class="rs-modal-inner">
                <div class="rs-modal-box">
                    <div class="rs-modal-container rs-pop-modal">
                      <div class="rs-modal-title">${title}</div>
                      <div class="rs-modal-content">${content}</div>
                    </div>
                </div>
            </div>
        </div> `;
        $('popups').html(XHTML);
        $('popups').removeClass('see-dp-none').find('.rs-modal, .rs-pop-modal').show();
        var popupContainer = document.getElementsByTagName('popups')[0];
        var body = document.body;
        body.addEventListener('click', function(e){
            popupContainer.classList.add("see-dp-none");
        });
    }
                 
    var fixedheader = "no";
    var transheader = "no";

function loadDatePicker(){
    if($('.see_datetime').length > 0){  $('.see_datetime').datetimepicker({ step:15, format: 'Y-m-d H:i'}); }
    if($('.see_date').length > 0){  $('.see_date').datetimepicker({ timepicker:false,format: 'd-m-Y' }); }
    if($('.see_time').length > 0){  $('.see_time').datetimepicker({ timepicker:true, datepicker: false,  format: 'H:i', step:15 }); }
}

var $animation_elements = $('.jw-animate'), $window = $(window);
function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('go');
    } else {
      $element.removeClass('go');
    }
  });
}
$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');

$('._smart_list_link , .see-list-item').click(function(e){
    console.log(e.target);
    if($(this).find("a").length > 0 && !$(e.target).attr('href')){ 
       
        if($(this).find("a:first").attr('target') == "_blank"){
             window.open($(this).find("a:first").attr("href"), '_blank');

        }else{
             window.location = $(this).find("a:first").attr("href"); 
        }
    }
})
function smart_list_link(list_link){
    window.location = $(list_link).find("a").attr("href");
}
$('.jwm_click').click(function(){$(this).closest('jw-media').find('iframe').fadeIn().attr('src',$(this).closest('jw-media').find('iframe').attr('data-src')); $(this).remove(); });
$(function(){
(()=>{'use strict';const a=document.getElementsByClassName('asyncImage');Array.from(a).map(a=>{const b=new Image;b.src=a.dataset.src,b.onload=()=>(a.classList.remove('asyncImage'),a.nodeName==='IMG'?a.src=a.dataset.src:a.style.backgroundImage=`url(%24%7ba.dataset.html)`)})})();
});
</script>
<!--<script type="text/javascript" src="https://static.joonsite.com/assets/js/header.min.js"></script>-->
<script src="dist/____220716172147app.js" defer=""></script>



</body>

</html><script>console.log('JWBolt - Page loaded in 0.63345408439636 seconds')</script>