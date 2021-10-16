<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Add Product Page_style.css">
    <!-- <title>Add Product Page</title> -->
</head>

<body>
    <div class="container">
        <h1 class="tit">Add a product</h1>

        <div class="detales">
            The most important feature in the product editing section is the product adding part. When adding products here,do not ignore to fill in all the required fields completely and follow the product adding rules.
        </div>

        <div class="product_name">
            <h3 class="pro_name">Product Name</h3><br>
            <input type="text" class="pro_name_input" placeholder="Don't Exced 20 Characters"><br>
            <div class="warning">Do not exceed 20 characters when entering the product name.</div>

            <div class="cat_box">
                <h3 class="category">Category</h3>
                <div class="require">!</div>
                <br>
                <select name="" id="" class="category_selection">
                    <option value="">Sneakers</option>
                    <option value="">Sport</option>
                    <option value="">Men</option>
                    <option value="">Women</option>
                </select>
            </div>

            <div class="gender_box">
                <h3 class="gender">Gender</h3>
                <br>
                <select name="" id="" class="gender_selection">
                    <option value="">Male</option>
                    <option value="">Female</option>
                </select>
            </div>
            <br>
            <h3 class="brand">Brand</h3><br>
            <select name="" id="" class="brand_selection">
                <option value="">Nike</option>
                <option value="">Adiddas</option>
                <option value="">Filla</option>
                <option value="">Puma</option>
            </select>
            <br>
            <h3 class="desc">Description</h3>
            <div class="require">!</div>
            <br>
            <textarea name="" id="" cols="50" rows="10" placeholder="Please write a short Description for The Product" class="desc_textarea"></textarea>
            <div class="warning_2">Do not exceed 100 characters when entering the product name.</div>
        </div>

        <div class="product_imag">
            <h3 class="product_img">Product Image</h3>
            <div class="require">!</div>
            <br>
            <div class="pro_img_r">
                <img src="sport_17.jpg" alt="" width="100%" height="200px">
            </div>
            <div class="pro_img"></div>
            <div class="pro_img_d">
                <div class="pro_img_drop"></div>
                <div class="pro_img_drop"></div>
            </div>
            <div class="pro_detales">
                You need to add at least 4 images. pay attention to the quality of the pictures you add,comply with the background color standars. Pictures must be in certian dimensions. Notice that the product shows all the details
            </div>
            <div class="pro_size_box">
                <h3 class="pro_size">Add Size</h3>
                <div class="require">!</div>
                <br>
                <select name="" id="" class="size_selection">
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                    <option value="">XLL</option>
                    <option value="">XLLL</option>
                </select>
                <div class="size_options">
                    <div class="size_option">S</div>
                    <div class="size_option">M</div>
                    <div class="size_option">L</div>
                    <div class="size_option">XL</div>
                    <div class="size_option">XLL</div>
                    <div class="size_option">XLLL</div>
                </div>
            </div>
            <br>
            <div class="pro_date_box">
                <h3 class="pro_date">Product Date</h3><br>
                <input type="date" class="pro_date_input">
            </div>
            <input type="submit" value="Add Product" class="add_button">
        </div>
    </div>
</body>

</html>