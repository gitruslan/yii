<div class="site-login">
    <form class="form-login" action="/p-cabinet" method="post">

        <div> Login <input type="text" name="login" value="" placeholder="login"></div>
        <div> Password <input type="password" name="pass" value="" placeholder="password"></div>
        <div> Remember Me<input type="checkbox" name="rememberme">
            <input type="submit" class="submit-button" value="submit">
        </div>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
    </form>
</div>

