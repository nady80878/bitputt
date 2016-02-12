<div class="aside">
	
	<div class="brands-box">

		<ul class="brands">
			<li class="brands-header"><h2>Brands</h2></li>
			<li><a href="">brand test - (10)</a></li>
			<li><a href="">brand test - (10)</a></li>
			<li><a href="">brand test - (10)</a></li>
			<li><a href="">brand test - (10)</a></li>
			<li><a href="">brand test - (10)</a></li>
			<li><a href="">brand test - (10)</a></li>
			<li><a href="">brand test - (10)</a></li>
			<li><a href="">brand test - (10)</a></li>
		</ul>
	</div>
	<div class="products-box">
		<ul class="products">
			<li class="products-header"><h2>Products</h2></li>
			<li class="clear">
				<img src="<?php echo Url::img('product.png'); ?>" alt="">
				<div class="product-content">
					<div class="product-label"><a href="">Product sample label</a></div>
					<div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reiciendis </div>
					<div class="product-rating clear"></div>
					<div class="product-price"><strike class="product-price-old">$869</strike><span class="product-price-new">$365</span></div>
				</div>
			</li>
			<li class="clear">
				<img src="<?php echo Url::img('product.png'); ?>" alt="">
				<div class="product-content">
					<div class="product-label"><a href="">Product sample label</a></div>
					<div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reiciendis </div>
					<div class="product-rating clear"></div>
					<div class="product-price"><strike class="product-price-old">$869</strike><span class="product-price-new">$365</span></div>
				</div>
			</li>
			<li class="clear">
				<img src="<?php echo Url::img('product.png'); ?>" alt="">
				<div class="product-content">
					<div class="product-label"><a href="">Product sample label for kids and childrens</a></div>
					<div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reiciendis </div>
					<div class="product-rating clear"></div>
					<div class="product-price"><strike class="product-price-old">$869</strike><span class="product-price-new">$365</span></div>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="section">
	<ul class="profile-tabs">
		<li>	
			<input id="tab-1" type="radio" name="tab-group" checked>
			<label for="tab-1">Profile</label>
			<div class="tab-content">
				<div class="user-info clear">
					<div class="user-avatar">
						<img src="<?php echo $user->getAvatar(); ?>" alt="avatar">
					</div>
					<div class="user-data">
						<div class="user-name"><?php echo $user->getFullname();?></div>
						<div class="user-email"><?php echo $user->getEmail();?></div>
						<div class="user-address"><?php echo $user->getStreetAddress();?></div>
					</div>
				</div>
				<div class="user-label">
					<h2>Details About Me</h2>
				</div>
				<div class="clear">
					<div class="user-contacts">
						<h4>Shiping Address & Contacts</h4>
						<span class="contacts-label">Email: </span>
						<div class="email"><?php echo $user->checkFieldValue($user->getEmail());?></div>
						<span class="contacts-label">Telephone: </span>
						<div class="tele"><?php echo $user->checkFieldValue($user->getTelephone());?></div>
						<span class="contacts-label">Country: </span>
						<div class="country"><?php echo $user->checkFieldValue($user->getCountry());?></div>
						<span class="contacts-label">City: </span>
						<div class="city"><?php echo $user->checkFieldValue($user->getCity());?></div>
						<span class="contacts-label">State: </span>
						<div class="state"><?php echo $user->checkFieldValue($user->getState());?></div>
						<span class="contacts-label">Zip Code: </span>
						<div class="zipcode"><?php echo $user->checkFieldValue($user->getZipCode());?></div>
						<span class="contacts-label">Street Address: </span>
						<div class="street_address"><?php echo $user->checkFieldValue($user->getStreetAddress());?></div>
					</div>
					
					<div class="user-desc">
						<h4>How Am I ?</h4>
						<p>
							<?php echo $user->checkFieldValue($user->getDescription());?>
						</p>
						<h4>My Tags</h4>
						<div class="tags clear">
							<ul>
								<li><a href="">Acessories</a></li>
								<li><a href="">Jwellery</a></li>
								<li><a href="">Rings</a></li>
								<li><a href="">Beautiful</a></li>
								<li><a href="">Babies</a></li>
								<li><a href="">Low price</a></li>
								<li><a href="">Discount</a></li>
								<li><a href="">Light Color</a></li>
								<li><a href="">Emotions</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="user-label">
					<h2>Category Classification</h2>
				</div>
				<div class="user-categorys">

					<table>
						<tbody>
							<tr>
								<td class="cate-header">Category</td>
								<td class="cate-header">No.Items</td>
								<td class="cate-header">Items</td>
								<td class="cate-header">Rating</td>
							</tr>
							<tr>
								<td>Accessories</td>
								<td>3</td>
								<td>
									<ul>
										<li>item one</li>
										<li>item two</li>
										<li>item three</li>
									</ul>
								</td>
								<td><div data-score ="3" class="rating"></div></td>
							</tr>
							<tr>
								<td>Decoration</td>
								<td>3</td>
								<td>
									<ul>
										<li>item one</li>
										<li>item two</li>
										<li>item three</li>
									</ul>
								</td>
								<td><div data-score ="4" class="rating"></div></td>
							</tr>
							<tr>
								<td>Wedding accessories</td>
								<td>3</td>
								<td>
									<ul>
										<li>item one</li>
										<li>item two</li>
										<li>item three</li>
									</ul>
								</td>
								<td><div data-score ="5" class="rating"></div></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</li>
		<li>	
			<input id="tab-2" type="radio" name="tab-group">
			<label for="tab-2">Setting</label>
			<div class="tab-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum libero dicta quasi, dolores. Aperiam delectus ducimus expedita praesentium doloribus illo nihil vitae amet eaque iure! Ducimus accusamus ut velit at.</p>
			</div>
		</li>
		<li>

			<input id="tab-3" type="radio" name="tab-group">
			<label for="tab-3">Products</label>
			<div class="tab-content">
				<div class="user-label">
					<h2>My Profolio</h2>
				</div>
				<div class="user-products">
					<div class="new-products clear">
						<div class="new-product">
							<div class="new-product-content">
								<a href="" class="new-product-img"><img src="<?php echo Url::img('banner-4.png'); ?>" alt=""></a>
								<div class="new-product-header"><a href="">Sample product label</a></div>
								<div class="new-product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iusto quidem atque ratione, amet quaerat tenetur,</div>
								<div class="new-product-price"><span>$364</span></div>
								<div class="new-product-controls"><a href="" class="cart"><span class="fa fa-shopping-cart fa-2x"></span></a><a href="" class="details"><span>Details</span></a></div>
							</div>
						</div>
						<div class="new-product">
							<div class="new-product-content">
								<a href="" class="new-product-img"><img src="<?php echo <?php echo Url::img('banner-5.png'); ?>" alt=""></a>
								<div class="new-product-header"><a href="">Sample product label</a></div>
								<div class="new-product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iusto quidem atque ratione, amet quaerat tenetur,</div>
								<div class="new-product-price"><span>$632</span></div>
								<div class="new-product-controls"><a href="" class="cart"><span class="fa fa-shopping-cart fa-2x"></span></a><a href="" class="details"><span>Details</span></a></div>
							</div>
						</div>
						<div class="new-product">
							<div class="new-product-content">
								<a href="" class="new-product-img"><img src="<?php echo <?php echo Url::img('banner-6.png'); ?>" alt=""></a>
								<div class="new-product-header"><a href="">Sample product label</a></div>
								<div class="new-product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iusto quidem atque ratione, amet quaerat tenetur,</div>
								<div class="new-product-price"><span>$967</span></div>
								<div class="new-product-controls"><a href="" class="cart"><span class="fa fa-shopping-cart fa-2x"></span></a><a href="" class="details"><span>Details</span></a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="user-products">
					<div class="new-products clear">
						<div class="new-product">
							<div class="new-product-content">
								<a href="" class="new-product-img"><img src="<?php echo <?php echo Url::img('banner-4.png'); ?>" alt=""></a>
								<div class="new-product-header"><a href="">Sample product label</a></div>
								<div class="new-product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iusto quidem atque ratione, amet quaerat tenetur,</div>
								<div class="new-product-price"><span>$364</span></div>
								<div class="new-product-controls"><a href="" class="cart"><span class="fa fa-shopping-cart fa-2x"></span></a><a href="" class="details"><span>Details</span></a></div>
							</div>
						</div>
						<div class="new-product">
							<div class="new-product-content">
								<a href="" class="new-product-img"><img src="<?php echo <?php echo Url::img('banner-5.png'); ?>" alt=""></a>
								<div class="new-product-header"><a href="">Sample product label</a></div>
								<div class="new-product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iusto quidem atque ratione, amet quaerat tenetur,</div>
								<div class="new-product-price"><span>$632</span></div>
								<div class="new-product-controls"><a href="" class="cart"><span class="fa fa-shopping-cart fa-2x"></span></a><a href="" class="details"><span>Details</span></a></div>
							</div>
						</div>
						<div class="new-product">
							<div class="new-product-content">
								<a href="" class="new-product-img"><img src="<?php echo <?php echo Url::img('banner-6.png'); ?>" alt=""></a>
								<div class="new-product-header"><a href="">Sample product label</a></div>
								<div class="new-product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iusto quidem atque ratione, amet quaerat tenetur,</div>
								<div class="new-product-price"><span>$967</span></div>
								<div class="new-product-controls"><a href="" class="cart"><span class="fa fa-shopping-cart fa-2x"></span></a><a href="" class="details"><span>Details</span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>	
	</ul>
</div>