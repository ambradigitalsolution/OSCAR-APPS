<header class="main-header">
    <div class="header-container">
        <!-- Logo -->
        <a href="/dashboard?role={{ request()->query('role', 'member') }}" class="logo">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-icon">
                <path d="M8 9V7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7V9" stroke="#00B050" stroke-width="2.5" stroke-linecap="round"/>
                <rect x="3" y="9" width="18" height="12" rx="2" fill="#00B050"/>
                <path d="M8 12V14M16 12V14" stroke="#FFF" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
            </svg>
            <span class="logo-text">App <span class="highlight">Oscar</span></span>
        </a>



        <!-- Right CTA / Actions -->
        <div class="header-actions">
            <!-- Cart Icon -->
            <a href="/cart?role={{ request()->query('role', 'member') }}" class="cart-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" width="24" height="24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <span class="cart-badge">0</span>
            </a>
            
            <!-- User Profile -->
            <div class="user-profile-wrapper" style="display: flex; align-items: center; gap: 12px;">
                <div class="user-profile" style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 4px 12px; border-radius: 99px; background: #f1f5f9;">
                    <div class="user-avatar" style="width: 32px; height: 32px; border-radius: 50%; background: #00B050; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 14px; text-transform: uppercase;">
                        {{ substr(request()->query('role', 'Member'), 0, 1) }}
                    </div>
                    <span class="user-profile-text" style="font-size: 14px; font-weight: 600; color: #1e293b; text-transform: capitalize;">
                        {{ request()->query('role', 'Member') }}
                    </span>

                </div>
                
                <!-- Seller Center Link -->
                @if(strtolower(request()->query('role', 'Member')) === 'owner')
                <a href="/seller?role={{ request()->query('role', 'Member') }}" title="Seller Center" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 50%; background: #e0f2fe; color: #0284c7; text-decoration: none; transition: background 0.2s; margin-right: 4px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="18" height="18">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.999 2.999 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.999 2.999 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                    </svg>
                </a>
                @endif
                
                
                <!-- Riwayat Prospek Link -->
                @if(strtolower(request()->query('role', 'Member')) !== 'owner')
                <a href="/member/prospek?role={{ request()->query('role', 'Member') }}" title="Riwayat Prospek" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 50%; background: #f1f5f9; color: #475569; text-decoration: none; transition: background 0.2s; margin-right: 4px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="18" height="18">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
                @endif
                <!-- Logout Button -->
                <a href="/" title="Keluar (Logout)" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 50%; background: #fee2e2; color: #ef4444; text-decoration: none; transition: background 0.2s;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="18" height="18">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        updateCartBadge();
        // Listen to storage events to update badge across tabs
        window.addEventListener('storage', updateCartBadge);
    });

    function updateCartBadge() {
        const badge = document.querySelector('.cart-badge');
        if (badge) {
            let cartItems = [];
            try {
                cartItems = JSON.parse(localStorage.getItem('cartItems'));
            } catch(e) {}
            
            // Fix legacy state mismatch: if array is empty/null, force count to 0
            if (!cartItems || cartItems.length === 0) {
                localStorage.setItem('cartCount', 0);
                badge.textContent = 0;
            } else {
                const count = cartItems.reduce((sum, item) => sum + parseInt(item.qty || 0), 0);
                localStorage.setItem('cartCount', count);
                badge.textContent = count;
            }
        }
    }
</script>
