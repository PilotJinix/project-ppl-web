<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class BatasPembayaran extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batas:bayar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Melakukan pemeriksaan batas pembayaran setiap menit';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $detail_checkout = DB::table('detail_checkout')->get();
        $timeNow = time();
        foreach ($detail_checkout as $item) {
            if ($item->status_checkout == 'Menunggu Pembayaran' && $item->time <=$timeNow ) {
                DB::table('detail_checkout')->where('id',$item->id)->update([
                    'status_checkout' => 'Dibatalkan',
                ]);

                $produk = DB::table('produk')->where('id',$item->produk_id)->first();
                $newStok = $produk->stok + $item->jumlah;
                DB::table('produk')->where('id',$item->produk_id)->update([
                    'stok' => $newStok,
                ]);
            };
        };
    }
}