<?php
// فرضًا أن المستخدم مسجل دخوله ويخزن بياناته في الجلسة
session_start();

// بيانات المستخدم المفترضة من قاعدة البيانات
$user = [
    'name' => 'أحمد علي',
    'email' => 'ahmed@example.com',
    'phone' => '1234567890',
];

// بيانات تاريخ العمليات المفترضة
$purchases = [
    ['product_name' => 'منتج 1', 'date' => '2024-12-01', 'price' => '100 ريال'],
    ['product_name' => 'منتج 2', 'date' => '2024-12-10', 'price' => '200 ريال'],
];

include 'profile_template.php'; // تضمين ملف HTML
?>
