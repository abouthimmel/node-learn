<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>

<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>

<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>

<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>

<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>

<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>

<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addProduct') {
    $product = [
        'id' => uniqid(),
        'name' => htmlspecialchars($_POST['name']),
        'price' => (float)$_POST['price'],
        'stock' => (int)$_POST['stock']
    ];
    $_SESSION['products'][] = $product;
    echo json_encode(["message" => "Produk berhasil ditambahkan", "product" => $product]);
    exit;
}

// Menghapus produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteProduct') {
    $id = $_POST['id'];
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] !== $id;
    });
    echo json_encode(["message" => "Produk berhasil dihapus"]);
    exit;
}

// Mengambil semua produk
if (isset($_GET['action']) && $_GET['action'] === 'getProducts') {
    echo json_encode($_SESSION['products']);
    exit;
}

// Menambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'addToCart') {
    $id = $_POST['id'];
    $product = array_filter($_SESSION['products'], function ($product) use ($id) {
        return $product['id'] === $id;
    });
    $product = array_values($product);

    if (count($product) > 0 && $product[0]['stock'] > 0) {
        $cartItem = &$product[0];
        $cartItem['stock'] -= 1;
        $_SESSION['cart'][] = $cartItem;

        echo json_encode(["message" => "Produk berhasil ditambahkan ke keranjang"]);
    } else {
        echo json_encode(["error" => "Produk habis stok"]);
    }
    exit;
}

// Mendapatkan keranjang belanja
if (isset($_GET['action']) && $_GET['action'] === 'getCart') {
    echo json_encode($_SESSION['cart']);
    exit;
}
?>
