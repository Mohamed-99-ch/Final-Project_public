<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Add Product</title> -->
    <link rel="stylesheet" href="Add Product Page_style.css">
</head>

<body>
    <div class="free_div"></div>

    <div class="container">
        <div class="header">
            <h3 class="main_title">Add Product</h3>
            <br>
            <div class="main_details">
                The most important feature in the product editing section is the product adding part. When adding products here,do not ignore to fill in all the required fields completely and follow the product adding rules.
            </div>
        </div>

        <div class="section">
            <a href="#">Overview</a>
            <div class="add_product">+Add Product</div>
        </div>
        <!-- ------------------------------------------ -------->
        <div class="pro_details">
            <h4 class="pro_name">Product Name</h4>
            <input type="text" placeholder="Product Name" class="pro_name_input">
            <div class="name_condition">
                Do not exceed 20 characters when entering the product name
            </div>
            <h5 class="category">Category</h5>
            <div class="require_sign">!</div>
            <br>
            <select name="" id="" class="cat_options">
                <option class="cat_option">Men</option>
                <option class="cat_option">women</option>
                <option class="cat_option">Kids</option>
                <option class="Cat_option">Sport</option>
            </select>
            <br>
            <h5 class="brand">Brand</h5>
            <br>
            <select name="" id="" class="brand_options">
                <option class="brand_option">Nike</option>
                <option class="brand_option">Puma</option>
                <option class="brand_option">Adiddas</option>
                <option class="brand_option">Filla</option>
            </select>
            <br>
            <h5 class="desc">Description</h5>
            <div class="require_sign">!</div>
            <br>
            <textarea name="" id="" class="desc_textarea" cols="45" rows="10" placeholder="Please write a description for the broduct"></textarea>
            <div class="description_condition">
                Do not exceed 100 characters when entering the product name.
            </div>
            <h5 class="price">Price</h5>
            <br>
            <input type="number" class="price_input" placeholder="Price">
            <br>
            <h5 class="price_sale">Price Sale</h5>
            <br>
            <input type="number" class="price_sale_input" placeholder="Price Sale">
            <br>
            <h5 class="sp">Specifications</h5>
            <br>
            <input type="text" class="sp_input" placeholder="Specifications">
            <br>
            <a href="#">Add New</a>
        </div>
        <!-- ------------------------------------------------------ -->
        <div class="pro_imag">
            <h5 class="pro_img">Product Images</h5>
            <div class="require_sign">!</div>

            <div class="img_box">
                <div class="main_img"></div>
                <div class="drop_img_1">
                    Drop the product image here:
                    <input type="file">
                </div>
                <div class="img_drop">
                    <div class="drop_img_2">
                        <input type="file">
                    </div>
                    <div class="drop_img_3">
                        <input type="file">
                    </div>
                </div>
            </div>

            <div class="img_condition">
                You need to add at least 4 images. Pay attention to the quality of the pictures you add, comly with the background color standards.Pictures must be in certain dimensions. Notice that the product shows all the details.
            </div>

            <div class="size_box">
                <h5>Add Size</h5>
                <select name="" id="" class="size_select">
                    <option value="" class="size_option">S</option>
                    <option value="" class="size_option">M</option>
                    <option value="" class="size_option">L</option>
                    <option value="" class="size_option">XL</option>
                    <option value="" class="size_option">XLL</option>
                    <option value="" class="size_option">XLL</option>
                </select>
            </div>

            <div class="date_box">
                <h5>Product Date</h5>
                <input type="date" class="date_input">
            </div>

            <div class="size_button">
                <div class="size_b">S</div>
                <div class="size_b">M</div>
                <div class="size_b">L</div>
                <div class="size_b">XL</div>
                <div class="size_b">XLL</div>
                <div class="size_b">XLLL</div>
            </div>

            <input type="submit" value="Add Product" class="add_button">

            <input type="submit" value="Save Product" class="save_button">
        </div>
    </div>
</body>

</html>