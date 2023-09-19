<?php

namespace App\Admin\Controllers;

use App\Models\Space_work;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SpaceWork5Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Space_work';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Space_work());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('url', __('Url'));
        $grid->column('alt_txt', __('Alt txt'));
        $grid->column('title_txt', __('Title txt'));
        $grid->column('before_file_name', __('Before file name'));
        $grid->column('after_file_name', __('After file name'));
        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));
//        $grid->column('order_number', __('Order number'));
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
        $grid->disableTools();
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
        $show = new Show(Space_work::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('position', __('Position'));
        $show->field('title', __('Title'));
        $show->field('url', __('Url'));
        $show->field('alt_txt', __('Alt txt'));
        $show->field('title_txt', __('Title txt'));
        $show->field('before_file_name', __('Before file name'));
        $show->field('after_file_name', __('After file name'));
        $show->field('enable', __('Enable'));
        $show->field('start_date', __('Start date'));
        $show->field('end_date', __('End date'));
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
        $form = new Form(new Space_work());

        $form->hidden('position', __('Position'))->default(2);
        $form->text('title', __('Title'));
        $form->url('url', __('Url'));
        $form->text('alt_txt', __('Alt txt'));
        $form->text('title_txt', __('Title txt'));
        $form->text('before_file_name', __('Before file name'))->help('圖片建議尺寸為: 535 x 353');
        $form->text('after_file_name', __('After file name'))->help('圖片建議尺寸為: 535 x 353');
        $form->datetime('start_date', __('Start date'))->default(date('Y-m-d H:i:s'));
        $form->datetime('end_date', __('End date'))->default(date('Y-m-d H:i:s'));
//        $form->number('order_number', __('Order number'));
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
