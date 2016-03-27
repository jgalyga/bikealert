<div class="card-box">
    <div class="panel-heading">
        <h3 class="text-center"> Logowanie </h3>
    </div>


    <div class="panel-body">
        <?= $this->Form->create(null,
            ['class' => 'form-horizontal m-t-20', 'templates' => ['error' => '<div class="col-xs-12"><span class="help-block">{{content}}</span></div>', 'formGroup' => '<div class="col-xs-12">{{input}} {{content}}</div>']]); ?>
        <?= $this->Form->input('email', ['placeholder' => 'Adres e-mail',  'value' => false, 'required' => true]); ?>
        <?= $this->Form->input('password', ['placeholder' => 'Hasło',  'value' => false, 'required' => true]); ?>


        <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button  class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>

            <div class="form-group m-t-30 m-b-0">
                <div class="col-sm-12">
                    <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
            </div>
        <?=  $this->Form->end(); ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 text-center">
        <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>

    </div>
</div>