/*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/



$(document).ready(function(){
	$("#toTop").css('visibility','visible');
	$("#toTop").hide();
	$(function()
	{
		$(window).scroll(function()
		{
			if($(this).scrollTop()>300)
			{
				$('#toTop').fadeIn();
			}else
			{
				$('#toTop').fadeOut();
			}
		});
		$('#toTop').click(function()
		{
			$('body,html').animate({scrollTop:0},800);
			return false;
		});
	});
	$('#searchbox input').focus(function()
	{
		$('#searchbox').addClass('focusDiv');
	});
	$('#searchbox input').blur(function(){
		$('#searchbox').removeClass('focusDiv');
	});
	


	if (typeof(homeslider_speed) == 'undefined')
		homeslider_speed = 500;
	if (typeof(homeslider_pause) == 'undefined')
		homeslider_pause = 5000;
	if (typeof(homeslider_loop) == 'undefined')
		homeslider_loop = true;
	if (typeof(homeslider_width) == 'undefined')
		homeslider_width = 10000;

	var tl=new TimelineMax();

	$('.homeslider-description').click(function () {
		window.location.href = $(this).prev('a').prop('href');
	});


	if (!!$.prototype.bxSlider)
		$('#homeslider').bxSlider({
			mode:'fade',
			useCSS:false,
			maxSlides:1,
			slideWidth:homeslider_width,
			infiniteLoop:homeslider_loop,
			hideControlOnEnd:true,
			pager:false,autoHover:true,
			autoControls:false,
			auto:homeslider_loop,
			speed:parseInt(homeslider_speed),
			pause:homeslider_pause,
			controls:true,
			startText:'',
			stopText:'',
			onSliderLoad:function(){tl.play()},
			onSlideBefore:function(){tl.restart()},
			onSlideAfter:function(){}
		});
		
});