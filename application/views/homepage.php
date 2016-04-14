<div class="gamestatus">
  <div class="title">{gamestatus_title}</div>
  <div class="subtitle" id="round_number">{gamestatus_round}</div>
  {gamestatus}
</div>
<div class="playerstatus">
  <table class="table">
    <div class="title">{playerstatus_title}</div>
    <tr id="playerrow_header">
      <td class="td_header">Player</td>
      <td class="td_header">Peanuts</td>
      <td class="td_header">Equity</td>
    </tr>
    {playerstatus}
    <tr class="playerrow">
      <td class="playername"><a href="{playerlink}">{playername}</a></td>
      <td class="peanuts">{playerpeanuts}</td>
      <td class="equity">{playerequity}</td>
    </tr>
    {/playerstatus}
</table>
</div>
<div class="transactions">
  <table class="table">
    <div class="title">{transactions_title}</div>
    <tr id="transactionsrow_header">
      <td class="td_header">Player</td>
      <td class="td_header">Action</td>
      <td class="td_header">Series</td>
    </tr>
    {transactions}
    <tr class="transactionsrow">
      <td class="playername"><a href="{playerlink}">{playername}</a></td>
      <td class="action">{action}</td>
      <td class="transactionseries">{transaction_series}</td>
    </tr>
    {/transactions}
  </table>
</div>
<div>
  {token}
</div>
