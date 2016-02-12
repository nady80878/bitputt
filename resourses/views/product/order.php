<div class="upload-form">
	<div id="upload-area" class="upload-area">
		<h2>Drag file to upload</h2>
	</div>
	<form action="<?php echo Url::getUrl('upload'); ?>" method="post" spell-check="false" enctype='multipart/form-data' accept-charset="utf-8">
		<div class="upload-form-file">
			<input type="file" name="img" value="Upload Product Image" placeholder="">
		</div>
		<div class="upload-form-name">
			<input type="text" name="name" placeholder="Order Name">
		</div>
		<div class="upload-form-category">
			<select name="category" >
				<option value="accessories">accessories</option>
				<option value="wedding-accessories">wedding-accessories</option>
				<option value="decoration">decoration</option>
				<option value="rings">rings</option>
			</select>
		</div>
		<div class="upload-form-desc">
			<textarea name="desc"></textarea>
		</div>
		<div class="upload-form-suggestion">
			<textarea name="suggestion"></textarea>
		</div>
		<div class="upload-btn">
			<button type="submit">Send My Order</button>
		</div>
	</form>
</div>