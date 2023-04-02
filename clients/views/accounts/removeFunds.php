<p>The amount of existing funds: <?= $client['funds']?></p>
<form action="<?= URL ?>clients/show/<?= $client['id'] ?>/removeFunds" method="post">
    <input type="text" name="funds">
    <input type="submit" value="Subtract funds">
</form>