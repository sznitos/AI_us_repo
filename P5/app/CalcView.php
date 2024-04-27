{extends file="../templates/main.tpl"}
{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

</nav>
</header> 

<div id="main" class="wrapper style1">
    <div class="container">
        <h3>Kalkulator lokaty</h3>
        <div class="row gtr-150">
            <div class="col-4 col-12-medium">Cześć, <?php echo $role;
echo($role == "admin") ? (" 😎✨") : (" 😊"); ?>! </br>Wprowadź dane do kalkulatora lokat.</div>
            <form action="{$conf->app_url}/app/calc.php" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <input id="id_cash" type="text" name="cash" value="" placeholder="Ile pieniędzy? [PLN]" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="id_time" type="text" name="time" value="" placeholder="Na ile miesięcy?" />
                    </div>    
                    <div class="col-6 col-12-xsmall">
                        <input id="id_percent" type="text" name="percent" value="" placeholder="Oprocentowanie w skali roku?"/>
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Oblicz" class="primary" /></li>
                            <li><input type="reset" value="Wyczyść" /></li>
                        </ul>
                    </div>    
            </form>	
        </div>    
        <div class="messages">

            {* wyświeltenie listy błędów, jeśli istnieją *}
            {if $msgs->isError()}
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                {foreach $msgs->getErrors() as $err}
                {strip}
                <li>{$err}</li>
                {/strip}
                {/foreach}
            </ol>
            {/if}

            {* wyświeltenie listy informacji, jeśli istnieją *}
            {if $msgs->isInfo()}
            <h4>Informacje: </h4>
            <ol class="inf">
                {foreach $msgs->getInfos() as $inf}
                {strip}
                <li>{$inf}</li>
                {/strip}
                {/foreach}
            </ol>
            {/if}

            {if isset($res->result)}
            <h4>Wynik</h4>
            Zysk (zł):<p>
            <table>
                <tr>
                    <th>BRUTTO</th>
                    <th>NETTO</th>
                </tr>
                <td>
                    {$res->result} zł 
                </td>
                <td>
                    {$res_n->result_netto}
                </td>
            </table>
            </p>

            {/if}

        </div>

        {/block}