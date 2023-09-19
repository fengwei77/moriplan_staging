<?php

namespace App\Admin\Controllers;

use App\Models\Contact_us;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactUsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact_us';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact_us());

        $grid->column('id', __('Id'));
        $grid->column('username', __('Username'));
//        $grid->column('tel', __('Tel'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('email', __('Email'));
        $grid->column('title', __('Title'));
        $grid->column('message', __('Message'));
//        $grid->column('enable', __('Enable'));
        $grid->column('updated_at', __('Updated at'))->display(function ($updated_at) {
            return date('Y-m-d H:m', strtotime($updated_at));
        });
        $grid->actions(function ($actions) {
            $actions->disableEdit();
            $actions->disableDelete();

        });
        $grid->disableCreateButton();
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
        $show = new Show(Contact_us::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('username', __('Username'));
//        $show->field('tel', __('Tel'));
        $show->field('mobile', __('Mobile'));
        $show->field('email', __('Email'));
        $show->field('title', __('Title'));
        $show->field('message', __('Message'));
//        $show->field('enable', __('Enable'));
//        $show->field('deleted_at', __('Deleted at'));
        $show->field('created_at', __('Created at'));
//        $show->field('updated_at', __('Updated at'));
        $show->panel()
            ->tools(function ($tools) {
                $tools->disableEdit();
//                $tools->disableList();
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
        $form = new Form(new Contact_us());

        $form->text('username', __('Username'));
        $form->text('tel', __('Tel'));
        $form->hidden('mobile', __('Mobile'));
        $form->email('email', __('Email'));
        $form->text('title', __('Title'));
        $form->textarea('message', __('Message'));
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
