{if $homecateg && $display_hci == 1}
 {*define numbers of product per line in other page for desktop*}
	{if $page_name !='index' && $page_name !='product'}
		{assign var='nbItemsPerLine' value=3}
		{assign var='nbItemsPerLineTablet' value=2}
		{assign var='nbItemsPerLineMobile' value=3}
	{else}
		{assign var='nbItemsPerLine' value=4}
		{assign var='nbItemsPerLineTablet' value=3}
		{assign var='nbItemsPerLineMobile' value=2}
	{/if}
	{*define numbers of product per line in other page for tablet*}
  <div id="categorybyid">
				  {foreach from=$homecateg item=homeby}
				  {assign var='categoryLink' value=$link->getcategoryLink($homeby.id_category, $homeby.link_rewrite)}
				  <h3 class="homcb"><a href="{$categoryLink}">{$homeby.name}</a></h3>
				       <div class="categid">				          
		                 {if $homeby.homeproductbyid}
						  <div class="block_content_fr">
							<div id="homecateg">
							 <ul class="product_list madalweb">
		                  {foreach from=$homeby.homeproductbyid item=homeproducby}
				              {assign var='getproductLink' value=$link->getproductLink($homeproducby.id_product, $homeproducby.link_rewrite)}
							 <li class="ajax_block_product {if $page_name == 'index' || $page_name == 'product'} col-xs-12 col-sm-4 col-md-3{else} col-xs-12 col-sm-6 col-md-4{/if}{if $smarty.foreach.homeproducby.iteration%$nbItemsPerLine == 0} last-in-line{elseif $smarty.foreach.homeproducby.iteration%$nbItemsPerLine == 1} first-in-line{/if}{if $smarty.foreach.homeproducby.iteration > ($smarty.foreach.homeproducby.total)} last-line{/if}{if $smarty.foreach.homeproducby.iteration%$nbItemsPerLineTablet == 0} last-item-of-tablet-line{elseif $smarty.foreach.homeproducby.iteration%$nbItemsPerLineTablet == 1} first-item-of-tablet-line{/if}{if $smarty.foreach.homeproducby.iteration%$nbItemsPerLineMobile == 0} last-item-of-mobile-line{elseif $smarty.foreach.homeproducby.iteration%$nbItemsPerLineMobile == 1} first-item-of-mobile-line{/if}{if $smarty.foreach.homeproducby.iteration > ($smarty.foreach.homeproducby.total)} last-mobile-line{/if}">
							 
							    <div class="center_block">
							<div class="up-product">
							<div class="product-image-container">
							
							<meta itemprop="priceCurrency" content="{$priceDisplay}" />
							{if $homeproducby.on_sale && $homeproducby.show_price}
				                          <span class="on_sale">{l s='Sale!'}</span>
				                       {elseif isset($homeproducby.reduction_price) && $homeproducby.reduction_price}
				                       {*  <span class="discount-price">-{$homeproducby.reduction_price}{if $homeproducby.reduction_type == 'percentage'}%{else}&euro;{/if}</span>  *}
				                          <span class="discount"> {if $homeproducby.reduction_type == 'percentage'}- {$homeproducby.reduction_price}% {else} -{math equation='(x/y)*z' x=$homeproducby.reduction_price y=$homeproducby.price z=100 format="%.0f"}% {/if}</span>
				                      {/if}
							{if isset($homeproducby.new) && $homeproducby.new == 1}
							<span class="new-box-homecat">
								<span class="new-label-homecat">{l s='New'}</span>
							</span>
						{/if}
									  
				          <a class="product_img_link"	href="{$getproductLink}" title="{$homeproducby.name|escape:'html':'UTF-8'}" itemprop="url">
							<img class="replace-2x img-responsive" src="{$link->getImageLink($homeproducby.link_rewrite, $homeproducby.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($homeproducby.legend)}{$homeproducby.legend|escape:'html':'UTF-8'}{else}{$homeproducby.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($homeproducby.legend)}{$homeproducby.legend|escape:'html':'UTF-8'}{else}{$homeproducby.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" />
						</a>			   
				     
						{if isset($quick_view) && $quick_view}
							<a class="quick-view" href="{$getproductLink}" rel="{$getproductLink}">
								<span>{l s='Quick view'}</span>
							</a>
						{/if}
					</div>
				  </div>
				     <h5 class="prod_name" itemprop="name">
						<a class="product-name" href="{$getproductLink}" title="{$homeproducby.name|escape:'html':'UTF-8'}" >
							{$homeproducby.name|truncate:45:'...'|escape:'html':'UTF-8'}
						</a>
					</h5>
				                    
				        {if (!$PS_CATALOG_MODE AND ((isset($homeproducby.show_price) && $homeproducby.show_price) || (isset($homeproducby.available_for_order) && $homeproducby.available_for_order)))}
					<div itemprop="offers" class="content_price">
						{if isset($homeproducby.show_price) && $homeproducby.show_price && !isset($restricted_country_mode)}
							<span itemprop="price" class="price product-price">
								{if !$priceDisplay}{convertPrice price=$homeproducby.price}{else}{convertPrice price=$homeproducby.price_tax_exc}{/if}
							</span>
					
						{/if}
					</div>
					{/if}
				  <div class="button-container">
		                                {if isset($add_prod_display) && ($add_prod_display == 1) && $homeproducby.available_for_order && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
								{if isset($static_token)}
									<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$homeproducby.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$homeproducby.id_product|intval}">
										<span>{l s='Add to cart'}</span>
									</a>
								{else}
									<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$homeproducby.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$homeproducby.id_product|intval}">
										<span>{l s='Add to cart'}</span>
									</a>
								{/if}						
							{else}
								<span class="button ajax_add_to_cart_button btn btn-default disabled">
									<span>{l s='Add to cart'}</span>
								</span>
						{/if}
		                             <a itemprop="url" class="button lnk_view btn btn-default" href="{$getproductLink}" title="{l s='View'}">
							<span>{l s='More'}</span>
						</a>
					</div>
							   </div>
							 </li>
							{/foreach}
							</ul>
							</div>
							</div>	
		                   {/if}
						  </div>
						{foreachelse}
				  	{l s='No category' mod='Ooooopss, no category'}
				  {/foreach}
					</div>
			{/if}
	