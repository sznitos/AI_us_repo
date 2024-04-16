{extends file="../templates/main.tpl"}

{block name=footer}Jakis tam tekst dla stopki. Lorem Ipsum...{/block}

{block name=content}

    <h2>Prosty kalkulator</h2>

    <div class="row gtr-150">
        <div class="col-4 col-12-medium">Wprowadź dane do kalkulatora lokat.</div>
<form action="{$app_url}/app/calc.php" method="post">
       
    <div class="row gtr-uniform gtr-50">
        <div class="col-6 col-12-xsmall">
            <input id="id_cash" type="text" name="cash" value="{$form['cash']}" placeholder="Ile pieniędzy? [PLN]" />
        </div>
        <div class="col-6 col-12-xsmall">
            <input id="id_time" type="text" name="time" value="{$form['time']}" placeholder="Na ile miesięcy?" />
        </div>    
        <div class="col-6 col-12-xsmall">
            <input id="id_percent" type="text" name="percent" value="{$form['percent']}" placeholder="Oprocentowanie w skali roku?"/>
        </div>
    <div class="col-12">
        <ul class="actions">
            <li><input type="submit" value="Oblicz" class="primary" /></li>
        </ul>
    </div> 
	
</div>
</form></div>
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Uzyskane odsetki:</h4>
        <table><td>
	{$result} zł (brutto)
	</td>
        <tr><td>
	{$result_netto} zł (netto)
            </td> </table>
{/if}

</div>
</div>

{/block}