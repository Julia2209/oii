<div class="table-pictures-shop">
    <?php
    require_once('database/ProductController.php');

    $parts = parse_url($_SERVER['REQUEST_URI']);
    parse_str($parts['query'], $query);
    $n = $query['n'];
    if($n == null) $n=7;

    $orders = ProductController::GetUserOrders($n);
    while($row = mysql_fetch_array($orders)){
        $productsInOrder = ProductController::GetOrderProducts($row["Id"]);

        echo '<table class="table col-md-8">
            <thead>
                <tr>
                    <td colspan="2" class="text-center"><strong>Заказ №'.$row["Id"].' (от '.$row["Date"].')</strong></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Название картины</td>
                    <td>Цена</td>
                </tr>
            </thead>
            <tbody>';
        while($row = mysql_fetch_array($productsInOrder)){
            echo '<tr class="price-item" index='.$row["Id"].' id='.$row["Id"].'>
                            <td>'.$row["Name"].'<img src="img/photo'.$row["Id"].'.png"></td>
                            <td>'.$row["Price"].'</td>
                        </tr>';
        }
        
        echo'</tbody>
        </table>
        <br />
        <br />';

    }
    ?>
</div>
