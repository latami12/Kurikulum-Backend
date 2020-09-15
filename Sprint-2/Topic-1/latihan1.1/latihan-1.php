<?php

class Perpustakaan {
    protected $buku = ['isbn', 'judul'];
    protected $pengunjung = ['id', 'nama'];

    public function set_pengunjung($pengunjung) {
        $this->pengunjung = $pengunjung;
    }

    public function set_buku($buku) {
        $this->buku = $buku;
    }
}

class Pengunjung extends Perpustakaan {
    public function pinjam() {
        $result = $this->pengunjung['nama'] . " meminjam buku " . $this->buku['judul'];
        return $result;
    }

    public function kembali() {
        $result = $this->pengunjung['nama'] . " mengembalikan buku " . $this->buku['judul'];
        return $result;
    }
}

$perpus = new Pengunjung();
$perpus->set_buku(['isbn' => '10001', 'judul' => 'Mushaf']);
$perpus->set_pengunjung(['id' => 'P001', 'nama' => 'Latami']);

echo $perpus->pinjam();
echo "\n";
echo $perpus->kembali();
echo "\n";