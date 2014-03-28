<?php
namespace Home\Controller;

/**
 * FieldsController
 * 字段管理
 */
class FieldsController extends CommonController {
    /**
     * 字段列表
     * @return
     */
    public function index(){
        $this->display();
    }

    /**
     * 字段信息
     * @return
     */
    public function show() {
        $this->display();
    }    

    /**
     * 添加字段
     * @return
     */
    public function add() {
        if (!isset($_GET['model_id'])) {
            return $this->error('您需要添加字段的模型不存在');
        }

        $model = M('Model')->getById($_GET['model_id']);
        if (empty($model)) {
            return $this->error('您需要添加字段的模型不存在');
        }

        $this->assign('model', $model);
        $this->display();
    }

    /**
     * 编辑字段
     * @return
     */
    public function edit() {
        $this->display();
    }

    public function test() {
        $this->display();
        // $this->error('系统错误！');
    }
}
