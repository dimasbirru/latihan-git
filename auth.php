<?php

function login($username, $password) {
    if ($username === 'amin' && $password === '3232') {
        return "Login berhasil! Selamat datang, " . $username;
    }
    return "Login gagal! Username atau password salah.";
}

// Uji coba fungsi
echo login('amin', '3232'); // Output: Login berhasil! Selamat datang, amin 