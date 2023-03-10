/*! =========================================================
*
* Material Bootstrap Wizard - V1.0.1
*
* =========================================================
*
* Copyright 2016 Creative Tim (http://www.creative-tim.com/product/material-bootstrap-wizard)
*
*
* _oo0oo_
* o8888888o
* 88" . "88
* (| -_- |)
* 0\ = /0
* ___/`---'\___
* .' \| |// '.
* / \||| : |||// \
* / _||||| -:- |||||- \
* | | \\ - /// | |
* | \_| ''\---/'' |_/ |
* \ .-\__ '-' ___/-. /
* ___'. .' /--.--\ `. .'___
* ."" '< `.___\_<|>_/___.' >' "".
* | | : `- \`.;`\ _ /`;.`/ - ` : | |
* \ \ `_. \_ __\ /__ _/ .-` / /
* =====`-.____`.___ \_____/___.-`___.-'=====
* `=---='
*
* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*
* Buddha Bless: "No Bugs"
*
* ========================================================= */searchVisible=0;transparent=true;$(document).ready(function(){$.material.init();$('[rel="tooltip"]').tooltip();var $validator=$('.wizard-card form').validate({rules:{firstname:{required:true,minlength:3},lastname:{required:true,minlength:3},email:{required:true,minlength:3,}},errorPlacement:function(error,element){$(element).parent('div').addClass('has-error');}});$('.wizard-card').bootstrapWizard({'tabClass':'nav nav-pills','nextSelector':'.btn-next','previousSelector':'.btn-previous',onNext:function(tab,navigation,index){var $valid=$('.wizard-card form').valid();if(!$valid){$validator.focusInvalid();return false;}},onInit:function(tab,navigation,index){var $total=navigation.find('li').length;$width=100/$total;var $wizard=navigation.closest('.wizard-card');$display_width=$(document).width();if($display_width<600&&$total>3){$width=50;}
navigation.find('li').css('width',$width+'%');$first_li=navigation.find('li:first-child a').html();$moving_div=$('<div class="moving-tab">'+$first_li+'</div>');$('.wizard-card .wizard-navigation').append($moving_div);refreshAnimation($wizard,index);$('.moving-tab').css('transition','transform 0s');},onTabClick:function(tab,navigation,index){var $valid=$('.wizard-card form').valid();if(!$valid){return false;}else{return true;}},onTabShow:function(tab,navigation,index){var $total=navigation.find('li').length;var $current=index+1;var $wizard=navigation.closest('.wizard-card');if($current>=$total){$($wizard).find('.btn-next').hide();$($wizard).find('.btn-finish').show();}else{$($wizard).find('.btn-next').show();$($wizard).find('.btn-finish').hide();}
button_text=navigation.find('li:nth-child('+$current+') a').html();setTimeout(function(){$('.moving-tab').text(button_text);},150);var checkbox=$('.footer-checkbox');if(!index==0){$(checkbox).css({'opacity':'0','visibility':'hidden','position':'absolute'});}else{$(checkbox).css({'opacity':'1','visibility':'visible'});}
refreshAnimation($wizard,index);}});$("#wizard-picture").change(function(){readURL(this);});$('[data-toggle="wizard-radio"]').click(function(){wizard=$(this).closest('.wizard-card');wizard.find('[data-toggle="wizard-radio"]').removeClass('active');$(this).addClass('active');$(wizard).find('[type="radio"]').removeAttr('checked');$(this).find('[type="radio"]').attr('checked','true');});$('[data-toggle="wizard-checkbox"]').click(function(){if($(this).hasClass('active')){$(this).removeClass('active');$(this).find('[type="checkbox"]').removeAttr('checked');}else{$(this).addClass('active');$(this).find('[type="checkbox"]').attr('checked','true');}});$('.set-full-height').css('height','auto');});function readURL(input){if(input.files&&input.files[0]){var reader=new FileReader();reader.onload=function(e){$('#wizardPicturePreview').attr('src',e.target.result).fadeIn('slow');}
reader.readAsDataURL(input.files[0]);}}
$(window).resize(function(){$('.wizard-card').each(function(){$wizard=$(this);index=$wizard.bootstrapWizard('currentIndex');refreshAnimation($wizard,index);$('.moving-tab').css({'transition':'transform 0s'});});});function refreshAnimation($wizard,index){total_steps=$wizard.find('li').length;move_distance=$wizard.width()/total_steps;step_width=move_distance;move_distance*=index;$current=index+1;if($current==1){move_distance-=8;}else if($current==total_steps){move_distance+=8;}
$wizard.find('.moving-tab').css('width',step_width);$('.moving-tab').css({'transform':'translate3d('+move_distance+'px, 0, 0)','transition':'all 0.5s cubic-bezier(0.29, 1.42, 0.79, 1)'});}
materialDesign={checkScrollForTransparentNavbar:debounce(function(){if($(document).scrollTop()>260){if(transparent){transparent=false;$('.navbar-color-on-scroll').removeClass('navbar-transparent');}}else{if(!transparent){transparent=true;$('.navbar-color-on-scroll').addClass('navbar-transparent');}}},17)}
function debounce(func,wait,immediate){var timeout;return function(){var context=this,args=arguments;clearTimeout(timeout);timeout=setTimeout(function(){timeout=null;if(!immediate)func.apply(context,args);},wait);if(immediate&&!timeout)func.apply(context,args);};};(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-46172202-1','auto');ga('send','pageview');