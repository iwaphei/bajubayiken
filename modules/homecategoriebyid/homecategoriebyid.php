<?php

if (!defined('_PS_VERSION_'))
	exit;

class Homecategoriebyid extends Module
{
	private $_html = '';
	private $_postErrors = array();

	public function __construct()
	{
		$this->name = 'homecategoriebyid';
		$this->tab = 'front_office_features';
		$this->version = 0.1;
		$this->author = 'themes.madalweb.com';
		$this->need_instance = 0;

		parent::__construct(); 

		$this->displayName = $this->l('Homepage Category by ID');
		$this->description = $this->l('Display categories by ID on your homepage.');
	}
	
	public function install()
	{
		if (!Configuration::updateValue('HOMEID_NBR', 3) ||
			!Configuration::updateValue('SIDEBARID_NBR', 3) ||
			!Configuration::updateValue('HOMEID_ID', '') ||
			!Configuration::updateValue('HOMEID_SIDEBARID', '') ||
			!Configuration::updateValue('HOMEID_DISPLAY', '1') ||
			!Configuration::updateValue('HOMEID_DISPLAYSIDEBAR', '1') ||
			!parent::install() || !$this->registerHook('displayHeader') || !$this->registerHook('displayHome') || !$this->registerHook('RightColumn')
			|| !$this->registerHook('LeftColumn')
			) return false;
		return true;
	}
	
	function uninstall()
	{
		if (!parent::uninstall()
		|| !Configuration::deleteByName('HOMEID_NBR') ||
		!Configuration::deleteByName('SIDEBARID_NBR') ||
		!Configuration::deleteByName('HOMEID_ID') ||
		!Configuration::deleteByName('SIDEBARID_ID') ||
		!Configuration::deleteByName('HOMEID_DISPLAY') ||
		!Configuration::deleteByName('HOMEID_DISPLAYSIDEBAR'))
		return false;
		return true;
	}
	
	public function getContent() {
	
	$output = '<h2>'.$this->displayName.'</h2>';
		if (Tools::isSubmit('submithomeid'))
		{
			$homeid_display = Tools::getValue('homeid_display');
			$homeid_displaysidebar = Tools::getValue('homeid_displaysidebar');
			
		$homeid_nbr = Tools::getValue('homeid_nbr');
			if (!$homeid_nbr)
				$errors[] = $this->l('Invalid number of products');
				
		$sidebarid_nbr = Tools::getValue('sidebarid_nbr');
			if (!$sidebarid_nbr)
				$errors[] = $this->l('Invalid number of products');
				
		$categ_ids = Tools::getValue('categ_ids');
			if (!$categ_ids)
				$errors[] = $this->l('Invalid home category ID');
				
		$homesidebarid_id = Tools::getValue('homesidebarid_id');
			if (!$homesidebarid_id)
				$errors[] = $this->l('Invalid sidebar category ID');
		else
			Configuration::updateValue('HOMEID_DISPLAY',(int)Tools::getValue('homeid_display'));
			Configuration::updateValue('HOMEID_DISPLAYSIDEBAR',(int)Tools::getValue('homeid_displaysidebar'));
			Configuration::updateValue('HOMEID_NBR', $homeid_nbr);
			Configuration::updateValue('SIDEBARID_NBR', $sidebarid_nbr);
			Configuration::updateValue('HOMEID_ID', $categ_ids);
			Configuration::updateValue('SIDEBARID_ID', $homesidebarid_id);
		if (isset($errors) AND sizeof($errors))
				$output .= $this->displayError(implode('<br />', $errors));
			else
				$output .= $this->displayConfirmation($this->l('Settings updated'));
		}
		return $output.$this->displayForm();
	}
	
	protected function getAdver()
	{
	$output  = '
	<div style="width:440px;float:left;margin-right:18px;>
	<p style="text-align:left;font-size:17px;">'.$this->l('If you like this module make a small donation. ').'</p>
	<p style="text-align:left;font-size:13px;">'.$this->l('Make a donation of 5 usd and you will receive - Prestashop Specials Price Sidebar Countdown module.Module file Prestashop Specials Price Sidebar Countdown will be sent to the email address from which the donation was received ').'</p><form>	<fieldset>	   <legend>'.$this->l('Update').'</legend>	   <p>I offer free support for this Prestashop module if there appear problems with the proper functioning or someone need some question about this module but no matter how much would like to help everyone		I cannot fix your website,redesign or to make customizations code for free because I am very busy,all this can be done as freelance work with prices that start from $14 only with Paypal.		Best regards!</p>	 </fieldset>	 </form>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<fieldset>
<legend>'.$this->l('Donation').'</legend>
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6PGPDF3BKPQE8">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
<p></p>
<p>Donate $5 and receive Prestashop Specials Price Sidebar Countdown</p>
<p><ul>Module Featured:
<li>Left/Right Countdown Products Block Slider</li>
 <li>Multilanguage,Multistore,Responsive Design.</li>
 <li>Compatible with Prestashop 1.6.</li>
 <li>Color Editor Included.</li></ul></p>
<p><a href="http://prestashop01.pounduk.com/3-women">
						'.$this->l('Demo Prestashop Specials Price Sidebar Countdown.').'</a></p>
</fieldset></form></div>
  <div style="width:440px;float:left;>
	<p style="text-align:left;font-size:13px;">'.$this->l('Buy Now Prestashop Reduced Price Countdown Module - Price $19 ').'</p>		 	  <fieldset>	   <legend>'.$this->l('Prestashop Reduced Price Countdown Module - working only with Prestashop v1.6').'</legend>   <p><a href="https://www.xtendify.com/en/modules/prestashop/front-office-features/670-prestashop-reduced-price-countdown">						'.$this->l('Buy Now from Xtendify.com - $19.').'</a></p>		<p><a href="http://prestashop01.pounduk.com/">						'.$this->l('Demo Special Price Countdown Module.').'</a>	</p>	<p><a href="https://www.facebook.com/pages/Orizothemes/587872024609062">						'.$this->l('Follow on Facebook').'</a>	</p>	<p><a href="https://twitter.com/orizothemes">						'.$this->l('Follow on Twitter').'</a>	</p>	<p><a href="https://plus.google.com/101587714117371552332/posts">						'.$this->l('Follow on Google+').'</a>	</p>	</fieldset>
		</div>';
	return $output;
	}
	
	public function displayForm()
	{
			$output = '
					<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
						<fieldset><legend><img src="'.$this->_path.'logo.png" alt="" title="" />'.$this->l('Settings').'</legend>
						<div style="width:100%;text-align:center;font-size:21px"><label><b><a class href ="http://themes.madalweb.com/12-prestashop-modules">'.$this->l('Prestashop Modules').'</a></b></label></div><br><br><div style="float:left;width:100%;margin-bottom:14px;">
						<div style="width:300px;margin-right:10px;float:left;"><p style="font-size:17px;">'.$this->l('Homecategories by ID version Pro.').'</p>
						<p>'.$this->l('This module allows you to display products from categories on main page in multiple carousel and left/right sidebar in a single vertical carousel.').'</p>
						<p><a href="http://codecanyon.net/item/prestashop-homecategories-multiple-carousels-/8070383?WT.ac=item_more_thumb&WT.z_author=orizo">
						<img src="'.$this->_path.'homecategoriebyid_small.png" width="300px" height="400px" alt="Prestashop Homecategories by ID"></a></p></div>
						<div style="width:300px;float:left;margin-right:10px;">
						<p style="font-size:17px;">'.$this->l('Prestashop 8 in 1 Carousels with Countdown.').'</p>
						<p>'.$this->l('This module allows you to display products from Featured Products,New products,Top Sellers,Special Price with a countdown in a carousel on homepage,viewed products also in a carousel on product page and on left/right column top sellers,new products,special price in a vertical carousels.Prestashop Carousel’s Pack have included a color editor to change very easy style of the module and a countdown for homepage special price carousel..').'</p>
						<p><a href="http://codecanyon.net/item/prestashop-carousels-pack-module/8469497?ref=orizo">
						<img src="'.$this->_path.'prestams.png" width="300px" height="400px" alt="Prestashop Homecarousels"></a></p></div>
						<div style="width:300px;float:left;margin-right:10px;"><p style="font-size:17px;">'.$this->l('Prestashop Recommended Products.').'</p>
						<p>'.$this->l('This module allow you to select different products by ID and will be displayed on your homepage store and product page in a carousel').'</p>
						<p><a href="http://codecanyon.net/item/prestashop-recommended-products-by-id-module/8217271?WT.ac=item_more_thumb&WT.z_author=orizo">
						<img src="'.$this->_path.'recomm_small.png" width="300px" height="126px" alt="Prestashop Recommended Products Carousel"></a></p></div>
						<div style="width:300px;float:left;margin-right:10px;">
						<p style="font-size:17px;">'.$this->l('Prestashop Countdown Special Price Products.').'</p>
						<p>'.$this->l('This module will display a countdown on product page with special price,will create a left/right sidebar block with special price products and a countdown and on homepage will create a countdown block with special price products in a carousel.').'</p>
						<p><a href="http://codecanyon.net/item/prestashop-countdown-special-price-products-module/8057694?WT.ac=item_more_thumb&WT.z_author=orizo">
						<img src="'.$this->_path.'countdown_small.png" width="300px" height="152px" alt="Prestashop Countdown Products"></a></p></div>
						<div style="width:300px;float:left;margin-right:10px;">
						<p style="font-size:17px;">'.$this->l('Prestashop Vertical Mega Menu.').'</p>
						<p>'.$this->l('Prestashop Vertical Mega Menu allow you to display on left/right column desired categories selected by ID separated by comma.This module display only categories and subcategories,for each category can be added a description and one image for each category.').'</p>
						<p><a href="http://codecanyon.net/item/prestashop-vertical-mega-menu-module/9582958">
						<img src="'.$this->_path.'pvmega_menu_small.png" width="300px" height="152px" alt="Prestashop Vertical Mega Menu"></a></p></div>
						</div>
<br><br>						
					<label>'.$this->l('Select the maximum number of home category products that will be displayed').'</label>
						<div class="margin-form">
							<input type="text" size="5" name="homeid_nbr" value="'.Tools::getValue('homeid_nbr', Configuration::get('HOMEID_NBR')).'" />
						</div>
						<br>
					<label>'.$this->l('Select the maximum number of sidebar category products that will be displayed').'</label>
						<div class="margin-form">
							<input type="text" size="5" name="sidebarid_nbr" value="'.Tools::getValue('sidebarid_nbr', Configuration::get('SIDEBARID_NBR')).'" />
						</div>
						<br>
					<label>'.$this->l('Select home category ID(s)').'</label>
						<div class="margin-form">
							<input type="text" size="5" name="categ_ids" value="'.Tools::getValue('categ_ids', Configuration::get('HOMEID_ID')).'"/>
					<label>'.$this->l('To view the categories ID(s) that you want to display go to:Admin Panel Control >> Catalog >> Categories >> Here can view all the ID(s) numbers of all categories from your shop(See the column ID).You can enter one or more ID numbers separated by commas.').'</label>	
					</div>
						<br/>
						<br/>
						<br/>
						<br/>
					<label>'.$this->l('Select sidebar category ID').'</label>
						<div class="margin-form">
							<input type="text" size="5" name="homesidebarid_id" value="'.Tools::getValue('homesidebarid_id', Configuration::get('SIDEBARID_ID')).'"/>
						</div>
						<br>
					<br>
					<label>'.$this->l('Display home category product').':</label>				
					<input type="checkbox" name="homeid_display" '.(Tools::getValue('homeid_display', Configuration::get('HOMEID_DISPLAY')) ? 'checked="checked"' : '').'value="1" />
					<br/>
					<br/>
					<label>'.$this->l('Display sidebar product').':</label>				
					<input type="checkbox" name="homeid_displaysidebar" '.(Tools::getValue('homeid_displaysidebar', Configuration::get('HOMEID_DISPLAYSIDEBAR')) ? 'checked="checked"' : '').'value="1" />
			<br/><br/>
					<input type="submit" name="submithomeid" value="'.$this->l('Save').'" class="button" />
			</fieldset>
      	</form>';
		
		return $output.$this->getAdver();
	}
	
	function hookDisplayHome($params)
    {
        global $smarty;
		$hdate_r = date('Y-m-d H:i:s');
		$id_lang = (int)($params['cookie']->id_lang);
		$groups = implode(', ', Customer::getGroupsStatic((int)$this->context->customer->id));
		$categ_ids = explode(",", trim(Tools::getValue("categ_ids",Configuration::get('HOMEID_ID'))));                                
    			$hcby = array();
    			foreach( $categ_ids as $hc_id ){                    
    				$categ_ids[]=(int)$hc_id;
    			}                
    			$homeid_id	  = " AND c.`id_category` IN (".implode(",",$categ_ids).")";
		$homecateg = array();
		$sql_homecateg = Db::getInstance()->ExecuteS("SELECT * FROM "._DB_PREFIX_."category c
		LEFT JOIN "._DB_PREFIX_."category_lang cl ON (c.`id_category` = cl.`id_category`)
		LEFT JOIN "._DB_PREFIX_."category_group cg ON (cg.`id_category` = c.`id_category`)
		LEFT JOIN "._DB_PREFIX_."category_shop cs ON (cs.`id_category` = c.`id_category` AND cs.`id_shop` = ".(int)$this->context->shop->id.")
		WHERE c.active = 1 ".$homeid_id."
		AND cl.id_lang = ".$id_lang."
		AND cg.`id_group` IN (".pSQL($groups).")
		");
		foreach ($sql_homecateg as $catbyid)
		{
			$homcatid = array();
			$homcatid['id_category'] = $catbyid['id_category'];
			$homcatid['name'] = preg_replace('/^[0-9]+\./', '', $catbyid['name']);
			$homcatid['link_rewrite'] = $catbyid['link_rewrite'];
			$categbyid_pro = Db::getInstance()->ExecuteS("SELECT pl.*, p.*, p.id_product, i.id_image,il.legend, pl.name, pl.link_rewrite,pl.id_product, pl.id_lang, (p.`price` * IF(t.`rate`,((100 + (t.`rate`))/100),1)) AS orderprice,
			DATEDIFF(product_shop.`date_add`, DATE_SUB(NOW(),
					INTERVAL ".(Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20)."
						DAY)) > 0 AS new
			FROM "._DB_PREFIX_."category_product cp 
			LEFT JOIN "._DB_PREFIX_."category c ON (c.`id_category` = cp.`id_category`)
			LEFT JOIN "._DB_PREFIX_."product p
					ON p.`id_product` = cp.`id_product`
				".Shop::addSqlAssociation('product', 'p')."
			LEFT JOIN "._DB_PREFIX_."product_lang pl
					ON (p.`id_product` = pl.`id_product`
					AND pl.`id_lang` = '".(int)$id_lang.Shop::addSqlRestrictionOnLang('pl')."')
			LEFT JOIN "._DB_PREFIX_."image i ON (i.`id_product` = p.`id_product` AND i.`cover` = 1)
			LEFT JOIN "._DB_PREFIX_."image_lang il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = ".(int)$id_lang.")
			LEFT JOIN "._DB_PREFIX_."tax t ON t.`id_tax` = p.`id_tax_rules_group`
			LEFT JOIN "._DB_PREFIX_."tax_lang tl ON (t.`id_tax` = tl.`id_tax` AND tl.`id_lang` = '".(int)$id_lang."')
			WHERE cp.`id_category` = ".$catbyid['id_category']."
			AND p.`active` = 1
			LIMIT ".(int)Configuration::get('HOMEID_NBR')."");
			$homeprodids_ids = array();
				foreach ($categbyid_pro as $prodby)
				{
				$homr_product = array();
					$homr_product['id_product'] = $prodby['id_product'];
					$homr_product['link_rewrite'] = $prodby['link_rewrite'];
					$homr_product['name'] = $prodby['name'];
					$homr_product['id_image'] = $prodby['id_product'].'-'.$prodby['id_image'];
					$homr_product['new'] = $prodby['new'];
					$homr_product['on_sale'] = $prodby['on_sale'];
					$homr_product['show_price'] = $prodby['show_price'];
					$homr_product['available_for_order'] = $prodby['available_for_order'];
					$homr_product['price_tax_exc'] = Product::getPriceStatic($homr_product['id_product'],false);
					$homr_product['price'] = Product::getPriceStatic($homr_product['id_product'],true);
						if ( (isset($prodby['id_product'])) && ($prodby['id_product'] <> '')){
						$homr_product['new_price'] = '';
						$specific_reduc = Db::getInstance()->ExecuteS('SELECT * 
						FROM '._DB_PREFIX_.'specific_price
						WHERE id_product = '.$prodby['id_product'].' 
						AND (`from` = \'0000-00-00 00:00:00\' OR (\''.$hdate_r.'\' >= `from` AND \''.$hdate_r.'\' <= `to`)) 
						LIMIT 1');
							if($specific_reduc <> 0){
							$homr_product['new_price'] = '';
								foreach ($specific_reduc as $homrp){
								$homr_product['reduction_price'] = $homrp['reduction'];
								$homr_product['reduction_type'] = $homrp['reduction_type'];
									if($homr_product['reduction_type'] == 'percentage'){
										$homr_product['new_price'] = round($homr_product['price']-($homr_product['price']*$homr_product['reduction_price']), 2);	
										$homr_product['reduction_price'] =  $homr_product['reduction_price']*100;
									}else{
										$homr_product['new_price'] = round($homr_product['price']-$homr_product['reduction_price'],0);
										$homr_product['new_price'] = Product::getPriceStatic($prodby['id_product'],true);
									}	
								}
							}
						}
			$homeprodids_ids[] = $homr_product;
			$homcatid['homeproductbyid'] = $homeprodids_ids;
			}
			$homecateg[] = $homcatid;
		}
		$this->smarty->assign(array(
		'homecateg' => $homecateg,
		'display_hci' => (int)Configuration::get('HOMEID_DISPLAY'),));
		return $this->display(__FILE__, 'homecategoriebyid.tpl');
	}

	public function hookdisplayLeftcolumn($params)
    {
        global $smarty;
		$sdate_r = date('Y-m-d H:i:s');
		$sidebarcat_id = (int)Configuration::get('SIDEBARID_ID');
		$groups = implode(', ', Customer::getGroupsStatic((int)$this->context->customer->id));
		$id_lang = (int)($params['cookie']->id_lang);
		$sidebarcateg = array();
		$sidebar_catid = Db::getInstance()->ExecuteS("SELECT * FROM "._DB_PREFIX_."category c
		LEFT JOIN "._DB_PREFIX_."category_lang cl ON (c.`id_category` = cl.`id_category`)
		LEFT JOIN "._DB_PREFIX_."category_group cg ON (cg.`id_category` = c.`id_category`)
		LEFT JOIN "._DB_PREFIX_."category_shop cs ON (cs.`id_category` = c.`id_category` AND cs.`id_shop` = ".(int)$this->context->shop->id.")
		WHERE c.active = 1
		AND c.`id_category` = ".$sidebarcat_id."
		AND cl.id_lang = ".$id_lang."
		AND cg.`id_group` IN (".pSQL($groups).")");
		foreach ($sidebar_catid as $sidebarbyid)
		{
			$sidebarcatid = array();
			$sidebarcatid['id_category'] = $sidebarbyid['id_category'];
			$sidebarcatid['name'] = preg_replace('/^[0-9]+\./', '', $sidebarbyid['name']);
			$sidebarcatid['link_rewrite'] = $sidebarbyid['link_rewrite'];
			$sidebarcategbyid_pro = Db::getInstance()->ExecuteS("SELECT pl.*, p.*, p.id_product, i.id_image,il.legend, pl.name, pl.link_rewrite,pl.id_product, pl.id_lang, (p.`price` * IF(t.`rate`,((100 + (t.`rate`))/100),1)) AS orderprice
			FROM "._DB_PREFIX_."category_product cp 
			LEFT JOIN "._DB_PREFIX_."category c ON (c.`id_category` = cp.`id_category`)
			LEFT JOIN "._DB_PREFIX_."product p
					ON p.`id_product` = cp.`id_product`
				".Shop::addSqlAssociation('product', 'p')."
			LEFT JOIN "._DB_PREFIX_."product_lang pl
					ON (p.`id_product` = pl.`id_product`
					AND pl.`id_lang` = '".(int)$id_lang.Shop::addSqlRestrictionOnLang('pl')."')
			LEFT JOIN "._DB_PREFIX_."image i ON (i.`id_product` = p.`id_product` AND i.`cover` = 1)
			LEFT JOIN "._DB_PREFIX_."image_lang il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = ".(int)$id_lang.")
			LEFT JOIN "._DB_PREFIX_."tax t ON t.`id_tax` = p.`id_tax_rules_group`
			LEFT JOIN "._DB_PREFIX_."tax_lang tl ON (t.`id_tax` = tl.`id_tax` AND tl.`id_lang` = '".(int)$id_lang."')
			WHERE cp.`id_category` = ".$sidebarbyid['id_category']."
			AND p.`active` = 1
			LIMIT ".(int)Configuration::get('SIDEBARID_NBR')."");
			$sidebarprodids_ids = array();
			foreach ($sidebarcategbyid_pro as $sidebarprodby)
			{
			$sidebarr_product = array();
			$sidebarr_product['id_product'] = $sidebarprodby['id_product'];
			$sidebarr_product['link_rewrite'] = $sidebarprodby['link_rewrite'];
			$sidebarr_product['name'] = $sidebarprodby['name'];
			$sidebarr_product['id_image'] = $sidebarprodby['id_product'].'-'.$sidebarprodby['id_image'];
			$sidebarr_product['on_sale'] = $sidebarprodby['on_sale']; 
			$sidebarr_product['quantity'] = $sidebarprodby['quantity'];
			$sidebarr_product['show_price'] = $sidebarprodby['show_price'];
			$sidebarr_product['available_for_order'] = $sidebarprodby['available_for_order'];
			$sidebarr_product['price_tax_exc'] = Product::getPriceStatic($sidebarr_product['id_product'],false);
					$sidebarr_product['price'] = Product::getPriceStatic($sidebarr_product['id_product'],true);
						if ( (isset($sidebarprodby['id_product'])) && ($sidebarprodby['id_product'] <> '')){
						$sidebarr_product['new_price'] = '';
						$specific_reduc = Db::getInstance()->ExecuteS('SELECT * 
						FROM '._DB_PREFIX_.'specific_price
						WHERE id_product = '.$sidebarprodby['id_product'].' 
						AND (`from` = \'0000-00-00 00:00:00\' OR (\''.$sdate_r.'\' >= `from` AND \''.$sdate_r.'\' <= `to`)) 
						LIMIT 1');
							if($specific_reduc <> 0){
							$sidebarr_product['new_price'] = '';
								foreach ($specific_reduc as $sidebarrp){
								$sidebarr_product['reduction_price'] = $sidebarrp['reduction'];
								$sidebarr_product['reduction_type'] = $sidebarrp['reduction_type'];
									if($sidebarr_product['reduction_type'] == 'percentage'){
										$sidebarr_product['new_price'] = round($sidebarr_product['price']-($sidebarr_product['price']*$sidebarr_product['reduction_price']), 2);	
										$sidebarr_product['reduction_price'] =  $sidebarr_product['reduction_price']*100;
									}else{
										$sidebarr_product['new_price'] = round($sidebarr_product['price']-$sidebarr_product['reduction_price'],0);
										$sidebarr_product['new_price'] = Product::getPriceStatic($sidebarprodby['id_product'],true);
									}	
								}
							}
						}
			$sidebarprodids_ids[] = $sidebarr_product;
			$sidebarcatid['sideproductbyid'] = $sidebarprodids_ids;
			}
			$sidebarcateg[] = $sidebarcatid;
		}
		$this->smarty->assign(array(
			'sidebarcateg' => $sidebarcateg, 
			'display_sci' => (int)Configuration::get('HOMEID_DISPLAYSIDEBAR'),));
		return $this->display(__FILE__, 'homecategoriebyids.tpl');
	}
	public function hookDisplayHeader($params)
	{
	$this->context->controller->addCSS($this->_path.'homecategoriebyids.css', 'all');
	$this->context->controller->addCSS($this->_path.'homecategoriebyid.css');
	}
}