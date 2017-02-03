<?php require_once('includes/header.php'); ?>
<div class="container-tech-php">
	<br><br>
	<h3>Кнопка</h3>	<br>		
	<a href="#" class="button-1">В корзину</a>	
	<br><br>

	<!-- Заголовок H1 -->
	<div class="dd-wrap-tech-h1">
		<h1>Пример заголовка H1</h1>
	</div>
	<!-- Конец заголовок -->

	<br>

	<h3>Инпут, сабмит и селект для поиска по разделам с классами input-view, az-select, submit-view</h3>	<br>
	<form action="#">


		
		<!-- Инпут -->
		<div class="input-wrap">
			<input class="input-view input-view_width" type="text" value="" placeholder="Поиск лучших товаров..">
		</div>
		<!-- Конец инпут -->

		<!-- Селект -->
		<div  class="az-select">
			<select name="" id="">
				<option value="1">Все разделы</option>
				<option value="2">тест</option>
				<option value="3">тест</option>
				<option value="4">тест</option>
				<option value="5">тест</option>
				<option value="6">тест</option>
				<option value="7">тест</option>
				<option value="8">тест</option>
				<option value="9">тест</option>
				<option value="9">тест</option>
			</select>
		</div>
		<!-- Конец селект -->

		<!-- Сабмит -->
		<input class="submit-view submit-view-width" type="submit" value="Поиск">	
		<!-- конец сабмит -->
	</form>	
	<br>
	<h3>Селект для карточки товара с доп классом az-select2</h3>
	<div  class="az-select az-select2">
		<select class="next-select" name="" id="">
			<option value="1">XL 48</option>
			<option value="2">тест</option>
			<option value="3">тест</option>
			<option value="4">тест</option>
			<option value="5">тест</option>
			<option value="6">тест</option>
			<option value="7">тест</option>
			<option value="8">тест</option>
			<option value="9">тест</option>
			<option value="9">тест</option>
		</select>
	</div>	
	<br>
	<h3>Кнопка в корзину с изображением</h3><br>
	<a class="button-1 button-2" href="#">В корзину</a><br><br>

	<h3>Кнопки переключения</h3><br>
	<div class="df-number">
		<span class="dfbutton dfbutton2">-</span>
		<input type="text" value="1" disabled="disabled">  
		<span class="dfbutton dfbutton3">+</span>
	</div>			
	<br><br>

	<h3>Радио кнопки</h3><br>
	<label class="radio-lable">
		<input class="checkbox" type="radio" name="checkbox-test" checked>
		<span class="checkbox-custom"></span>
		<span class="label"></span>
	</label>
	<label class="radio-lable">
		<input class="checkbox" type="radio" name="checkbox-test" checked>
		<span class="checkbox-custom"></span>
		<span class="label"></span>
	</label>
	<label class="radio-lable">
		<input class="checkbox" type="radio" name="checkbox-test" checked>
		<span class="checkbox-custom"></span>
		<span class="label"></span>
	</label>
	<label class="radio-lable">
		<input class="checkbox" type="radio" name="checkbox-test" checked>
		<span class="checkbox-custom"></span>
		<span class="label"></span>
	</label>
	<label class="radio-lable">
		<input class="checkbox" type="radio" name="checkbox-test" checked>
		<span class="checkbox-custom"></span>
		<span class="label"></span>
	</label>

		<br><br>
</div>

<?php require_once('includes/footer.php'); ?>


</body>
</html>

