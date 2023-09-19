<?php

namespace App\Admin\Controllers;

use App\Models\Space_contact_info;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SpaceContactUsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Space_contact_us';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Space_contact_info());

        $grid->column('id', __('Id'));
        $grid->column('username', __('Username'));
        $grid->column('tel', __('Tel'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('email', __('Email'));
        $grid->column('title', __('Title'));
        $grid->column('message', __('Message'));
        $grid->column('enable', __('Enable'));
        $grid->column('updated_at', __('Updated at'));

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

        $show->field('id', __('Id'));
        $show->field('username', __('Username'));
        $show->field('tel', __('Tel'));
        $show->field('mobile', __('Mobile'));
        $show->field('email', __('Email'));
        $show->field('title', __('Title'));
        $show->field('message', __('Message'));
        $show->field('enable', __('Enable'));
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
        $form = new Form(new Space_contact_info());

        $form->text('username', __('Username'));
        $form->text('tel', __('Tel'));
        $form->mobile('mobile', __('Mobile'));
        $form->email('email', __('Email'));
        $form->text('title', __('Title'));
        $form->textarea('message', __('Message'));
        $form->switch('enable', __('Enable'))->default(1);

        return $form;
    }
}
