<?php
// +----------------------------------------------------------------------
// | RuYiCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-present http://www.ruyicmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: kavience < kavience@gmail.com>
// +----------------------------------------------------------------------
namespace app\admin\validate;

use think\Validate;

class StorageQiniuValidate extends Validate
{
    protected $rule = [
        'accessKey' => 'require',
        'secretKey' => 'require',
        'domain'    => 'require',
    ];

    protected $message = [
        'accessKey.require' => 'AccessKey不能为空',
        'secretKey.require' => 'secretKey不能为空',
        'domain.require' => '空间域名不能为空',
    ];

}
