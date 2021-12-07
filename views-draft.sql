CREATE VIEW cart_boxs AS SELECT
    carts.*,
    products.pro_name,
    products.pro_des,
    products.price,
    products.mainImage,
    products.category_id,
    categories.cat_name,
    categories.cat_img,
    products.pro_rate,
    products.pro_gender,
    products.favHeader,
    products.trending,
    sizes.pro_size,
    colors.pro_color
FROM
    carts
JOIN products ON(products.id = carts.product_id)
JOIN categories ON(
        categories.id = products.category_id
    )
JOIN sizes ON(sizes.id = carts.size_id)
JOIN colors ON(colors.id = carts.color_id)