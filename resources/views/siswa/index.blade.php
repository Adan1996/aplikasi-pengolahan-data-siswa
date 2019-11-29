<div class="siswa">
    <h2>Siswa</h2>

    <?php if(!empty($siswa)) : ?>
    <ul>
        <?php foreach($siswa as $s) : ?>
        <li><?= $s; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</div>