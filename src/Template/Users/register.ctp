<div class=" card-box">
    <div class="panel-heading">
        <h3 class="text-center">Rejestracja</h3>
    </div>

    <div class="panel-body">
        <?= $this->Form->create($user,
            ['class' => 'form-horizontal m-t-20', 'templates' => ['error' => '<div class="col-xs-12"><span class="help-block">{{content}}</span></div>', 'formGroup' => '<div class="col-xs-12">{{input}} {{content}}</div>']]); ?>
        <?= $this->Form->input('email', ['placeholder' => 'Adres e-mail', 'required' => true]); ?>
        <?= $this->Form->input('phone', ['placeholder' => 'Numer telefonu', 'required' => false]); ?>
        <?= $this->Form->input('password', ['placeholder' => 'Hasło',  'value' => false, 'required' => true]); ?>
        <?= $this->Form->input('repassword', ['type' => 'password', 'placeholder' => 'Powtórz hasło',  'value' => false, 'required' => true]); ?>


        <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit">
                        Załóż konto
                    </button>
                </div>
            </div>

        <?= $this->Form->end(); ?>

    </div>
</div>

<div class="row">
    <div class="col-sm-12 text-center">
        <p>
           Posiadasz już konto? Przejdź do<a href="./users/login" class="text-primary m-l-5"><b>logowania</b></a>.
        </p>
    </div>
</div>
