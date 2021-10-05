<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(
            [
                'category_name' => 'Giày lười Nam',
                'category_image' => 'https://media3.scdn.vn/img4/2020/12_07/7ZUBsrBIdCwa75AxRfbd_simg_b5529c_320x320_maxb.jpg',
                'category_desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.'
            ]
        );
        DB::table('categories')->insert(
            [
                'category_name' => 'Giày cao gót',
                'category_image' => 'https://cdn.elly.vn/uploads/2018/12/14001339/Giay-nu-cao-cap-ELLY-EG51-7-600x600.jpg',
                'category_desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.'
            ]
        );
        DB::table('categories')->insert(
            [
                'category_name' => 'Quần Kaki Nam',
                'category_image' => 'https://cf.shopee.vn/file/ebb11bf3fbe5c70036ba569ed60ec937',
                'category_desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.'
            ]
        );
        DB::table('categories')->insert(
            [
                'category_name' => 'Quần Kaki Nữ',
                'category_image' => 'https://thoitrangteenthienphuc.vn/upload/hinhthem/aokhoackakinamnuinhuoucaoco2-9229.jpg',
                'category_desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.'
            ]
        );
    }
}
