<?php $__env->startSection('content'); ?>
<style>
    .prospect-page { max-width: 1200px; margin: 40px auto; padding: 0 24px; }
    .prospect-header { margin-bottom: 24px; }
    .prospect-title { font-size: 1.5rem; font-weight: 800; color: #1e293b; }
    .prospect-list { display: grid; grid-template-columns: 1fr; gap: 16px; }
    .prospect-card { background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: flex-start; }
    .prospect-info { flex: 1; }
    .client-name { font-weight: 700; font-size: 1.1rem; color: #1e293b; margin-bottom: 4px; }
    .prospect-date { font-size: 0.85rem; color: #64748b; margin-bottom: 8px; }
    .prospect-notes { font-size: 0.95rem; color: #475569; }
    
    .status-container { display: flex; flex-direction: column; align-items: flex-end; }
    .prospect-status { display: inline-flex; align-items: center; padding: 6px 14px; border-radius: 99px; font-size: 0.85rem; font-weight: 600; border: none; outline: none; appearance: none; cursor: default; }
    
    /* Select styles when owner */
    select.prospect-status { cursor: pointer; padding-right: 30px; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 10px center; background-size: 12px; border: 1px solid transparent; transition: all 0.2s; }
    select.prospect-status:hover { border-color: rgba(0,0,0,0.1); }
    select.prospect-status:focus { box-shadow: 0 0 0 2px rgba(0,0,0,0.05); }
    select.prospect-status option:disabled { color: #94a3b8; background-color: #f1f5f9; font-style: italic; }

    /* Status Colors */
    .badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 0.85rem;
        font-weight: 700;
    }
    .badge-new { background: #FFF4E5; color: #E57300; }
    .badge-process { background: #E8F7F0; color: #00AA5B; }
    .badge-shipped { background: #E5F3FF; color: #0064D2; }
    .badge-done { background: #E5E7E9; color: #6D7588; }
    .badge-cancel { background: #FFEAEA; color: #EF144A; }
    
    .timestamp-info { font-size: 0.75rem; color: #64748b; margin-top: 6px; text-align: right; }
</style>

<div class="prospect-page">
    <div class="prospect-header">
        <h1 class="prospect-title">Daftar Prospek Pesanan</h1>
        <p style="color: #64748b; margin-top: 4px;">Kelola status prospek penjualan Anda.</p>
    </div>
    
    <div class="prospect-list">
        <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="prospect-card">
            <div class="prospect-info">
                <div class="client-name"><?php echo e($order->buyer_name); ?> (<?php echo e($order->buyer_city); ?>)</div>
                <div class="prospect-date"><?php echo e($order->created_at->format('d F Y, H:i')); ?> - Nomor: <?php echo e($order->order_id); ?></div>
                <div class="prospect-notes">
                    Produk Utama: <?php echo e($order->items->first()->product_name ?? 'Produk'); ?> 
                    (Total: <?php echo e($order->items->sum('qty')); ?> Barang)
                </div>
            </div>
            <div class="status-container">
                <?php
                    $badgeClass = match($order->status) {
                        'Pengajuan Baru' => 'badge-new',
                        'Dikonfirmasi' => 'badge-process',
                        'Dalam Pengiriman' => 'badge-shipped',
                        'Selesai' => 'badge-done',
                        'Ditolak' => 'badge-cancel',
                        default => 'badge-new',
                    };
                ?>
                <span class="badge <?php echo e($badgeClass); ?>"><?php echo e($order->status); ?></span>
                <div class="timestamp-info">Update Terakhir: <br><?php echo e($order->updated_at->format('d M Y, H:i')); ?></div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div style="text-align: center; padding: 40px; color: #64748b;">Belum ada riwayat pengajuan.</div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\OSCARAPP\resources\views/member_prospek.blade.php ENDPATH**/ ?>