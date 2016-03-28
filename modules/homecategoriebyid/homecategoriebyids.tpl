{if $sidebarcateg && $display_sci == 1}
 <div id="siderbarhomecategory"> 
  {foreach from=$sidebarcateg item=sidebarby}
   {assign var='categoryLink' value=$link->getcategoryLink($sidebarby.id_category, $sidebarby.link_rewrite)}
    <h3 class="sidebar_categ_byid"><a href="{$categoryLink}">{$sidebarby.name}</a></h3>
	 <div class="sidebarproduc">
	  {if $sidebarby.sideproductbyid}
	    <div class="block_content">
		 <ul>
		 {foreach from=$sidebarby.sideproductbyid item=prosideid}
		  {assign var='getproductLink' value=$link->getproductLink($prosideid.id_product, $prosideid.link_rewrite)}
		   <li class="ajax_block_product">
		     <div class="product-container">
			   <div class="center-block">	
			    <div class="product-image-container">
				 <a class="product_img_link_sidecat" href="{$getproductLink}" title="{$prosideid.name|escape:'html':'UTF-8'}" itemprop="url">
				  <img class="replace-2x img-responsive" src="{$link->getImageLink($prosideid.link_rewrite, $prosideid.id_image, 'small_default')|escape:'html':'UTF-8'}" alt="{$prosideid.name|escape:'html':'UTF-8'}"/>
				 </a>
				</div>
			  </div>
			  <div class="product-content">
                <h5 itemprop="name">
				 <a class="sidecateg-product-name" href="{$getproductLink}" title="{$prosideid.name|escape:'html':'UTF-8'}" >
				  {$prosideid.name|truncate:45:'...'|escape:'html':'UTF-8'}
				 </a>
				</h5>
				
				{if (!$PS_CATALOG_MODE AND ((isset($prosideid.show_price) && $prosideid.show_price) || (isset($prosideid.available_for_order) && $prosideid.available_for_order)))}
					<div itemprop="offers" class="content_price_sidecat">
						{if isset($prosideid.show_price) && $prosideid.show_price && !isset($restricted_country_mode)}
							<span itemprop="price" class="price product-price-sidehom">
								{if !$priceDisplay}{convertPrice price=$prosideid.price}{else}{convertPrice price=$prosideid.price_tax_exc}{/if}
							</span>
					<meta itemprop="priceCurrency" content="{$priceDisplay}" />
							{if $prosideid.on_sale && $prosideid.show_price}
				                          <span class="on_sale">{l s='On sale!'}</span>
				                       {elseif isset($prosideid.reduction_price) && $prosideid.reduction_price}
				                       {*  <span class="discount-price">-{$prosideid.reduction_price}{if $prosideid.reduction_type == 'percentage'}%{else}&euro;{/if}</span>  *}
				                          <span class="discount"> {if $prosideid.reduction_type == 'percentage'}- {$prosideid.reduction_price}% {else} -{math equation='(x/y)*z' x=$prosideid.reduction_price y=$prosideid.price z=100 format="%.0f"}% {/if}</span>
				                      {/if}
						{/if}
					</div>
					{/if}
					
					 <a itemprop="url" class="button lnk_view btn btn-default" href="{$getproductLink}" title="{l s='View'}">
							<span class="sidecateg">{l s='More'}</span>
					</a>
				</div>
									
			</div>
		   </li>
		  {/foreach}
		 </ul>
		</div>
	  {/if}
	  </div>
	 {/foreach}
	</div>
{/if}