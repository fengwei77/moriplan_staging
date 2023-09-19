<?php

namespace App\Admin\Controllers;

use App\Models\Inner_banner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class InnerBannerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Inner_banner';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Inner_banner());
        $grid->sortable();
        $grid->column('id', __('Id'));
//        $grid->column('position', __('Position'));
        $grid->column('url', __('Url'));
        $grid->column('title', __('Title'))->editable();
//        $grid->column('alt_txt', __('Alt txt'));
//        $grid->column('title_txt', __('Title txt'));
        $grid->column('file_name', __('File name'))->image();

//        $grid->column('file_name_p', __('File name p'));
//        $grid->column('file_name_m', __('File name m'));
//        $grid->column('start_date', __('Start date'));
//        $grid->column('end_date', __('End date'));
        $grid->column('enable', __('Enable'))->using(['0' => '停用', '1' => '啟用中'])
            ->label([
                0 => 'default',
                1 => 'success',
            ]);
//        $grid->column('deleted_at', __('Deleted at'));
//        $grid->column('created_at', __('Created at'));
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
        $show = new Show(Inner_banner::findOrFail($id));

        $show->field('id', __('Id'));
//        $show->field('position', __('Position'));
        $show->field('url', __('Url'));
        $show->field('title', __('Title'));
        $show->field('alt_txt', __('Alt txt'));
        $show->field('title_txt', __('Title txt'));
        $show->field('file_name', __('File name'));
        $show->field('file_name_p', __('File name p'));
        $show->field('file_name_m', __('File name m'));
//        $show->field('start_date', __('Start date'));
//        $show->field('end_date', __('End date'));
//        $show->field('deleted_at', __('Deleted at'));
//        $show->field('created_at', __('Created at'));
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
        $form = new Form(new Inner_banner());
//        $form->select('position', '區域')->options("/api/banner_position");
        $form->text('title', __('Title'))->default('');
        $form->hidden('alt_txt', __('Alt txt'))->default('');
        $form->hidden('title_txt', __('Title txt'))->default('');
        $form->image('file_name', __('File name'))->help('圖片建議尺寸為: 1364 x 926');
        $form->image('file_name_p', __('File name p'))->help('圖片建議尺寸為: 769 x 523');
        $form->image('file_name_m', __('File name m'))->help('圖片建議尺寸為: 750 x 831');
        $form->text('url', __('Url'))->default('');
        $form->switch('enable', __('Enable'))->default(1);
        $form->hidden('start_date', __('Start date'))->default(date('Y-m-d H:i:s'));
        $form->hidden('end_date', __('End date'))->default(date('Y-m-d H:i:s'));
        $form->saving(function ($form) {
            if (empty($form->url)) {
                $form->url = Str::slug($form->url, '');
            }
        });
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
