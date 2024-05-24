{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
    <div class="row gtr-uniform gtr-50">
        <div class="col-6 col-12-xsmall">
            <div class="col-12">
            <legend>Logowanie do systemu</legend>
            	<fieldset>
            </div>
            <div class="container">
                
                    <div class="col-6 col-12-xsmall">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
                    </div>
                    <div class="col-6 col-12-xsmall">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
                    </div>
		<div class="col-12">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
                	
	<div class="container">
        </div></div>
        </fieldset>
</form>	

{include file='messages.tpl'}

{/block}
