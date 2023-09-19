<?php

namespace App\Admin\Controllers;

use App\Models\Space_news;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SpaceNewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Space_news';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Space_news());
        $grid->sortable();
        $grid->column('id', __('Id'));
        $grid->column('article_date', __('Article date'))->display(function ($updated_at) {
            return date('Y-m-d', strtotime($updated_at));
        });
        $grid->column('title', __('Title'))->width(200);
//        $grid->column('content', __('content'));
        $grid->column('file_name', __('file_name'))->image();
        $grid->column('url', __('Url'))->width(200);
//        $grid->column('alt_txt', __('Alt txt'));
//        $grid->column('title_txt', __('Title txt'));
//        $grid->column('start_date', __('Start date'));
//        $grid->column('end_date', __('End date'));
        $grid->column('open_blank', __('Open blank'))->using(['0' => '否', '1' => '是'])
            ->label([
                0 => 'default',
                1 => 'success',
            ]);
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
        $grid->disableExport();

        // $grid->disableTools();
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
        $show = new Show(Space_news::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('article_date', __('Article date'));
        $show->field('title', __('Title'));
        $show->field('content', __('content'));
        $show->field('file_name', __('file_name'));
        $show->field('url', __('Url'));
        $show->field('open_blank', __('Open blank'));
        $show->field('alt_txt', __('Alt txt'));
        $show->field('title_txt', __('Title txt'));
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
        $form = new Form(new Space_news());

        $form->date('article_date', __('Article date'))->default(date('Y-m-d'));
        $form->textarea('title', __('Title'));
        $form->textarea('content', __('content'));
        $form->text('alt_txt', __('Alt txt'));
        $form->image('file_name', __('File name'))->help('圖片建議尺寸為: 458 x 339');
        $form->url('url', __('Url'))->icon('fa-pencil');
        $form->switch('open_blank', __('Open blank'))->default(0);
        $form->hidden('title_txt', __('Title txt'));
        $form->hidden('start_date', __('Start date'))->default(date('Y-m-d H:i:s'));
        $form->hidden('end_date', __('End date'))->default(date('Y-m-d H:i:s'));
//        $form->switch('order_number', __('Order number'));
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
