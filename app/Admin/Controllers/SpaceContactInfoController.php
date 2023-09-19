<?php

namespace App\Admin\Controllers;

use App\Models\Space_contact_info;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SpaceContactInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Space_contact_info';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Space_contact_info());

        $grid->column('id', __('Id'));
        $grid->column('address', __('Address'));
        $grid->column('tel', __('Tel'));
        $grid->column('fax', __('Fax'));
        $grid->column('email', __('Email'));
        $grid->column('open_date', __('Open date'));
        $grid->column('open_time', __('Open time'));
        $grid->column('file_name', __('File name'));
        $grid->column('fb_link', __('Fb link'));
        $grid->column('ig_link', __('Ig link'));
        $grid->column('line_link', __('Line link'));
        $grid->column('updated_at', __('Updated at'));
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();

        });
        $grid->disableCreateButton();
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
        $show = new Show(Space_contact_info::findOrFail($id));

        $show->field('address', __('Address'));
        $show->field('tel', __('Tel'));
        $show->field('fax', __('Fax'));
        $show->field('email', __('Email'));
        $show->field('open_date', __('Open date'));
        $show->field('open_time', __('Open time'));
        $show->field('file_name', __('File name'));
        $show->field('fb_link', __('Fb link'));
        $show->field('ig_link', __('Ig link'));
        $show->field('line_link', __('Line link'));
        $show->field('updated_at', __('Updated at'));
        $show->panel()
            ->tools(function ($tools) {
                $tools->disableEdit();
                $tools->disableList();
                $tools->disableDelete();
            });;
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Space_contact_info());

        $form->text('address', __('Address'));
        $form->text('tel', __('Tel'));
        $form->text('fax', __('Fax'));
        $form->email('email', __('Email'));
        $form->text('open_date', __('Open date'));
        $form->text('open_time', __('Open time'));
        $form->image('file_name', __('File name'))->help('圖片建議尺寸為: 403 x 287');
        $form->text('fb_link', __('Fb link'))->default('');
        $form->text('ig_link', __('Ig link'))->default('');
        $form->text('line_link', __('Line link'))->default('');
        $form->hidden('start_date', __('Start date'))->default(date('Y-m-d H:i:s'));
        $form->hidden('end_date', __('End date'))->default(date('Y-m-d H:i:s'));
        $form->hidden('order_number', __('Order number'))->default(1);
        $form->hidden('enable', __('Enable'))->default(1);
        $form->tools(function (Form\Tools $tools) {
            // Disable `Veiw` btn.
            $tools->disableView();
            $tools->disableList();
            $tools->disableDelete();
        });
        $form->footer(function ($footer) {

            // disable reset btn
            $footer->disableReset();

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
