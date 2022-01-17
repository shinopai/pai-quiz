<?php

namespace App\Admin\Controllers;

use App\Answer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AnswerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Answer';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Answer());

        $grid->column('id', __('Id'));
        $grid->column('answer1', __('Answer1'));
        $grid->column('answer2', __('Answer2'));
        $grid->column('answer3', __('Answer3'));
        $grid->column('answer4', __('Answer4'));
        $grid->column('correct_answer_no', __('Correct answer no'));
        $grid->column('commentary', __('Commentary'));
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
        $show = new Show(Answer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('answer1', __('Answer1'));
        $show->field('answer2', __('Answer2'));
        $show->field('answer3', __('Answer3'));
        $show->field('answer4', __('Answer4'));
        $show->field('correct_answer_no', __('Correct answer no'));
        $show->field('commentary', __('Commentary'));
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
        $form = new Form(new Answer());

        $form->text('answer1', __('Answer1'));
        $form->text('answer2', __('Answer2'));
        $form->text('answer3', __('Answer3'));
        $form->text('answer4', __('Answer4'));
        $form->number('correct_answer_no', __('Correct answer no'));
        $form->textarea('commentary', __('Commentary'));

        return $form;
    }
}
