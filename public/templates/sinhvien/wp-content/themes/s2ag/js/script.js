/* Menu Mobile */
!function(a){"use strict";function b(b,d){this.$el=a(b),this.opt=a.extend(!0,{},c,d),this.init(this)}var c={};b.prototype={init:function(a){a.initToggle(a),a.initDropdown(a)},initToggle:function(b){a(document).on("click",function(c){var d=a(c.target);d.closest(b.$el.data("sidenav-toggle"))[0]?(b.$el.toggleClass("show"),a("body").toggleClass("sidenav-no-scroll"),b.toggleOverlay()):d.closest(b.$el)[0]||(b.$el.removeClass("show"),a("body").removeClass("sidenav-no-scroll"),b.hideOverlay())})},initDropdown:function(b){b.$el.on("click","[data-sidenav-dropdown-toggle]",function(b){var c=a(this);c.next("[data-sidenav-dropdown]").slideToggle("fast"),c.find("[data-sidenav-dropdown-icon]").toggleClass("show"),b.preventDefault()})},toggleOverlay:function(){var b=a("[data-sidenav-overlay]");b[0]||(b=a('<div data-sidenav-overlay class="sidenav-overlay"/>'),a("body").append(b)),b.fadeToggle("fast")},hideOverlay:function(){a("[data-sidenav-overlay]").fadeOut("fast")}},a.fn.sidenav=function(c){return this.each(function(){a.data(this,"sidenav")||a.data(this,"sidenav",new b(this,c))})}}(window.jQuery);
$('[data-sidenav]').sidenav();
$(".sidenav-menu li ul").addClass("sidenav-dropdown");
$(".sidenav-menu li .sidenav-dropdown").attr("data-sidenav-dropdown","");
$(".sidenav-menu li").has("ul").addClass("sidenav-menu-parent");
$(".sidenav-menu>li.sidenav-menu-parent>a").attr("data-sidenav-dropdown-toggle","");
html_menu = '<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>';
html_menu += '<i class="fa fa-sort-down"></i>';
html_menu += '</span>';
html_menu += '<span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>';
html_menu += '<i class="fa fa-sort-up"></i>';
html_menu += '</span>';
$(".sidenav-menu>li.sidenav-menu-parent>a").append(html_menu);
$(".sidenav-menu>li.sidenav-menu-parent>a").attr("href","javascript:void(0)");
$('#sidenav-toggle').click(function(){$(this).toggleClass('open active');});
/* input file upload */
!function(e){var t=function(t,n){this.$element=e(t),this.type=this.$element.data("uploadtype")||(this.$element.find(".thumbnail").length>0?"image":"file"),this.$input=this.$element.find(":file");if(this.$input.length===0)return;this.name=this.$input.attr("name")||n.name,this.$hidden=this.$element.find('input[type=hidden][name="'+this.name+'"]'),this.$hidden.length===0&&(this.$hidden=e('<input type="hidden" />'),this.$element.prepend(this.$hidden)),this.$preview=this.$element.find(".fileupload-preview");var r=this.$preview.css("height");this.$preview.css("display")!="inline"&&r!="0px"&&r!="none"&&this.$preview.css("line-height",r),this.original={exists:this.$element.hasClass("fileupload-exists"),preview:this.$preview.html(),hiddenVal:this.$hidden.val()},this.$remove=this.$element.find('[data-dismiss="fileupload"]'),this.$element.find('[data-trigger="fileupload"]').on("click.fileupload",e.proxy(this.trigger,this)),this.listen()};t.prototype={listen:function(){this.$input.on("change.fileupload",e.proxy(this.change,this)),e(this.$input[0].form).on("reset.fileupload",e.proxy(this.reset,this)),this.$remove&&this.$remove.on("click.fileupload",e.proxy(this.clear,this))},change:function(e,t){if(t==="clear")return;var n=e.target.files!==undefined?e.target.files[0]:e.target.value?{name:e.target.value.replace(/^.+\\/,"")}:null;if(!n){this.clear();return}this.$hidden.val(""),this.$hidden.attr("name",""),this.$input.attr("name",this.name);if(this.type==="image"&&this.$preview.length>0&&(typeof n.type!="undefined"?n.type.match("image.*"):n.name.match(/\.(gif|png|jpe?g)$/i))&&typeof FileReader!="undefined"){var r=new FileReader,i=this.$preview,s=this.$element;r.onload=function(e){i.html('<img src="'+e.target.result+'" '+(i.css("max-height")!="none"?'style="max-height: '+i.css("max-height")+';"':"")+" />"),s.addClass("fileupload-exists").removeClass("fileupload-new")},r.readAsDataURL(n)}else this.$preview.text(n.name),this.$element.addClass("fileupload-exists").removeClass("fileupload-new")},clear:function(e){this.$hidden.val(""),this.$hidden.attr("name",this.name),this.$input.attr("name","");if(navigator.userAgent.match(/msie/i)){var t=this.$input.clone(!0);this.$input.after(t),this.$input.remove(),this.$input=t}else this.$input.val("");this.$preview.html(""),this.$element.addClass("fileupload-new").removeClass("fileupload-exists"),e&&(this.$input.trigger("click",["clear"]),e.preventDefault())},reset:function(e){this.clear(),this.$hidden.val(this.original.hiddenVal),this.$preview.html(this.original.preview),this.original.exists?this.$element.addClass("fileupload-exists").removeClass("fileupload-new"):this.$element.addClass("fileupload-new").removeClass("fileupload-exists")},trigger:function(e){this.$input.trigger("click"),e.preventDefault()}},e.fn.fileupload=function(n){return this.each(function(){var r=e(this),i=r.data("fileupload");i||r.data("fileupload",i=new t(this,n)),typeof n=="string"&&i[n]()})},e.fn.fileupload.Constructor=t,e(document).on("click.fileupload.data-api",'[data-provides="fileupload"]',function(t){var n=e(this);if(n.data("fileupload"))return;n.fileupload(n.data());var r=e(t.target).closest('[data-dismiss="fileupload"],[data-trigger="fileupload"]');r.length>0&&(r.trigger("click.fileupload"),t.preventDefault())})}(window.jQuery)
/* Open Search */
$("#search-header").click(function(){$("#group-search-header").slideDown();});
$("#close-search-header").click(function(){$("#group-search-header").slideUp();});
$(".post-content img").addClass("img-responsive");
$(".post-content img").attr('style','width:100%');
$.datetimepicker.setLocale('vi');
$(".select2").select2({
	allowClear: true,
	dropdownAutoWidth : true,
	width: '100%'
});
(function($){
	$(".wrap-item").length > 0 && $(".wrap-item").each(function() {
		var e = $(this).data();
		$(this).owlCarousel({
			addClassActive: !0,
			stopOnHover: !0,
			itemsCustom: e.itemscustom,
			autoPlay: e.autoplay,
			transitionStyle: e.transition,
			paginationNumbers: e.paginumber,
			navigationText: ['<i class="ion-android-arrow-back" aria-hidden="true"></i>', '<i class="ion-android-arrow-forward" aria-hidden="true"></i>']
		})
	});
	$(".scroll-top").on("click", function(e) {
		e.preventDefault(), $("html, body").animate({
			scrollTop: 0
		}, "slow")
	});
	$(window).on("scroll", function() {
		$(this).scrollTop() > $(this).height() ? $(".scroll-top").addClass("active") : $(".scroll-top").removeClass("active")
	})
	window.reset = function (e) {
		e.wrap('<form>').closest('form').get(0).reset();
		e.unwrap();
	}
	/* Chat box */
	var c = 0;
	if(window.matchMedia('(max-width: 992px)').matches) {
		$("#chatbox-mobile, .chat-head").click(function () {
			if(c == 0) {
				$('.chat-head h4 i').hide();
				$('.chat-head').removeAttr("style");
				$('.chat-head').attr("style","display:block !important;");
				$('.minimizer').show();
				$('.chatbox').animate({
					'bottom': '0'
				});
				c = 1;
			} else if (c = 1) {
				$('.chat-head h4 i').show();
				setTimeout(function(){
					$('.chat-head').removeAttr("style");
					$('.chat-head').attr("style","display:none !important;");
				}, 400);
				$('.minimizer').hide();
				$('.chatbox').animate({
					'bottom': '-330px'
				});
				c = 0;
			}
		});
	}else{
		$(".chat-head").click(function () {
			if (c == 0) {
				$('.chat-head h4 i').hide();
				$('.minimizer').show();
				$('.chatbox').animate({
					'bottom': '0'
				});
				c = 1;
			} else if (c = 1) {
				$('.chat-head h4 i').show();
				$('.minimizer').hide();
				$('.chatbox').animate({
					'bottom': '-330px'
				});
				c = 0;
			}
		});
	}
})(jQuery);
$('.chatbox').hover(function () {
	$('.chatbox-inner').stop().show('3000');
}, function () {
	$('.chatbox-inner').stop().hide('3000');
});
window.fbAsyncInit = function () {
	FB.init({
		appId: '626149944387556',
		xfbml: true,
		version: 'v2.6'
	});
};
(function (d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {
		return;
	}
	js = d.createElement(s);
	js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

/** Image Select **/
$('body').on('click', '.clear-image', function(){
	parent = $(this).closest('.f-form');
	parent.find('input').val('');
	parent.find('img').not('.hidden').attr('src',THEME_URL+'/images/image-feature/default-01.jpg');
	parent.find('img.hidden').attr('src','');
	$(this).remove();
	slider();
});
function slider(){
	$('#group-slider-img').html('<ul id="slider-img" data-pagination="true" data-paginumber="true" data-navigation="false" data-itemscustom="[[0,1],[980,1]]"></ul>');
	if($('form .img-slider[src!=""]').length > 0){
		html = '';
		$('form .img-slider[src!=""]').each(function(){
			src = $(this).attr('src');
			html += '<li><img src="'+src+'" class="img-responsive img-feature"></li>';
		});
		$('#group-slider-img').find('#slider-img').html(html);
		var e = $('#group-slider-img').find('#slider-img').data();
		$('#group-slider-img').find('#slider-img').owlCarousel({
			addClassActive: !0,
			stopOnHover: !0,
			itemsCustom: e.itemscustom,
			autoPlay: e.autoplay,
			transitionStyle: e.transition,
			paginationNumbers: e.paginumber,
			navigationText: ['<i class="ion-android-arrow-back" aria-hidden="true"></i>', '<i class="ion-android-arrow-forward" aria-hidden="true"></i>']
		});
	}else{
		$('#group-slider-img').find('#slider-img').html('<img src="'+THEME_URL+'/images/image-feature/default-01.jpg" class="img-responsive img-feature" style="cursor: default;">');
	}
}
function select_image(image, clear = false, slider_ = false){
	cf = $.confirm({
		title: 'Hình ảnh đã tải lên',
		content: function () {
			var self = this;
			return $.ajax({
				url : THEME_URL+'/users/data/images.php',
				method: 'post',
				data: 'type=load-image', 
			}).done(function (result) {
				if(result == "session" || result == "false"){
					salert("warning","Có lỗi xảy ra - Vui lòng đợi tải lại trang");
					setTimeout(function(){location.reload();},1000);
				}else{
					html = '<ul id="group-image">';
					html += '<li class="col-lg-2 col-md-3 col-sm-3 col-xs-4">';
					html += '<div id="group-upload-image">';
					html += '<a href="http://nguoiangiang.com/tai-khoan/?type=hinh-anh" target="_blank">';
					html += '<img src="'+THEME_URL+'/images/bg-none.png" class="img-responsive">';
					html += '<div class="overlay"><i class="fa fa-upload fa-3x"></i></div>';
					html += '</a>';
					html += '</div>';
					html += '</li>';
					if(!isEmpty(result)){
						result = jQuery.parseJSON(result);
						keys = [];
						for (k in result) {
							if (result.hasOwnProperty(k)) {
								keys.push(k);
							}
						}
						keys.sort();
						for (i = keys.length - 1; i >= 0; i--) {
							html += '<li class="col-lg-2 col-md-3 col-sm-3 col-xs-4" style="position: relative;">';
							html += '<img src="'+result[keys[i]]['link']+'" class="img-responsive">';
							html += '<div class="select-image">';
							html += '<input type="checkbox" value="'+keys[i]+'" data-src="'+result[keys[i]]['link']+'">';
							html += '</div>';
							html += '</li>';
						}
						cf.buttons.ok.show();
					}
					html += '</ul>';
					html += '<p style="margin: 0;color: red;font-size: 17px;">Sau khi tải lên hình ảnh mới - Vui lòng mở lại hộp thoại</p>';
					self.setContent(html);
					cf.buttons.cancel.show();
				}
			}).fail(function(){
				salert("warning","Có lỗi xảy ra - Vui lòng đợi tải lại trang");
				setTimeout(function(){location.reload();},1000);
			});
		},
		columnClass: 'col-md-10 col-md-push-1',
		buttons: {
			ok :{
				text : 'Sử dụng hình này',
				btnClass: 'btn-primary',
				action: function(){
					checked = $('body').find('#group-image .select-image input[type=checkbox]:checked');
					if(checked.length == 0){
						salert("warning","Bạn chưa chọn hình ảnh để sử dụng");
						return false;
					}else{
						p_ = image.closest('.f-form');
						p_.attr('style','position:relative;')
						p_.find('img').attr('src', checked.attr('data-src'));
						image.val(checked.val());
						if(clear == true){
							p_.find('button.clear-image').remove();
							image.after('<button type="button" class="btn btn-warning clear-image" style="position: absolute;top: 0;right: 0;"><i class="fa fa-remove"></i></button>');
						}
						if(slider_ == true)
							slider();
					}
				}
			},
			cancel:{text : 'Hủy bỏ',}
		},
		onOpenBefore: function () { cf.buttons.ok.hide(); cf.buttons.cancel.hide();}
	});
}
$('body').on('click', '#group-image .select-image input[type=checkbox]', function(){
	if($(this).prop('checked') == true){
		$('body').find( '#group-image .select-image input[type=checkbox]').prop('checked', false);
		$(this).prop('checked', true);
	}
});
function tinymces(selector, height = 450){
	return tinymce.init({
		selector: selector,
		init_instance_callback: function (editor) {
			editor.on('click', function (e) {
				$('label[for="content"]').find(".info-err").remove();
			});
		},
		height: height,
		resize: false,
		menubar: false,
		plugins: 'print paste preview searchreplace autolink directionality visualblocks visualchars fullscreen template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help imgur image',
		toolbar: 'undo redo fontsizeselect | bold italic strikethrough forecolor backcolor alignleft aligncenter alignright numlist bullist| outdent indent | image imgur hr preview',
		fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
		setup: function(ed){

		}
	});
}
tinymce.PluginManager.add('imgur', function(editor, url) {
	editor.addButton('imgur', {
		image: THEME_URL+'/images/image-ico.png',
		onclick: function() {
			cf = $.confirm({
				title: 'Hình ảnh đã tải lên',
				content: function () {
					var self = this;
					return $.ajax({
						url : THEME_URL+'/users/data/images.php',
						method: 'post',
						data: 'type=load-image', 
					}).done(function (result) {
						if(result == "session" || result == "false"){
							salert("warning","Có lỗi xảy ra - Vui lòng đợi tải lại trang");
							setTimeout(function(){location.reload();},1000);
						}else{
							html = '<ul id="group-image">';
							html += '<li class="col-lg-2 col-md-3 col-sm-3 col-xs-4">';
							html += '<div id="group-upload-image">';
							html += '<a href="http://nguoiangiang.com/tai-khoan/?type=hinh-anh" target="_blank">';
							html += '<img src="'+THEME_URL+'/images/bg-none.png" class="img-responsive">';
							html += '<div class="overlay"><i class="fa fa-upload fa-3x"></i></div>';
							html += '</a>';
							html += '</div>';
							html += '</li>';
							if(!isEmpty(result)){
								result = jQuery.parseJSON(result);
								keys = [];
								for (k in result) {
									if (result.hasOwnProperty(k)) {
										keys.push(k);
									}
								}
								keys.sort();
								for (i = keys.length - 1; i >= 0; i--) {
									html += '<li class="col-lg-2 col-md-3 col-sm-3 col-xs-4" style="position: relative;">';
									html += '<img src="'+result[keys[i]]['link']+'" class="img-responsive">';
									html += '<div class="select-image">';
									html += '<input type="checkbox" value="'+keys[i]+'" data-src="'+result[keys[i]]['link']+'">';
									html += '</div>';
									html += '</li>';
								}
								cf.buttons.ok.show();
							}
							html += '</ul>';
							html += '<p style="margin: 0;color: red;font-size: 17px;">Sau khi tải lên hình ảnh mới - Vui lòng mở lại hộp thoại</p>';
							self.setContent(html);
							cf.buttons.cancel.show();
						}
					}).fail(function(){
						salert("warning","Có lỗi xảy ra - Vui lòng đợi tải lại trang");
						setTimeout(function(){location.reload();},1000);
					});
				},
				columnClass: 'col-md-10 col-md-push-1',
				buttons: {
					ok :{
						text : 'Sử dụng hình này',
						btnClass: 'btn-primary',
						action: function(){
							checked = $('body').find('#group-image .select-image input[type=checkbox]:checked');
							if(checked.length == 0){
								salert("warning","Bạn chưa chọn hình ảnh để sử dụng");
								return false;
							}else{
								editor.insertContent('<img src="' + checked.attr('data-src')+'" />');
							}
						}
					},
					cancel:{text : 'Hủy bỏ',}
				},
				onOpenBefore: function () { cf.buttons.ok.hide(); cf.buttons.cancel.hide();}
			});
		}
	});
});