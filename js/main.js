$(function(){
	var i = 1;
	var $home_imageshowlist = $("div#home_imageshow_list ul li");
	var $card_title = $(".card-title");
	var $card_titleimg = $(".card-titleimg");
	var $m_left_nav = $("div#m_left_nav_detail ul li");
	var $m_right_content = $(".m_right_content");
	var $m_right_content_img = $(".m_right_content_img");
	var $p_left_nav_detail = $("div#p_left_nav_detail ul li")
	$home_imageshowlist.mouseover(function(){
		var index = $home_imageshowlist.index(this);
		$home_imageshowlist
			.eq(index).addClass("home_imageshow_list_active")
			.siblings().removeClass();
		$("div#home_imageshow_box").css({"left":-1005*index+"px"});
		i = index;
	});
	var home_imgshow = setInterval(function () {
		$home_imageshowlist
			.eq(i).addClass("home_imageshow_list_active")
			.siblings().removeClass();
		$("div#home_imageshow_box").css({"left":-1005*i+"px"});
		i++;
		if(i == 5) i=1;
	},1000*2);
	$card_title.click(function(){
		$("div.card-img").addClass("card-show");
	});
	$card_titleimg.click(function(){
		$("div.card-img").removeClass("card-show");
	});
	$m_left_nav.click(function(){
		var nav_index = $m_left_nav.index(this);
		$(".m_right_content_detail").hide();
		$m_right_content_img.show();
		$m_right_content
			.eq(nav_index).show()
			.siblings().filter('.m_right_content').hide();
		$(".location span").text("You are here : "+this.innerHTML);
	});
	$m_right_content_img.click(function(){
		var nav_index = $m_right_content_img.index(this);
		$m_right_content_img.hide();
		$(".m_right_content_detail").eq(nav_index).show();
	});
	$p_left_nav_detail.click(function(){
		var nav_index = $p_left_nav_detail.index(this);
		console.log(nav_index);
		$(".p_right_content")
			.eq(nav_index).show()
			.siblings().filter('.p_right_content').hide();
	});
});