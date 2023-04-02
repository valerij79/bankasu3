<p>Current amount of funds: <?= $client['funds']?></p>
<form action="<?= URL ?>clients/show/<?= $client['id'] ?>/addFunds" method="post">
    <input type="text" name="funds">
    <input type="submit" value="Add funds">
</form>