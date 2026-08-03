<?php
$content = file_get_contents('routes/web.php');

$dup = <<<EOT
    ];

    \$products = Product::all();
    return view('home', ['role' => \$role, 'categories' => \$categories, 'products' => \$products]);
});
            'icon' => 'assets/pc.png',
            'bg' => 'rgba(0, 176, 80, 0.08)'
        ],
EOT;

$fix = <<<EOT
    ];

    \$products = Product::all();
    return view('home', ['role' => \$role, 'categories' => \$categories, 'products' => \$products]);
});
EOT;

$content = str_replace($dup, $fix, $content);
$content = str_replace('getDummyProducts()', 'Product::all()', $content);

file_put_contents('routes/web.php', $content);
echo "Fixed routes.\n";
