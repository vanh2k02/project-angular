<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class payment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('payments')->insert([

            'payment_name' => 'Ví ShopeePay',
            'payment_status' => 'Đang trong quá trình chờ xử lý thanh toán.'

        ]);
        DB::table('payments')->insert(
            [
                'payment_name' => 'Thẻ Tín dụng/Ghi nợ',
                'payment_status' => 'Đang trong quá trình chờ xử lý thanh toán.'
            ]
        );
        DB::table('payments')->insert(

            [
                'payment_name' => 'Thanh toán khi nhận hàng',
                'payment_status' => 'Đặt hàng thành công.'
            ]
        );
    }
}
