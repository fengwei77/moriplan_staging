<?php

namespace App\Admin\Controllers;

use App\Models\Web_menu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class WebMenuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Web_menu';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Web_menu());
        $grid->sortable();
        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
//        $grid->column('alt_txt', __('Alt txt'));
//        $grid->column('url', __('Url'));
        $grid->column('action', __('Action'));
        $grid->column('lang', __('Lang'));
//        $grid->column('enable', __('Enable'))->icon([
//            0 => 'toggle-off',
//            1 => 'toggle-on',
//        ], $default = '')->setAttributes(['style' => 'color:green;']);
        $grid->column('enable', __('Enable'))->using(['0' => '停用', '1' => '啟用中'])
            ->label([
                0 => 'default',
                1 => 'success',
            ]);
        $grid->column('updated_at', __('Updated at'))->display(function ($updated_at) {
            return date('Y-m-d H:m', strtotime($updated_at));
        });
        $grid->actions(function ($actions) {
            $actions->disableView();
        });
        $grid->disableFilter();
        $grid->disableRowSelector();
        $grid->disableColumnSelector();
        //$grid->disableTools();
        $grid->disableExport();
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Web_menu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('alt_txt', __('Alt txt'));
        $show->field('url', __('Url'));
        $show->field('action', __('Action'));
        $show->field('lang', __('Lang'));
        $show->field('enable', __('Enable'));
        $show->field('order_number', __('Order number'));
        $show->field('deleted_at', __('Deleted at'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Web_menu());

        $form->text('title', __('Title'));
        $form->hidden('alt_txt', __('Alt txt'));
        $form->saving(function ($form) {
            if (empty($form->url)) {
                $form->url = Str::slug($form->url, '');
            }
        });
        $form->text('action', __('Action'));
        $form->text('lang', __('Lang'));
        $form->switch('enable', __('Enable'))->default(1);
        $form->tools(function (Form\Tools $tools) {
            // Disable `Veiw` btn.
            $tools->disableView();
        });
        $form->footer(function ($footer) {

            // disable reset btn
//            $footer->disableReset();

            // disable `View` checkbox
            $footer->disableViewCheck();

            // disable `Continue editing` checkbox
            $footer->disableEditingCheck();

            // disable `Continue Creating` checkbox
            $footer->disableCreatingCheck();

        });
          return $form;
    }
}
