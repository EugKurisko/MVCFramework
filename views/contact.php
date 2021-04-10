<?php

/**
 * @var $this View*/

use app\core\form\TextareaField;

/**
 * @var $model \app\models\ContactForm*/
$this->title = 'Contact Us'
?>
<?php $form = \app\core\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo \app\core\form\Form::end(); ?>