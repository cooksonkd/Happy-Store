<?php
	include('header.php');
?>
    <div class="content">

        <h1>Surf Boards</h1>

	    <?php
            include('dbc.php');
            $surfBoardsQuery = "SELECT * FROM inventory WHERE category = 'Surf Boards'";
            $queryResult = $dbc->query($surfBoardsQuery);
            if($queryResult){
                while($row = $queryResult->fetch_array()){
                    echo '<div class="item">';
                    echo '<div class="itemTitle">';
                    echo '<h3>' . htmlentities($row['item_name']) . '</h3>';
                    echo '</div>';
                    echo '<img src=" ' . htmlentities($row['image_link']) . ' " alt=" ' . htmlentities($row['item_name']) . ' " />';
	                echo '<div class="itemPurchase">';
	                echo '<p class="availability">Availability: ';
	                if((htmlentities($row['quantity'])) < 10){
	                    echo '<span style="color: red;">' . htmlentities($row['quantity']) . ' Left</span></p>';
                    }
                    else{
	                    echo '<span style="color: green;">In stock</span></p>';
                    }
	                echo '<p class="price">PRICE: R ' . htmlentities($row['price']) . '</p>';
	                echo '<form action="" method="">';//
	                echo '<div class="qty"><label>Qty : </label><input type="text" size="1" class="quantity" name="quantity" value="1" /></div>';
	                echo '<input type="submit" class="addToCart" name="addToCart" value="Add To Cart" />';
	                echo '</form>';
	                echo '</div>';
                    echo '<div class="itemDesc">';
                    echo '<p>' . htmlentities($row['item_description']) . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            }
	    ?>

    </div>
<?php
	include('footer.php');
?>