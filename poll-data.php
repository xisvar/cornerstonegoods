<?php
/**
 * Shared poll data.
 * Stores the products and ranking questions used by both the GET
 * and POST polls, kept at the project root alongside variables.php
 * since both files hold reusable content data rather than layout.
 */

// The 3 products being ranked, reused for both the GET and POST
// polls as the assignment instructions allow.
$pollProducts = array(
    array(
        'id'          => 'product1',
        'name'        => 'The Grace Journal',
        'image'       => 'images/product-journal.svg',
        'description' => 'A guided prayer and reflection journal with a scripture verse and prompt for every day of the year.',
    ),
    array(
        'id'          => 'product2',
        'name'        => 'Cornerstone Tee',
        'image'       => 'images/product-tee.svg',
        'description' => 'A soft, everyday graphic t-shirt featuring a simple faith-inspired design, available in five colors.',
    ),
    array(
        'id'          => 'product3',
        'name'        => 'Living Water Mug',
        'image'       => 'images/product-mug.svg',
        'description' => 'A ceramic 12 oz. mug printed with a favorite scripture verse, dishwasher and microwave safe.',
    ),
);

// The 5 features ranked for every product, on a Strongly Agree
// to Strongly Disagree scale, per the assignment's example
// wording ("Would you buy this product at this price?").
$pollQuestions = array(
    'q1' => 'I would buy this product at this price.',
    'q2' => 'I like the design and colors offered for this product.',
    'q3' => 'This product appears to be well made.',
    'q4' => 'I would recommend this product to a friend.',
    'q5' => 'This product would fit well into my daily routine.',
);

// The 5-point scale used for every radio button group.
$pollScale = array(
    '5' => 'Strongly Agree',
    '4' => 'Agree',
    '3' => 'Neutral',
    '2' => 'Disagree',
    '1' => 'Strongly Disagree',
);
?>
