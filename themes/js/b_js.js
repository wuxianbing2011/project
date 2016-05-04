$(function(){
	var w_h=$(window).height();
	$(window).resize(function(){
		p2_fixed_h();
	})
	/*******为故事弹出层赋值高度********/
	function p2_fixed_h(){
		$('#p2_fixed').height(w_h);
	}
	
	/********导航点击事件样式*****************/
	$('.b_nav ul li').click(function(){
		$(this).addClass('b_nav_checked').siblings().removeClass('b_nav_checked');

	})
	/********导航弹出故事层*********/
	$('.b_nav_2> a').click(function(){
		var content=$(this).siblings('div');
		content.slideToggle();
	})
	/*******故事转换内容***********/

	$('.b_p2_li_link').click(function(){
		var li_=$(this).closest('li');
		var t=$('#p2_fixed ul li').eq(li_.index());
		t.addClass('b_p2_fixed_ed').siblings().removeClass('b_p2_fixed_ed');
		$('#p2_fixed').addClass('b_p2_li_content_show');
		$('#section1').addClass('b_p2_li_tit_');

		
	})
	/*********关闭故事具体内容***********/
	$('.b_p2_li_icon').click(function(){
		$('#p2_fixed').removeClass('b_p2_li_content_show');
			setTimeout(function(){
					$('#section1').removeClass('b_p2_li_tit_');
					$('#fullpage').css({'transform':'translate3d(0px, -'+w_h+'px, 0px)'});
			},300);
	
	})


	/*********点击关闭故事具体内容按钮**********/
	$('#section1,.b_nav ul li:not(".b_nav_2")').click(function(){
		$('.b_nav_2 div').slideUp();

	})
})