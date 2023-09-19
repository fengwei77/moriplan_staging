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
        $grid->column('address', __('address'));
        $grid->column('tel', __('Tel'));
        $grid->column('fax', __('fax'));
        $grid->column('email', __('Email'));
        $grid->column('open_date', __('open_date'));
        $grid->column('open_time', __('open_time'));
        $grid->column('file_name', __('file_name'));
        $grid->column('fb_link', __('fb_link'));
        $grid->column('ig_link', __('ig_link'));
        $grid->column('line_link', __('line_link'));
        $grid->column('enable', __('Enable'));
        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));
        $grid->column('deleted_at', __('Deleted at'));
        $grid->column('created_at', __('Created at'));
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
        $show->field('address', __('address'));
        $show->field('tel', __('Tel'));
        $show->field('fax', __('fax'));
        $show->field('email', __('Email'));
        $show->field('open_date', __('open_date'));
        $show->field('open_time', __('open_time'));
        $show->field('file_name', __('file_name'));
        $show->field('fb_link', __('fb_link'));
        $show->field('ig_link', __('ig_link'));
        $show->field('line_link', __('line_link'));
        $show->field('enable', __('Enable'));
        $show->field('start_date', __('Start date'));
        $show->field('end_date', __('End date'));
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

        $form->text('address', __('address'));
        $form->text('tel', __('Tel'));
        $form->mobile('fax', __('fax'));
        $form->email('email', __('Email'));
        $form->text('open_date', __('open_date'));
        $form->text('open_time', __('open_time'));
        $form->text('fb_link', __('fb_link'));
        $form->text('open_time', __('open_time'));
        $form->text('line_link', __('open_time'));
        $form->switch('enable', __('Enable'))->default(1);

        return $form;
    }
}
