<?php require_once('includes/header.php'); ?>
<?php require_once('includes/header_top2.php'); ?>

<section class="dd-brad-wrap">
	<div class="container">
		<div class="row">
			<div class="dd-bradcrumps">
				<a href="#">Главная</a><span>Каталог</span>
			</div>	
			<div class="dd-catalog-title">
				<span>Товары из тупичка</span>
				<span>Подобрано 326 товаров</span>
			</div>
			<div class="dd-knopki">
				<a href="#"></a>
				<a href="#"></a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>

<section class="dd-catalog-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3 hidden-sm hidden-xs padding-none">
				<?php require_once('includes/catalog.php'); ?>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12 padding-none">
				<div class="dd-cat">
					<div class="dd-sortirovka float-left-only">
						<span>Сортировка</span>
					</div>
					<div class="az-select az-select-reiting float-left-only">
						<select name="" id="">
							<option value="1">По рейтингу</option>
							<option value="2">от дешевых к дорогим</option>
							<option value="3">от дорогих к дешевым</option>
							<option value="4">популярные</option>
							<option value="5">новинки</option>
							<option value="6">акционные</option>	
						</select>
					</div>
					<div class="dd-sortirovka float-right-only">
						<span>Показать только:</span>
						<a class="dd-a-recomend" href="#">гоблин рекомендует</a>
						<a class="dd-a-recomend" href="#">с подарками</a>
						<a class="dd-a-recomend2"href="#">популярные за октябрь</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<?php require_once('includes/catalogproduct3.php'); ?>	
				<div class="section_padding ">
					<div class="df-pagination df-pagination_view">
						<a href="#" class="df-pagination__link1 df-pagination__link1_view">Назад</a>
						<div class="df-pagination__numbers df-pagination__numbers_view">
							<a href="#">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">6</a>	
						</div>
						<a href="#" class="df-pagination__link2 df-pagination__link2_view">вперед</a>
					</div>
				</div>
			</div>	
		</div>
	</div>
</section>







<?php require_once('includes/protect.php'); ?>	
<?php require_once('includes/shop-goblin2.php'); ?>	
<?php require_once('includes/footer.php'); ?>




</body>
</html>

