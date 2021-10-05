<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            [
                'product_name' => 'Giày Hermès Bob Loafer H202970ZH01405 Màu Đen Size 41.5',
                'image' => 'https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2021/09/giay-hermes-bob-loafer-h202970zh01405-mau-den-size-41-5-6152d6f2c58b6-28092021154850.jpg',
                'desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.',
                'category_id' => '1',
                'brand_id' => '1',
                'quantity' => '1',
                'price'=>'25600000',
                'promotional_price'=>'21400000'
            ]
        );
        DB::table('products')->insert(
            [
                'product_name' => 'Giày Cao Gót Michael Kors Flex Kitten Pump Black Da Bóng Màu Đen Size 36',
                'image' => 'https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2020/12/giay-cao-got-michael-kors-flex-kitten-pump-black-da-bong-mau-den-5fd0a771104b8-09122020173113.jpg',
                'desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.',
                'category_id' => '2',
                'brand_id' => '1',
                'quantity' => '1',
                'price'=>'3200000',
                'promotional_price'=>'2750000'
            ]
        );
        DB::table('products')->insert(
            [
                'product_name' => "Quần Kaki Lacoste Men's Slim Fit Gabardine Chino Pants HH955302S Size 30",
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Dolce_%26_Gabbana.svg/1200px-Dolce_%26_Gabbana.svg.png',
                'desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.',
                'category_id' => '3',
                'brand_id' => '1',
                'quantity' => '1',
                'price'=>'2600000',
                'promotional_price'=>'2200000'
            ]
        );
        DB::table('products')->insert(
            [
                'product_name' => 'Quần Kaki Nữ Lưng Thun Công Sở',
                'image' => 'https://storage.googleapis.com/cdn.nhanh.vn/store/3138/ps/20210807/QJN3088_BEE__9_.jpg',
                'desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.',
                'category_id' => '4',
                'brand_id' => '1',
                'quantity' => '1',
                'price'=>'399000',
                'promotional_price'=>'159600'
            ]
        );
        DB::table('products')->insert(
            [
                'product_name' => "Giày Balenciaga X-Pander 'Grey' 653871-W2RA3-1212",
                'image' => 'https://cdn.elly.vn/uploads/2021/01/18145259/giay-nam-da-that-ellyhomme-egtm22-6.jpg',
                'desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.',
                'category_id' => '1',
                'brand_id' => '2',
                'quantity' => '2',
                'price'=>'1499000',
                'promotional_price'=>'0'
            ]
        );
        DB::table('products')->insert(
            [
                'product_name' => 'GIÀY NỮ THỜI TRANG CAO CẤP ELLY – EG51',
                'image' => 'https://cdn.elly.vn/uploads/2018/12/14001339/Giay-nu-cao-cap-ELLY-EG51-7-600x600.jpg',
                'desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.',
                'category_id' => '2',
                'brand_id' => '2',
                'quantity' => '2',
                'price'=>'1499000',
                'promotional_price'=>'0'
            ]
        );

    }
}
