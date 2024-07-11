<?php
header('Content-Type: application/json');

$data = [
    "productitems" => [
        [
            "product_id" => "p00001",
            "product_name" => "iPhone 13 Pro Max 128GB",
            "product_category" => "phone",
            "product_price" => "1599",
            "product_discount_price" => "1329",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529230/Assets/iphone/1_j2tdur.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00002",
            "product_name" => "iPhone 13 Pro Max 256GB",
            "product_category" => "phone",
            "product_price" => "1699",
            "product_discount_price" => "1449",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529231/Assets/iphone/2_rx6rxb.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00003",
            "product_name" => "iPhone 13 Pro 128GB",
            "product_category" => "phone",
            "product_price" => "1499",
            "product_discount_price" => "1229",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529231/Assets/iphone/3_ktqo7n.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00004",
            "product_name" => "iPhone 13 Pro 256GB",
            "product_category" => "phone",
            "product_price" => "1559",
            "product_discount_price" => "1359",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529230/Assets/iphone/4_zxvxqc.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00005",
            "product_name" => "iPhone 13 128GB",
            "product_category" => "phone",
            "product_price" => "1199",
            "product_discount_price" => "949",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529230/Assets/iphone/5_mnnelh.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00006",
            "product_name" => "iPhone 13 256GB",
            "product_category" => "phone",
            "product_price" => "1299",
            "product_discount_price" => "1079",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529230/Assets/iphone/6_wbvrq2.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00007",
            "product_name" => "iPhone 13 MiNi 128GB",
            "product_category" => "phone",
            "product_price" => "1099",
            "product_discount_price" => "849",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529230/Assets/iphone/7_ckzoez.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00008",
            "product_name" => "iPhone 13 MiNi 256GB",
            "product_category" => "phone",
            "product_price" => "1149",
            "product_discount_price" => "969",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529230/Assets/iphone/8_teq67b.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00009",
            "product_name" => "Samsung Galaxy Tab S7",
            "product_category" => "tablet",
            "product_price" => "700",
            "product_discount_price" => "600",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529257/Assets/tablet/9_hb0ho8.webp",
            "product_brand" => "samsung",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00010",
            "product_name" => "Samsung Galaxy Tab A7 Lite",
            "product_category" => "tablet",
            "product_price" => "138.24",
            "product_discount_price" => "130",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529256/Assets/tablet/10_rblivg.webp",
            "product_brand" => "samsung",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00011",
            "product_name" => "Samsung Galaxy Tab S8 Ultra",
            "product_category" => "tablet",
            "product_price" => "1300",
            "product_discount_price" => "1200",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529256/Assets/tablet/11_ytixay.webp",
            "product_brand" => "samsung",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00012",
            "product_name" => "iPad Air 4 64GB",
            "product_category" => "tablet",
            "product_price" => "799",
            "product_discount_price" => "650",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529256/Assets/tablet/12_e6jl98.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00013",
            "product_name" => "iPad Pro 11 128GB",
            "product_category" => "tablet",
            "product_price" => "1050",
            "product_discount_price" => "1000",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529256/Assets/tablet/13_itigvg.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00014",
            "product_name" => "iPad Mini 6 64GB",
            "product_category" => "tablet",
            "product_price" => "620",
            "product_discount_price" => "600",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529256/Assets/tablet/14_bcxhz2.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00015",
            "product_name" => "Huawei MatePad T 10s",
            "product_category" => "tablet",
            "product_price" => "300",
            "product_discount_price" => "250",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529256/Assets/tablet/15_nztbia.webp",
            "product_brand" => "huawei",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00016",
            "product_name" => "Huawei MatePad Pro",
            "product_category" => "tablet",
            "product_price" => "680",
            "product_discount_price" => "650",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529257/Assets/tablet/16_xipz86.webp",
            "product_brand" => "huawei",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00017",
            "product_name" => "MacBook Pro M1 Pro",
            "product_category" => "laptop",
            "product_price" => "2150",
            "product_discount_price" => "2090",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529265/Assets/laptop/1_t4r3hq.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00018",
            "product_name" => "MacBook Air M12020",
            "product_category" => "laptop",
            "product_price" => "900",
            "product_discount_price" => "880",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529265/Assets/laptop/2_lwdwza.webp",
            "product_brand" => "apple",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00019",
            "product_name" => "ASUS TUF F15 FX506LH-HN002T",
            "product_category" => "laptop",
            "product_price" => "850",
            "product_discount_price" => "800",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529265/Assets/laptop/3_lswp6h.webp",
            "product_brand" => "asus",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00020",
            "product_name" => "ASUS ZenBook Flip S OLED UX371EA",
            "product_category" => "laptop",
            "product_price" => "1050",
            "product_discount_price" => "1020",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529266/Assets/laptop/4_ges52t.webp",
            "product_brand" => "asus",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00021",
            "product_name" => "Lenovo ThinkPad T14",
            "product_category" => "laptop",
            "product_price" => "1350",
            "product_discount_price" => "1300",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529265/Assets/laptop/5_mqwi1m.webp",
            "product_brand" => "lenovo",
            "product_verified" => "true"
        ],
        [
            "product_id" => "p00022",
            "product_name" => "Lenovo Yoga Slim 7 Carbon",
            "product_category" => "laptop",
            "product_price" => "1020",
            "product_discount_price" => "950",
            "image" => "https://res.cloudinary.com/techsec/image/upload/v1645529266/Assets/laptop/6_r8djls.webp",
            "product_brand" => "lenovo",
            "product_verified" => "true"
        ]
    ]
];

echo json_encode($data);
?>
