<?php if (!empty($testimonis) && is_array($testimonis)): ?>
    <?php foreach ($testimonis as $testimoni): ?>
        <div class="p-4 border border-gray-500 rounded-lg">
            <p class="text-gray-800"><?= esc($testimoni['testimoni_text']) ?></p>
            <div class="mt-2 text-sm text-gray-500">
                <span>Dibuat: <?= date('d/m/Y H:i', strtotime($testimoni['created_at'])) ?></span>
            </div>
            <div class="mt-2">
                <button onclick="editTestimoni(<?= $testimoni['id_testimoni'] ?>)"
                    class="text-blue-600 hover:underline">Edit</button>
                <button onclick="deleteTestimoni(<?= $testimoni['id_testimoni'] ?>)"
                    class="text-red-600 hover:underline ml-4">Hapus</button>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p class="text-gray-500">Belum ada testimoni.</p>
<?php endif; ?>