function thousands (amount) {
	return amount.split('').reverse().join('').replace(/\d{3}/g, '$&.').split('').reverse().join('');
}
function isEmail(value){
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(value);
}
function isPhone(value){
	var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4}$/im;
	return re.test(value);
}
function isNum(value){
	return /^\d+$/.test(value);
}
function isFloat(value){
	return /^[+-]?\d+(\.\d+)?$/.test(value);
}
function isUrl(value){
	var re = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
	return re.test(value);
}
function isSlug(value){
	return /^[a-z0-9]+(?:-[a-z0-9]+)*$/.test(value);
}
function convertToSlug(slug){
	slug = slug.toLowerCase().replace(/([-])+/g, ' ').replace(/  +/g, ' ');
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    slug = slug.replace(/ /gi, " - ");
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '').replace(/\s/g,"");
	return slug;
}
var hasOwnProperty = Object.prototype.hasOwnProperty;
function isEmpty(obj) {
	if (obj == null) return true;
	if (obj.length > 0)    return false;
	if (obj.length === 0)  return true;
	if (typeof obj !== "object") return true;
	for (var key in obj) {
		if (hasOwnProperty.call(obj, key)) return false;
	}
	return true;
}
function isSpacial(str){
	return !/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\? ]/g.test(str);
}
function isAccount(str){
	return /^[a-z0-9]+$/g.test(str);
}
$("form").on('focus', 'input, .select2, select, textarea', function () {
	p = $(this).closest(".f-form");
	p.find(".info-err").remove();
});
function empty(form){
	e = false;
	form.each(function(i){
		if(isEmpty($(this).val())){
			p = $(this).closest(".f-form");
			if(p.find('.info-err').length == 0){
				if($(this).hasClass('select2'))
					$(this).next().after("<span class='info-err'>Không được rỗng</span>");
				else
					$(this).after("<span class='info-err'>Không được rỗng</span>");
				e = true;
			}
			return false;
		}
	});
	return e;
}
function err(p, str){
	p.after("<span class='info-err'>"+str+"</span>");
	return false;
}
function salert(type, str, time = 2000){
	if($('body').find('#s-alert').length == 0){
		arr_type = ["success", "info", "warning"];
		arr_type["success"] = '<i class="fa fa-check-circle"></i>';
		arr_type["info"] = '<i class="fa fa-info-circle"></i>';
		arr_type["warning"] = '<i class="fa fa-exclamation-triangle"></i>';
		str = arr_type[type]+str;
		if(arr_type.indexOf(type) >= 0){
			$('body').append('<div id="s-alert"><div class='+type+'>'+str+'</div></div>');
			$('body').find('#s-alert').fadeIn(500);
			setTimeout(function(){$('body').find('#s-alert').fadeOut(1000);},time);
			setTimeout(function(){$('body').find('#s-alert').remove();},time+1000);
		}
	}
}

