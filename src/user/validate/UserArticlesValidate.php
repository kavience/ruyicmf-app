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
namespace app\user\validate;

use think\Validate;

class UserArticlesValidate extends Validate
{
    protected $rule = [
        'post_title' => 'require',
    ];
    protected $message = [
        'post_title.require' => '文章标题不能为空',
    ];

    protected $scene = [
        'add'  => ['post_title'],
        'edit' => ['post_title'],
    ];
}
