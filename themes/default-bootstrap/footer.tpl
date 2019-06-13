{*
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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if !isset($content_only) || !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			{if isset($HOOK_FOOTER)}
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row">			
							<div id="footer_left">    
								<div id="htmlcontent_footer">
									<div class="">
										<ul class="htmlcontent-home clearfix ">
											<li class="htmlcontent-item-1">
												<div class="bannerBox">
													<a href="/"><img src="/img/kempston_footwear_logo.png" class="item-img" title="Logo" alt="Logo" width="100%" height="100%"></a>
													<div class="item-html">
														<div style="font-size: 15px; text-align: center;">
														Bedford Town Centre<br/>
														15 Howard Centre<br/>
														Horne Lane<br/>
														Bedford, MK40 1UH<br/>
														+44 (0)1234 267076<br/>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<section id="social_block">
									<ul>
										<li class="facebook"> <a target="_blank" href="https://www.facebook.com/Kempston-Footwear-377266232349041" title="Facebook"> <span>Facebook</span> </a>
										</li>
										<li class="twitter"> <a target="_blank" href="https://www.facebook.com/Kempston-Footwear-377266232349041" title="Twitter"> <span>Twitter</span> </a>
										</li>
										<li class="rss"> <a target="_blank" href="https://www.facebook.com/Kempston-Footwear-377266232349041" title="RSS"> <span>RSS</span> </a>
										</li>
										<li class="google-plus"> <a target="_blank" href="https://www.facebook.com/Kempston-Footwear-377266232349041" title="Google Plus"> <span>Google Plus</span> </a>
										</li>
									</ul> 
								</section>
							</div>
							<div id="footer_right">
								<div class="footer_right_iner">
								{$HOOK_FOOTER}
								</div>
							</div>
						</div>
					</footer>
				</div><!-- #footer -->
			{/if}
		</div><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
		<script src="/js/stickUp.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$(document).ready( function() {
				  $('.stickUpTop').stickUp();
				});
			});
		</script>
	</body>
</html>