<?php
// LAB 1 — Gaya prosedural vs OOP
// Spesifikasi: class Buku dengan constructor(string $judul, string $penulis, int $tahun)
//              dan method info(): string yang memuat judul & tahun.

// 1) Versi prosedural
$buku = [
    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
    ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'tahun' => 2016],
    ['judul' => 'Laut Bercerita', 'penulis' => 'Leila S. Chudori', 'tahun' =>2017],
 ];   
foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}

// 2) Versi OOP
class Buku
{
    public $judul;
    public $penulis;
    public $tahun;
    
    public function __construct($judul, $penulis, $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }
    public function info()
    {
        return "{$this->judul} - {$this->penulis} ({$this->tahun})\n";
    }
}
$buku1 = new Buku('Laskar Pelangi', 'Andrea Hirata', 2005);
$buku2 = new Buku('Hujan', 'Tere Liye', 2016);
$buku3 = new Buku('Laut Bercerita', 'Leila S. Chudori', 2017);
   
echo $buku1->info();
echo $buku2->info();
echo $buku3->info();

// TODO: buat 3 object Buku lalu tampilkan info()-nya
