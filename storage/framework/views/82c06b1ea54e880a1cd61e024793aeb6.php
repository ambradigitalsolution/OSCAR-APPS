<?php $__env->startSection('content'); ?>
<style>
    .success-container {
        max-width: 600px;
        margin: 120px auto 40px;
        padding: 40px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        text-align: center;
    }
    .success-icon {
        width: 80px;
        height: 80px;
        background: #e6f7ef;
        color: #03ac0e;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 24px;
    }
    .success-title {
        font-size: 1.5rem;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 12px;
    }
    .success-text {
        font-size: 1rem;
        color: #64748b;
        margin-bottom: 32px;
        line-height: 1.5;
    }
    .prospect-details {
        text-align: left;
        background: #f8fafc;
        padding: 20px;
        border-radius: 12px;
        margin-bottom: 32px;
        border: 1px solid #e2e8f0;
    }
    .detail-row {
        margin-bottom: 12px;
    }
    .detail-label {
        font-size: 0.85rem;
        color: #64748b;
        margin-bottom: 4px;
    }
    .detail-value {
        font-size: 1rem;
        font-weight: 600;
        color: #1e293b;
    }
    .btn-primary {
        display: inline-block;
        width: 100%;
        padding: 14px;
        background: #03ac0e;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 700;
        transition: background 0.2s;
    }
    .btn-primary:hover {
        background: #028a0b;
    }
    .btn-outline {
        display: inline-block;
        width: 100%;
        padding: 14px;
        background: white;
        color: #03ac0e;
        border: 1px solid #03ac0e;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 700;
        margin-top: 12px;
        transition: all 0.2s;
    }
    .btn-outline:hover {
        background: #e6f7ef;
    }
</style>

<div class="success-container">
    <div class="success-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12"></polyline>
        </svg>
    </div>
    
    <h1 class="success-title">Prospek Berhasil Disimpan!</h1>
    <p class="success-text">Pesanan produk telah berhasil dicatat ke dalam sistem. Anda dapat melihat detailnya di bawah ini atau kembali mencari produk lain.</p>
    
    <div class="prospect-details" id="prospectDetails">
        <!-- Injected via JS -->
    </div>
    
    <a href="/dashboard?role=<?php echo e($role ?? 'member'); ?>" class="btn-primary">Kembali ke Katalog Produk</a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const detailsContainer = document.getElementById('prospectDetails');
        
        let html = `
            <div class="detail-row">
                <div class="detail-label">Tanggal Prospek</div>
                <div class="detail-value">${new Date().toLocaleDateString('id-ID', {day: 'numeric', month: 'long', year: 'numeric'})}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Total Barang Ditawarkan</div>
                <div class="detail-value">Menunggu data...</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Status</div>
                <div class="detail-value" style="color: #03ac0e;">Pesanan Baru</div>
            </div>
        `;
        
        detailsContainer.innerHTML = html;
        
        // Optional: clear cart variables if needed
        localStorage.removeItem('cartItems');
        localStorage.removeItem('cartCount');
        if(typeof updateCartBadge === 'function') updateCartBadge();
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\OSCARAPP\resources\views/pengajuan.blade.php ENDPATH**/ ?>