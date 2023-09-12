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
namespace app\admin\controller;

use cmf\controller\AdminBaseController;
use app\admin\model\LinkModel;

class DevController extends AdminBaseController
{

    /**
     * 开发面板
     * @adminMenu(
     *     'name'   => '开发面板',
     *     'parent' => 'admin/Setting/default',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 50,
     *     'icon'   => '',
     *     'remark' => '开发面板',
     *     'param'  => ''
     * )
     * @return mixed
     */
    public function index()
    {
        return $this->fetch();
    }

}
