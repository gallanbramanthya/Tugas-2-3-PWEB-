<?php


class Admin {
    public static function login_form() {
        // Memuat form login admin
        include('../view/admin-panel/admin-login.php');
    }

    public static function login_save() {
        // Memuat penyimpanan login admin
        include('/../view/shop/home.php');
    }

    public static function dashboard() {
        // Memuat dashboard admin
        include('../view/admin-panel/admin-dashboard.php');
    }
}

class Customer {
    public static function login_form() {
        // Memuat form login customer
        include('../view/forms/customer-login.php');
    }

    public static function login_save() {
        // Memuat penyimpanan login customer
        include('/../view/shop/home.php');
    }

    public static function register_form() {
        // Memuat form registrasi customer
        include('../view/forms/customer-register.php');
    }

    public static function register_save() {
        include('/../view/forms/customer-login.php');
    }

    public static function profile() {
        // Memuat tampilan profil customer
        include('../view/forms/customer-profile.php');
    }

    public static function profile_edited() {
        include('/../view/forms/customer-profile.php');
    }
}

class Home {
    public static function index() {
        // Memuat tampilan halaman utama
        include('../view/shop/home.php');
    }
}

class Item {
    public static function index() {
        // Memuat tampilan daftar item
        include('../view/shop/item.php');
    }

    public static function show($id) {
        // Memuat tampilan detail item
        include('../view/shop/item.php');
    }
}

class Cart {
    public static function index() {
        // Memuat tampilan keranjang belanja
        include('../view/shop/cart.php');
    }
}

class Order {
    public static function index() {
        // Memuat tampilan daftar pesanan
        include('../view/shop/order.php');
    }

    public static function show($id) {
        // Memuat tampilan detail pesanan
        include('../view/shop/order.php');
    }
}

class Contact {
    public static function index() {
        // Memuat tampilan halaman kontak
        include('../view/shop/contact.php');
    }
}

class User {
    public static function logout() {
        // Memuat proses logout
        include('../view/forms/customer-login.php');
    }
}
?>