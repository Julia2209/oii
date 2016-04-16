<div class="title-shop">
    <h3>Inspiration-Маркет</h3> 
    <p id="text-shop"><img id="img-shop" src="img/pictures-shop.jpg">Один из крупнейших и динамичных частных центров современного искусства в Центральной и Восточной Европе. Он был создан украинскими студентками и просто хорошими людьми Юлией Харченко и Анной Николевой в апреле 2016 года как основной проект Интернет технологий в сфере технологий и культуры.</p>
</div>

<div class="table-pictures-shop">
    <!--<div id="scroll-button">
        <div class="scroll" id="scroll-up"><img src="img/button-up.png"/></div>
        <div class="scroll" id="scroll-down"><img src="img/button-down.png"/></div>
    </div>-->
	<!--<table class="shop-pictures">
		<tr>
            <td><img src="img/preview1.png" class="none-checked"></td>
			<td><img src="img/photo2.png" class="none-checked"></td>
		</tr>
		<tr class="name-picture">
			<td>Picture</td>
			<td>Picture</td>
		</tr>
		<tr>
			<td><img src="img/photo4.png" class="none-checked" ></td>
			<td><img src="img/photo3.png" class="none-checked"></td>
		</tr>
		<tr class="name-picture">
			<td>Бла бла бла<br />Красивое фото</td>
			<td>Picture</td>
		</tr>
		<tr>
			<td><img src="img/preview1.png" class="none-checked"></td>
			<td><img src="img/photo4.png" class="none-checked"></td>
		</tr>
		<tr class="name-picture">
			<td>Picture</td>
			<td>Picture</td>
		</tr>
		<tr>
			<td><img src="img/preview1.png" class="none-checked"></td>
			<td><img src="img/photo4.png" class="none-checked"></td>
		</tr>
		<tr class="name-picture">
			<td>Picture</td>
			<td>Picture</td>
		</tr>
		<tr class="button-table-shop">
			<td><button id="cancel">Отмена</button></td>
			<td><button id="add-basket">Добавить в корзину</button></td>
		</tr>
	</table>-->

    <table class="table col-md-8">
            <thead>
                <tr>
                    <td colspan="2" class="text-center">Таблица товаров</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Название картины</td>
                    <td>Цена</td>
                    <td>Количество</td>
                    <td>Заказать</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('database/ProductController.php');
                $ProductList = ProductController::GetAllProducts();
                $isFirst = true;
                while($row = mysql_fetch_array($ProductList)){
                    echo '<tr class="price-item" index='.$row["Id"].' id='.$row["Id"].'>
                            <td>'.$row["Name"].'<img class="img-item" src="img/photo'.$row["Id"].'.png"></td>
                            <td>'.$row["Price"].'</td>
                            <td>'.$row["Amount"].'</td>
                            <td><input id="IsSel'.$row["Id"].'" type="checkbox"/></td>
                            <td>
                                <div id="extra-info'.$row["Id"].'">
	                                '.$row["Description"].'
                                </div>
                            </td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>

        <button id="btn-up" class="btn btn-default">Вверх</button>
        <button id="btn-down" class="btn btn-default">Вниз</button>
        <button id="btn-select" class="btn btn-default">Выбрать</button>
        <button id="btn-send" class="btn btn-default">В корзину</button>
</div>

<div class="overlay" hidden>
    <div class="modal">
        <table>
            <tr>
                <td>Название</td><td id="name"></td>
            </tr>
            <tr>
                <td>Цена</td><td id="price"></td>
            </tr>
            <tr>
                <td>Остаток на складе</td><td id="amount"></td>
            </tr>
            <tr>
                <td>Описание</td><td id="desc"></td>
            </tr>
        </table>
        <button id="btn-ok">OK</button>
    </div>
</div>