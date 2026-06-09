## Tugas 1 - Validation Rules Advanced Laravel

Tugas ini bertujuan untuk mengimplementasikan validasi lanjutan (Advanced Validation Rules) pada aplikasi perpustakaan menggunakan framework Laravel.

## Fitur yang Diimplementasikan

### 1. Custom Validation Rule Kode Buku

Validasi format kode buku dengan pola:

```text
BK-[KATEGORI]-[NOMOR]
```

Contoh:

```text
BK-PROG-001
BK-DB-002
BK-WEB-003
```

File yang digunakan:

```text
KodeBukuFormat.php
```

---

### 2. Conditional Validation Bahasa

Ketentuan:

* Jika kategori buku = **Programming**
* Maka bahasa buku harus **Inggris**

Contoh:

| Kategori    | Bahasa    | Status      |
| ----------- | --------- | ----------- |
| Programming | Inggris   | Valid       |
| Programming | Indonesia | Tidak Valid |
| Database    | Indonesia | Valid       |

---

### 3. Conditional Validation Stok

Ketentuan:

* Jika tahun terbit < 2000
* Maka stok maksimal 5

Contoh:

| Tahun Terbit | Stok | Status      |
| ------------ | ---- | ----------- |
| 1998         | 5    | Valid       |
| 1998         | 10   | Tidak Valid |
| 2020         | 10   | Valid       |

---

### 4. Custom Error Message Bahasa Indonesia

Semua pesan kesalahan (error message) ditampilkan dalam Bahasa Indonesia agar lebih mudah dipahami pengguna.

Contoh:

```text
Kode buku wajib diisi.
Format kode buku harus BK-XXX-000.
Buku kategori Programming harus menggunakan bahasa Inggris.
Untuk buku yang terbit sebelum tahun 2000, stok maksimal 5.
```

---

## File yang Digunakan

1. KodeBukuFormat.php
2. StoreBukuRequest.php
3. BukuController.php

---

## Screenshoot
<img width="113" height="131" alt="Screenshot 2026-06-09 113426" src="https://github.com/user-attachments/assets/463a19f6-56e0-4615-a125-39008d8b3b41" />

<img width="115" height="125" alt="Screenshot 2026-06-09 113509" src="https://github.com/user-attachments/assets/a581a764-7cfe-48d8-bc7a-6d2373776595" />


* Custom Validation Rule
* Conditional Validation
* Custom Error Message Bahasa Indonesia
* Form Request Laravel

