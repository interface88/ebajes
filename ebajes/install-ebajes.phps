<?php
 
################################################################################
### CONFIGURE HERE
################################################################################

$dbhost = "localhost";	# Database host name
$dbname = "ebajes"; # Database name
$dbuser = "root"; # Database username
$dbpass = ""; # Database password
$dbport = ""; # Database port
$adminuser = 'admin'; // magento admin username
$adminpass = ''; // magento admin password
$prefix = ""; // Database prefix tables



################################################################################
### DO NOT EDIT BELOW
################################################################################

require "install.lib.php";

install_start();

open_db($dbhost, $dbname, $dbuser, $dbpass, $dbport);

//1.Ebajes Main Slideshow
desc("Creating Block Ebajes Main Slideshow");
create_block("Ebajes Main Slideshow", "ebajes_main_slideshow", null, <<<EOB
<div>{{widget type="slideshow/create" text1="<h1>Slider 01</h1> <p>Donec non mauris mi sivamus darius enim non de tincdunt auctor tellus eros duam decos consectetuos</p> <p class = 'price'>$259.99</p> <a>Shop Now</a>" url1="furniture.html" image1="slideshow1_3.jpg" text2="<div class = 'slide_2'><h1>Slider 01</h1> <p>Donec non mauris mi sivamus darius enim non de tincdunt auctor tellus eros duam decos consectetuos</p> <p class = 'price'>$259.99</p> <a>Shop Now</a></div>" url2="apparel.html" image2="slideshow2_2.jpg" effect="random" slices="15" boxcols="8" boxrows="4" animspeed="500" pausetime="5000" directionnav="true" controlnav="false" pauseonhover="true" prevtext="Prev" nexttext="Next" randomstart="true"}}</div>
EOB
);

//2.Ebajes Account Homepage 
desc("Creating Block Ebajes Account Homepage ");
create_block("Ebajes Account Homepage ", "ebajes_account_homepage ", null, <<<EOB
<div class="account_homepage">
<div class="row1">
<p>Welcom to Ebjes. Royal Free Magento Theme</p>
<span>Nullam consectetur justo nec imperdiet feugiat felis erat dapibus turpis deleus denenatis urna purus ados arcu. Quisque a odio des man amet semos dignissim porta suspendisse facilisis. </span></div>
<div class="row2">
<div class="login">
<div class="inner">
<p>Login</p>
<span>Nulla bibendum eros a lorem tempus sollicitudin de maecenas. </span> <a title="" href="{{store direct_url="customer/account/login/"}}">Login</a></div>
</div>
<div class="singup">
<div class="inner">
<p>Signup</p>
<span>Nulla bibendum eros a lorem tempus sollicitudin de maecenas.</span> <a title="" href="{{store direct_url="customer/account/create/"}}">Signup</a></div>
</div>
</div>
</div>
EOB
);

//3.Ebajes Homepage Advertisement
desc("Creating Block Ebajes Homepage Advertisement");
create_block("Ebajes Homepage Advertisement", "ebajes_homepage_advertisement", null, <<<EOB
<div class="home_advertisement"><img src="{{media url="wysiwyg/homepage_advertisement.jpg"}}" alt="" /></div>
EOB
);

//4.Ebajes Homepage Best Sellers
desc("Creating Block Ebajes Homepage Best Sellers");
create_block("Creating Block Ebajes Homepage Best Sellers", "ebajes_homepage_best_sellers", null, <<<EOB
<div class="home_bestseller">{{widget type="filterproducts/list" type_filter="bestseller" column_count="30" limit_count="30" thumbnail_width="160" thumbnail_height="162" template="custom_template" custom_theme="halo_filterproducts/best_seller_home.phtml"}}</div>	
EOB
);

//5.Ebajes New Products Home Tab
desc("Creating Block Ebajes New Products Home Tab");
create_block("Ebajes New Products Home Tab", "ebajes_new_products_home_tab", null, <<<EOB
<div class="new_product">{{widget type="filterproducts/list" type_filter="new_products" column_count="4" limit_count="4" thumbnail_width="160" thumbnail_height="162" template="custom_template" custom_theme="halo_filterproducts/new_products_home.phtml"}}</div>
EOB
);

//6.Ebajes Featured Products Home Tab
desc("Creating Block Ebajes Featured Products Home Tab");
create_block("Ebajes Featured Products Home Tab", "ebajes_featured_products_home_tab", null, <<<EOB
<div class="featured_home_tab">{{widget type="filterproducts/list" type_filter="halo_featured" column_count="4" limit_count="4" thumbnail_width="160" thumbnail_height="162" template="custom_template" custom_theme="halo_filterproducts/featured_products_home.phtml"}}</div>
EOB
);

//7.Ebajes Sale Products Home Tab
desc("Creating Block Ebajes Sale Products Home Tab");
create_block("Ebajes Sale Products Home Tab", "ebajes_sale_products_home_tab", null, <<<EOB
<div class="sale_home_tab">{{widget type="filterproducts/list" type_filter="most_viewed" column_count="4" limit_count="4" thumbnail_width="160" thumbnail_height="162" template="custom_template" custom_theme="halo_filterproducts/onsale_products.phtml"}}</div>
EOB
);

//8.Ebajes Footer Link 1
desc("Creating Block Ebajes Footer Link 1");
create_block("Ebajes Footer Link 1", "ebajes_footer_link_1", null, <<<EOB
<div class="footer_link_1">
<h3>Static Link 01</h3>
<ul>
<li><a href="#">Suspendisse nisidos</a></li>
<li><a href="#">Docio desus litoram</a></li>
<li><a href="#">Cras denenatis</a></li>
<li><a href="#">Pellentes consequate</a></li>
<li><a href="#">Sullam congues</a></li>
<li><a href="#">Condimentum enimos</a></li>
<li><a href="#">Suspendos</a></li>
<li><a href="#">Docio desus litoram</a></li>
</ul>
</div>
EOB
);

//9.Ebajes Footer Link 2
desc("Creating Block Ebajes Footer Link 2");
create_block("Ebajes Footer Link 2", "ebajes_footer_link_2", null, <<<EOB
<div class="footer_link_2">
<h3>Static Link 02</h3>
<ul>
<li><a href="#">Suspendisse nisidos</a></li>
<li><a href="#">Docio desus litoram</a></li>
<li><a href="#">Cras denenatis</a></li>
<li><a href="#">Pellentes consequate</a></li>
<li><a href="#">Sullam congues</a></li>
<li><a href="#">Condimentum enimos</a></li>
</ul>
</div>
EOB
);

//10.Ebajes Footer Link 3
desc("Creating Block Ebajes Footer Link 3");
create_block("Ebajes Footer Link 3", "ebajes_footer_link_3", null, <<<EOB
<div class="footer_link_3">
<h3>Static Link 03</h3>
<ul>
<li><a href="#">Suspendisse nisidos</a></li>
<li><a href="#">Docio desus litoram</a></li>
<li><a href="#">Cras denenatis</a></li>
<li><a href="#">Pellentes consequate</a></li>
<li><a href="#">Sullam congues</a></li>
<li><a href="#">Condimentum enimos</a></li>
<li><a href="#">Suspendos</a></li>
<li><a href="#">Docio desus litoram</a></li>
</ul>
</div>
EOB
);

//11.Ebajes Footer Link 4
desc("Creating Block Ebajes Footer Link 4");
create_block("Ebajes Footer Link 4", "ebajes_footer_link_4", null, <<<EOB
<div class="footer_link_4">
<h3>Static Link 04</h3>
<ul>
<li><a href="#">Suspendisse nisidos</a></li>
<li><a href="#">Docio desus litoram</a></li>
<li><a href="#">Cras denenatis</a></li>
<li><a href="#">Pellentes consequate</a></li>
<li><a href="#">Sullam congues</a></li>
<li><a href="#">Condimentum enimos</a></li>
</ul>
</div>
EOB
);

//12.Ebajes Footer Link 5
desc("Creating Block Ebajes Footer Link 5");
create_block("Ebajes Footer Link 5", "ebajes_footer_link_5", null, <<<EOB
<div class="footer_link_5">
<h3>Static Link 05</h3>
<ul>
<li><a href="#">Suspendisse nisidos</a></li>
<li><a href="#">Docio desus litoram</a></li>
<li><a href="#">Cras denenatis</a></li>
</ul>
<img src="{{media url="wysiwyg/paypal.png"}}" alt="" /></div>
EOB
);

//13.Ebajes Header Block Info
desc("Creating Block Ebajes Header Block Info");
create_block("Ebajes Header Block Info", "ebajes_header_block_info", null, <<<EOB
<div class="header_block"><a>Free Shipping On All Orders</a>
<p>No Minimum Purchase</p>
</div>
EOB
);

//14.Ebajes Footer Stay Connected
desc("Creating Block Ebajes Footer Stay Connected");
create_block("Ebajes Footer Stay Connected", "ebajes_footer_stay_connected", null, <<<EOB
<div class="footer_connect">
<div class="footer_connect_content"><span>Stay Connected</span>
<ul>
<li class="icon facebook">img1</li>
<li class="icon twitter">img2</li>
<li class="icon v-icon">img3</li>
<li class="icon rss">img4</li>
</ul>
</div>
</div>
EOB
);

//15.Ebajes Quick Selections Sidebar
desc("Creating Block Ebajes Quick Selections Sidebar");
create_block("Ebajes Quick Selections Sidebar", "ebajes_quick_selections_sidebar", null, <<<EOB
<!-- Add class block, block-title, block-content for css -->
<div class="block quick_selections ">
<div class="block-title"><strong><span>Quick Selections</span></strong></div>
<div class="block-content">
<p><a href="furniture.html">Furniture</a> <span>Curabitur lobortis massa mauris</span></p>
<p><a href="furniture.html">Electronics</a> <span>Curabitur lobortis massa mauris</span></p>
<p><a href="furniture.html">Apparel</a> <span>Curabitur lobortis massa mauris</span></p>
<p><a href="furniture.html">Music</a> <span>Curabitur lobortis massa mauris</span></p>
<p><a href="furniture.html">Ebooks</a> <span>Curabitur lobortis massa mauris</span></p>
</div>
</div>
EOB
);

//16.Ebajes Home Left Ads 1
desc("Creating Block Ebajes Home Left Ads 1");
create_block("Ebajes Home Left Ads 1", "ebajes_home_left_ads_1", null, <<<EOB
<div class="left_ads_1"><img src="{{skin url="images/media/left-banner-1.jpg"}}" alt="" /></div>
EOB
);

//17.Ebajes Home Left Ads 2
desc("Creating Block Ebajes Home Left Ads 2");
create_block("Ebajes Home Left Ads 2", "ebajes_home_left_ads_2", null, <<<EOB
<div class="left_ads_2"><img src="{{skin url="images/media/left-banner-2.png"}}" alt="" /></div>
EOB
);

//18.Ebajes Right Sidebar Ads
desc("Creating Block Ebajes Right Sidebar Ads");
create_block("Ebajes Right Sidebar Ads", "ebajes_right_sidebar_ads", null, <<<EOB
<div class="right_sidebar_ads"><img src="{{media url="wysiwyg/404_callout2.jpg"}}" alt="" /></div>
EOB
);

//19.Ebajes Footer Links
desc("Creating Block Ebajes Footer Links");
create_block("Ebajes Footer Links", "ebajes_footer_links", null, <<<EOB
<div class="title">Ebajes. Royal Free Magento Theme</div>
<ul>
<li><a href="{{store direct_url="about-magento-demo-store"}}">About Us</a></li>
<li><a href="{{store direct_url="customer-service"}}">Customer Service</a></li>
<li><a href="#">Site map</a></li>
<li><a href="#">Search terms</a></li>
<li><a href="{{store direct_url="catalogsearch/advanced/"}}">Advanced search</a></li>
<li><a href="#">Orders and returns</a></li>
<li><a href="{{store direct_url="contacts"}}">Contact us</a></li>
<li><a href="#">RSS</a></li>
</ul>
EOB
);




desc("Creating Ebajes Homepage");
create_page("Ebajes Homepage", "ebajes_homepage", null, "", <<<EOB
	&nbsp;
EOB
, 'two_columns_left'
);


desc("Creating Page typography");
create_page("Typography", "typography", null, "", <<<EOB
	<h1>Heading H1</h1>
	<h2>Heading H2</h2>
	<h3>Heading H3</h3>
	<h4>Heading H4</h4>
	<h5>Heading H5</h5>
	<h6>Heading H6</h6>
	<ul>
	<li>Bullet list 1</li>
	<li>Bullet list 2                  
	<ul>
	<li>Bullet list 2.1</li>
	<li>Bullet list 2.2                  
	<ul>
	<li>Bullet list 2.2.1</li>
	<li>Bullet list 2.2.2</li>
	<li>Bullet list 2.2.3</li>
	</ul>
	</li>
	<li>Bullet list 2.3</li>
	</ul>
	</li>
	<li>Bullet list 3</li>
	<li>Bullet list 4                  
	<ul>
	<li>Bullet list 4.1</li>
	<li>Bullet list 4.2</li>
	</ul>
	</li>
	</ul>
	<ol>
	<li>Numbered list 1</li>
	<li>Numbered list 2<ol>
	<li>Numbered list 2.1</li>
	<li>Numbered list 2.2<ol>
	<li>Numbered list 2.2.1</li>
	<li>Numbered list 2.2.2</li>
	<li>Numbered list 2.2.3</li>
	</ol></li>
	<li>Numbered list 2.3</li>
	</ol></li>
	<li>Numbered list 3<ol>
	<li>Numbered list 3.1</li>
	<li>Numbered list 3.2</li>
	<li>Numbered list 3.3</li>
	</ol></li>
	</ol> <dl> <dt>definition title dt</dt> <dd>definition description dd</dd> <dt>definition title dt</dt> <dd>definition description dd</dd> </dl>
	<p><code>Code tag<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code></p>
	<blockquote>Blockquote tag<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
	<pre>Pre tag<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</pre>
	<p>table with class <strong>data-table</strong></p>
	<table class="data-table">
	<thead> 
	<tr>
	<th>thead th 1</th> <th>thead th 2</th> <th>thead th 3</th> <th>thead th 4</th>
	</tr>
	</thead> <tfoot> 
	<tr>
	<td>tfoot td 1</td>
	<td>tfoot td 2</td>
	<td>tfoot td 3</td>
	<td>tfoot td 4</td>
	</tr>
	</tfoot> 
	<tbody>
	<tr class="odd">
	<td>tbody td1</td>
	<td>tbody td2</td>
	<td>tbody td3</td>
	<td>tbody td4</td>
	</tr>
	<tr class="even">
	<td>tbody td1</td>
	<td>tbody td2</td>
	<td>tbody td3</td>
	<td>tbody td4</td>
	</tr>
	<tr class="odd">
	<td>tbody td1</td>
	<td>tbody td2</td>
	<td>tbody td3</td>
	<td>tbody td4</td>
	</tr>
	<tr class="even">
	<td>tbody td1</td>
	<td>tbody td2</td>
	<td>tbody td3</td>
	<td>tbody td4</td>
	</tr>
	</tbody>
	</table>
	<p><strong>Column Layout:</strong></p>
	<div class="cols-set-12">
	<div class="col3 col-first">
	<div class="col-inner">
	<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col3 col-first"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
	</div>
	</div>
	<div class="col3">
	<div class="col-inner">
	<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col3"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
	</div>
	</div>
	<div class="col6 col-last">
	<div class="col-inner">
	<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col6 col-last"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
	</div>
	</div>
	</div>
	<p>Text after column layout</p>
	<div class="cols-set-12">
	<div class="col2 col-first">
	<div class="col-inner">
	<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2 col-first"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
	</div>
	</div>
	<div class="col2">
	<div class="col-inner">
	<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
	</div>
	</div>
	<div class="col2">
	<div class="col-inner">
	<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
	</div>
	</div>
	<div class="col2">
	<div class="col-inner">
	<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
	</div>
	</div>
	<div class="col2">
	<div class="col-inner">
	<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
	</div>
	</div>
	<div class="col2 col-last">
	<div class="col-inner">
	<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2 col-last"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
	</div>
	</div>
	</div>
EOB
, "one_column");

desc("Creating Page widgets");
create_page("Widgets", "widgets", null, "Widgets", <<<EOB
	<h3>Widget: Catalog Category Link - Block Template</h3>
	<p>{{widget type="catalog/category_widget_link" template="catalog/category/widget/link/link_block.phtml" id_path="category/10"}}</p>
	<h3>Widget: Catalog Category Link - Inline Template</h3>
	<p>{{widget type="catalog/category_widget_link" template="catalog/category/widget/link/link_inline.phtml" id_path="category/10"}}</p>
	<h3>Widget: Catalog New Products List - Grid Template</h3>
	<p>{{widget type="catalog/product_widget_new" products_count="5" column_count="3" template="catalog/product/widget/new/content/new_grid.phtml"}}</p>
	<h3>Widget: Catalog New Products List - List Template</h3>
	<p>{{widget type="catalog/product_widget_new" products_count="5" template="catalog/product/widget/new/content/new_list.phtml"}}</p>
	<h3>Widget: Catalog Product Link - Block Template</h3>
	<p>{{widget type="catalog/product_widget_link" template="catalog/product/widget/link/link_block.phtml" id_path="product/16"}}</p>
	<h3>Widget: Catalog Product Link - Inline Template</h3>
	<p>{{widget type="catalog/product_widget_link" template="catalog/product/widget/link/link_inline.phtml" id_path="product/16"}}</p>
	<h3>Widget: Recently Compared Products - Grid Template</h3>
	<p>{{widget type="reports/product_widget_compared" page_size="5" column_count="3" template="reports/widget/compared/content/compared_grid.phtml"}}</p>
	<h3>Widget: Recently Compared Products - List Template</h3>
	<p>{{widget type="reports/product_widget_compared" page_size="5" template="reports/widget/compared/content/compared_list.phtml"}}</p>
	<h3>Widget: Recently Viewed Products - Grid Template</h3>
	<p>{{widget type="reports/product_widget_viewed" page_size="5" column_count="3" template="reports/widget/viewed/content/viewed_grid.phtml"}}</p>
	<h3>Widget: Recently Viewed Products - List Template</h3>
	<p>{{widget type="reports/product_widget_viewed" page_size="5" template="reports/widget/viewed/content/viewed_list.phtml"}}</p>
EOB
, "two_columns_left");


desc("Active theme ebajes");
set_theme('ebajes');

desc("Flush Magento cache");
flush_cache();

#login($adminuser, $adminpass);

install_end();
