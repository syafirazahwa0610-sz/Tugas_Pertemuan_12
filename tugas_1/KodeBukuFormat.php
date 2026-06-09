<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class KodeBukuFormat implements Rule
{
    /**
     * Memeriksa format kode buku.
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^BK-[A-Z]{2,5}-\d{3}$/', $value);
    }

    /**
     * Pesan error.
     */
    public function message()
    {
        return 'Format kode buku harus BK-XXX-000 (contoh: BK-PROG-001 atau BK-DB-002).';
    }
}