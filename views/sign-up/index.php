<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<main class="container container--registration">
  <div class="center-block">
    <div class="registration-form regular-form">
      <?php $form = ActiveForm::begin([
        'method' => 'post'
      ]); ?>

      <h3 class="head-main head-task">Регистрация нового пользователя</h3>

      <div class="form-group">
        <?= $form->field($model, 'name')->textInput([]) ?>
      </div>

      <div class="half-wrapper">
        <div class="form-group">
          <?= $form->field($model, 'email')->input('email') ?>
        </div>

        <div class="form-group">
          <?= $form->field($model, 'location_id')
            ->dropDownList($citiesList) ?>
        </div>
      </div>

      <div class="half-wrapper">
        <div class="form-group">
          <?= $form->field($model, 'password')->passwordInput() ?>
        </div>
      </div>

      <div class="half-wrapper">
        <div class="form-group">
          <div class="form-group">
            <?= $form->field($model, 'password_retype')->passwordInput() ?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <?= $form->field($model, 'willRespond')
          ->checkbox(['label' => 'я собираюсь откликаться на заказы']) ?>
      </div>
      <?=  Html::submitButton('Создать аккаунт', [
        'class' => 'button button--blue'
      ]) ?>

<?php ActiveForm::end() ?>

    </div>
  </div>
</main>